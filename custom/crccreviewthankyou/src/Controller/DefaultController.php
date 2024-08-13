<?php

namespace Drupal\crccreviewthankyou\Controller;

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
  public function crccreviewthankyou() {



    return [
      '#type' => 'markup',
      '#markup' => $this->t('')
      . '<div class="alert alert-success"><p>Thank you for contacting the Commission. Your reference number is <strong>'.$_GET['result'].'</strong></p></div>
      <div class="row">
        <div class="col-md-5 pull-right">
           <div class="well mrgn-bttm-md">
             <p><span class="glyphicon glyphicon-question-sign text-primary"></span> Do you have questions? More information can be found in the <a href="/en/review-process-frequently-asked-questions">Review Process Frequently Asked Questions (FAQ)</a>. </p>
      <p><a href="/pdf/Review-examen_Form-inuk.pdf">cᑐᑦᓯᕋᐅᑦ ᕿᒥᕐᕈᔭᐅᑎᑦᓯᓂᕐᒧᑦ ᑕᑕᑎᒐᖅ</a> <br>Request for Review Form [PDF] </p>
      <p><a href="/en/qimirrujaunirmut-atuagait-apiqkutiugajuttut">ᕿᒥᕐᕈᔭᐅᓂᕐᒧᑦ ᐊᑐᐊᒐᐃᑦ: ᐊᐱᖅᑯᑎᐅᒐᔪᑦᑐᑦ</a> <br>Review Process FAQ</p>
           </div>
        </div>
        <div class="mrgn-lft-md mrgn-rght-md">
          <p>If you have made a complaint concerning the conduct of an  RCMP member and are not satisfied with the way the RCMP handled your complaint,  you can request a review.</p>

      <p>To request a review, you must have already received the report or decision letter from the RCMP (often called a "<strong>Letter of Disposition</strong>" or a "<strong>Notice of Direction</strong>").</p>
      <p>If you would like to request a review, please complete  the following form. </p> ',
    ];
  }

}
