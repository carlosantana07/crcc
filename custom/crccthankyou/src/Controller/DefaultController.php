<?php

namespace Drupal\crccthankyou\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return array
   *   Return Hello string.
   */
  public function crccthankyou() {

    return [
      '#type' => 'markup',
      '#markup' => $this->t('<h2>Thank you</h2>')
      . '<p>The Commission has received your online complaint. It will be reviewed to make certain that it meets the requirements of a public complaint under the <em>Royal Canadian Mounted Police Act</em>.</p>'
      .'<p>In cases where additional information is needed, an intake officer will contact you using the details you provided.</p>'
      .'<p>Your reference number is <strong>'.$_GET['result'].'</strong></p> ',
    ];
  }

}
