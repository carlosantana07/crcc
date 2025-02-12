<?php

namespace Drupal\wxt_library\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\wxt_library\LibraryService;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Builds the search form for the search block.
 */
class SearchCanadaBlockForm extends FormBase {

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Language manager for retrieving the default langcode.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * Drupal\wxt_library\LibraryService definition.
   *
   * @var \Drupal\wxt_library\LibraryService
   */
  protected $wxtLibraryServiceWxT;

  /**
   * Constructs a new SearchBlockForm.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer.
   * @param \Drupal\wxt_library\LibraryService $wxt_library_service_wxt
   *   The LibraryService.
   */
  public function __construct(
    ConfigFactoryInterface $config_factory,
    LanguageManagerInterface $language_manager,
    RendererInterface $renderer,
    LibraryService $wxt_library_service_wxt
  ) {
    $this->configFactory = $config_factory;
    $this->languageManager = $language_manager;
    $this->renderer = $renderer;
    $this->wxtLibraryServiceWxT = $wxt_library_service_wxt;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('language_manager'),
      $container->get('renderer'),
      $container->get('wxt_library.service_wxt')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'wxt_search_canada_block_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $wxt_active = $this->wxtLibraryServiceWxT->getLibraryName();
    $submit_title = $this->t('Search');

    $form['keys'] = [
      '#id' => 'wb-srch-q',
      '#type' => 'search',
      '#title' => $this->t('Search'),
      '#title_display' => 'invisible',
      '#size' => 27,
      '#maxlength' => 128,
      '#default_value' => '',
      '#placeholder' => '',
    ];

    if ($wxt_active == 'gc_intranet') {
      $form['keys']['#size'] = 21;
      $form['keys']['#maxlength'] = 150;
    }

    $form['submit_container'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['submit'],
      ],
    ];

    $form['submit_container']['submit'] = [
      '#type' => 'submit',
      '#value' => $submit_title,
      '#id' => 'wb-srch-sub',
    ];

    $form['submit_container']['submit']['#value'] = '';
    $form['keys']['#placeholder'] = $this->t('Search website');
    
    $lang = $this->languageManager->getCurrentLanguage()->getId();


    $form['#action'] = 'https://www.canada.ca/' . $lang . '/sr/srb.html#wb_land';
    $form['#method'] = 'get';

    if($lang){
    	$form['keys']['#placeholder'] = $this->t('Search Canada.ca');
    }else{
    	$form['keys']['#placeholder'] = $this->t('Rechercher dans Canada.ca');
    }
    $form['keys']['#placeholder'] = $this->t('Rechercher dans Canada.ca');
    $form['keys']['#name'] = 'q';

    $form['cdn'] = [
      '#name' => 'cdn',
      '#value' => 'canada',
      '#type' => 'hidden',
      '#input' => 'TRUE',
    ];
    $form['st'] = [
      '#name' => 'st',
      '#value' => 's',
      '#type' => 'hidden',
      '#input' => 'TRUE',
    ];
    $form['num'] = [
      '#name' => 'num',
      '#value' => '10',
      '#type' => 'hidden',
      '#input' => 'TRUE',
    ];
    $form['langs'] = [
      '#name' => 'langs',
      '#value' => 'eng',
      '#type' => 'hidden',
      '#input' => 'TRUE',
    ];
    $form['st1rt'] = [
      '#name' => 'st1rt',
      '#value' => '0',
      '#type' => 'hidden',
      '#input' => 'TRUE',
    ];
    $form['s5bm3ts21rch'] = [
      '#name' => 's5bm3ts21rch',
      '#value' => 'x',
      '#type' => 'hidden',
      '#input' => 'TRUE',
    ];

    if ($wxt_active == 'gcweb' || $wxt_active == 'gcweb_legacy') {
      $form['submit_container']['submit']['#value'] = '';
      if($lang=='en'){ 
	     $form['keys']['#placeholder'] = $this->t('Search Canada.ca');
      }else if($lang=='fr'){
	      $form['keys']['#placeholder'] = $this->t('Rechercher dans Canada.ca');
      }
    }

    if ($wxt_active == 'gc_intranet') {
      $form['submit_container']['submit']['#value'] = '';
      $form['keys']['#placeholder'] = $this->t('Search GCIntranet');
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // This form submits to the search page, so processing happens there.
  }

}
