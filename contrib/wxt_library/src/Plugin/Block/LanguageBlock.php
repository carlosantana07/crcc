<?php

namespace Drupal\wxt_library\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Drupal\Core\Routing\UrlGeneratorInterface;
use Drupal\path_alias\AliasManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\Markup;

/**
 * Provides a 'WxT Language switcher' block.
 *
 * @Block(
 *   id = "wxt_language_block",
 *   admin_label = @Translation("WxT Language switcher"),
 *   category = @Translation("WxT"),
 *   deriver = "Drupal\language\Plugin\Derivative\LanguageBlock"
 * )
 */
class LanguageBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Drupal\Core\Config\ConfigFactory definition.
   *
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * The path matcher.
   *
   * @var \Drupal\Core\Path\PathMatcherInterface
   */
  protected $pathMatcher;

  /**
   * The URL generator.
   *
   * @var \Drupal\Core\Routing\UrlGeneratorInterface
   */
  protected $urlGenerator;

  /**
   * The alias manager.
   *
   * @var \Drupal\path_alias\AliasManagerInterface
   */
  protected $aliasManager;

  /**
   * Constructs an LanguageBlock object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \Drupal\Core\Path\PathMatcherInterface $path_matcher
   *   The path matcher.
   * @param \Drupal\path_alias\AliasManagerInterface $alias_manager
   *   The alias manager service.
   * @param \Drupal\Core\Routing\UrlGeneratorInterface $url_generator
   *   The URL generator.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ConfigFactoryInterface $config_factory, LanguageManagerInterface $language_manager, PathMatcherInterface $path_matcher, AliasManagerInterface $alias_manager, UrlGeneratorInterface $url_generator) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $config_factory;
    $this->languageManager = $language_manager;
    $this->pathMatcher = $path_matcher;
    $this->aliasManager = $alias_manager;
    $this->urlGenerator = $url_generator;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory'),
      $container->get('language_manager'),
      $container->get('path.matcher'),
      $container->get('path_alias.manager'),
      $container->get('url_generator')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    $access = $this->languageManager->isMultilingual() ? AccessResult::allowed() : AccessResult::forbidden();
    return $access->addCacheTags(['config:configurable_language_list']);
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $current = $this->urlGenerator->generateFromRoute('<current>', [], [], TRUE)->getGeneratedUrl();
    $front = $this->aliasManager->getPathByAlias($current);
    $frontAlias = $this->configFactory->get('system.site')->get('page.front');
    $build = [];
    $route_match = \Drupal::routeMatch();
    // If there is no route match, for example when creating blocks on 404 pages
    // for logged-in users with big_pipe enabled using the front page instead.
    $url = $route_match->getRouteObject() ? Url::fromRouteMatch($route_match) : Url::fromRoute('<front>');

    $path_elements = explode('/', trim($front, '/'));
    foreach ($this->languageManager->getLanguages() as $language) {
      if (!empty($path_elements[0]) && $path_elements[0] == $language->getId()) {
        array_shift($path_elements);
        if (implode($path_elements) == trim($frontAlias, '/')) {
          $url = Url::fromRoute('<front>');
        }
      }
    }

    $language_types = $this->languageManager->getLanguageTypes();
    $type = in_array(LanguageInterface::TYPE_CONTENT, $language_types) ? LanguageInterface::TYPE_CONTENT : LanguageInterface::TYPE_INTERFACE;
    $language = $this->languageManager->getCurrentLanguage($type)->getId();
    $theme_config = $this->configFactory->get('wxt_library.settings');
    $wxt_active = $theme_config->get('wxt.theme');
    $links = $this->languageManager->getLanguageSwitchLinks($type, $url);

    if (isset($links->links)) {
      // Don't show all defined languages in language switcher.
      if (!empty($links->links[$language])) {
        unset($links->links[$language]);
      }
      $wxt_active = str_replace('-', '_', $wxt_active);
      $wxt_active = str_replace('theme_', '', $wxt_active);

      if ($wxt_active == 'gcweb') {
        if ($language == 'en') {
          if (isset($links->links['fr']) && !empty($links->links['fr'])) {
            $title_fr = $links->links['fr']['title'];
            $links->links['fr']['title'] = Markup::create('<span class="hidden-xs">' . $title_fr . '</span><abbr title="' . $title_fr . '" class="visible-xs h3 mrgn-tp-sm mrgn-bttm-0 text-uppercase">fr</abbr>');
          }
        }
        elseif ($language == 'fr') {
          if (isset($links->links['en']) && !empty($links->links['en'])) {
            $title_en = $links->links['en']['title'];
            $links->links['en']['title'] = Markup::create('<span class="hidden-xs">' . $title_en . '</span><abbr title="' . $title_en . '" class="visible-xs h3 mrgn-tp-sm mrgn-bttm-0 text-uppercase">en</abbr>');
          }
        }
      }

      $build = [
        '#theme' => 'links__language_block__' . $wxt_active,
        '#links' => $links->links,
        '#attributes' => [
          'class' => [
            "language-switcher-{$links->method_id}",
          ],
        ],
        '#set_active_class' => TRUE,
      ];
    }
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->configuration;

    // Production or minimized version.
    $form['wxt_library'] = [
      '#type' => 'details',
      '#title' => $this->t('Show current language in toggle'),
      '#description' => $this->t('Show the current language in the language toggle depending on selected theme.'),
      '#open' => FALSE,
    ];
    $form['wxt_library']['language_toggle'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Select the specific theme:'),
      '#options' => _wxt_library_options(),
      '#default_value' => is_null($config['language_toggle']) ? '' : $config['language_toggle'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $language_conf = $form_state->getValue('wxt_library');
    $this->configuration['language_toggle'] = $language_conf['language_toggle'];
  }

  /**
   * {@inheritdoc}
   *
   * @todo Make cacheable in https://www.drupal.org/node/2232375.
   */
  public function getCacheMaxAge() {
    return 0;
  }

}
