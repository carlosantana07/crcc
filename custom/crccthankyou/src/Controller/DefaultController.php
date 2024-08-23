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

    $translation = '<h2>Thank you</h2>
    <p>The Commission has received your online complaint. It will be reviewed to make certain that it meets the requirements of a public complaint under the <em>Royal Canadian Mounted Police Act</em>.</p>
      <p>In cases where additional information is needed, an intake officer will contact you using the details you provided.</p>
      <p>Your reference number is <strong>'.$_GET['result'].'</strong></p> ';

      if(str_contains( $_SERVER['REQUEST_URI'],"/fr")) {
      $translation = '<h2>Merci</h2>
    <p>La Commission a reçu votre plainte déposée en ligne. Nous l&#39;examinerons afin de nous assurer qu&#39;elle satisfait aux exigences de la <em>Loi sur la Gendarmerie royale du Canada</em>.</p>
      <p>Si des renseignements supplémentaires, un agent des plaintes communiquera avec vous et se servira des détails que vous nous avez fournis.</p>
      <p>Voici votre numéro de référence<strong>'.$_GET['result'].'</strong></p> ';
    }

    return [
      '#type' => 'markup',
      '#markup' => $this->t($translation),
    ];
  }

}
