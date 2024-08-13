<?php

namespace Drupal\crccthankyou\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'crccthankyou' Block.
 *
 * @Block(
 *   id = "crccthankyou_block",
 *   admin_label = @Translation("crccthankyou block"),
 *   category = @Translation("crcc thankyou block"),
 * )
 */
class crccthankyou extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('<div id="div1"></div>'),
    ];
  }

}
