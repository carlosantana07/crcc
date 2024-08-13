<?php

namespace Drupal\crcccontactform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class crcccontactform extends FormBase
{
  /**
   * return the form id
   */
  public function getFormId()
  {
    return 'contact-form';
  }
  /**
   * building the form
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    //========================================================
    //VARIABLES
    //array of option for the province selectors

    //signed agreement options
    $signedAgreement = [
      '' => t('Please Select'),
      'NO-NON' => t('No'),
      'YES-OUI' => t('Yes')
    ];
    //========================================================
    //
    //

//<div class="alert-success"><p>Thank you for contacting the Commission. Your reference number is <strong>'.$_GET['result'].'</strong></p></div>
    if(isset($_GET['result'])){ 
    $form['Title_info'] = [
      '#type' => 'markup',
      '#markup' => t('<div class="row">
      <div class="mrgn-tp-0">

        <main role="main" property="mainContentOfPage" class="col-md-12">


                          <h1 id="wb-cont">Contact Form</h1>

          <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>




<div class="highlighted col-md-12">  <div class="region region-highlighted">
    <div data-drupal-messages-fallback="" class="hidden"></div><div data-drupal-messages="">
  <div class="messages__wrapper">
              <section tabindex="0" aria-label="Status message" role="status" class="alert alert-success alert-dismissible mrgn-tp-md mrgn-bttm-md">
      <button aria-label="Close" data-dismiss="alert" class="close" role="button" type="button"><span aria-hidden="true">×</span></button>
              <h2 class="sr-only">Status message</h2>
<p>Thank you for contacting the Commission. Your reference number is <strong>'.$_GET['result'].'</strong></p>
          </section>
    </div>
</div>

  </div>
</div>



  <div class="wb-frmvld wb-fdbck nojs-hide wb-init wb-frmvld-inited" id="wb-auto-1">
      <!--<div class="alert alert-warning">
  <h2>Service Interruption </h2>
     <p>The Contact Form will be unavailable on Tuesday, May 14, from 6 p.m. to 8 p.m. (ET) due to system maintenance.</p>
  </div>-->
      <p>Thank you for visiting the Commission &#39; s Web site. </p>
      <ul>
          <li>I want to <a href="/en/make-complaint">file a complaint</a> against a member of the <abbr title="Royal Canadian Mounted Police">RCMP</abbr></li>
          <li>I am not satisfied with the way the RCMP handled my complaint and would like the Commission to <a href="/en/request-review">review the disposition of my complaint</a></li>
          <li>I wish to make an <a href="/en/making-access-information-and-privacy-request">access to Information or privacy (ATIP) request</a></li>
          <li>I am a journalist and wish to contact a <a href="/en/newsroom">media spokesperson</a></li>
      </ul>
      <p class="mrgn-bttm-lg"><strong>If you cannot find the answer to your question above, please fill in the following form.</strong></p>

    '),
    ];
    }else {
    
	    $form['Title_info'] = [
		          '#type' => 'markup',
			        '#markup' => t('<div class="row">
				      <div class="mrgn-tp-0">

        <main role="main" property="mainContentOfPage" class="col-md-12">


                          <h1 id="wb-cont">Contact Form</h1>

          <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>



  <div class="wb-frmvld wb-fdbck nojs-hide wb-init wb-frmvld-inited" id="wb-auto-1">
      <!--<div class="alert alert-warning">
  <h2>Service Interruption </h2>
     <p>The Contact Form will be unavailable on Tuesday, May 14, from 6 p.m. to 8 p.m. (ET) due to system maintenance.</p>
  </div>-->
      <p>Thank you for visiting the Commission &#39; s Web site. </p>
      <ul>
          <li>I want to <a href="/en/make-complaint">file a complaint</a> against a member of the <abbr title="Royal Canadian Mounted Police">RCMP</abbr></li>
          <li>I am not satisfied with the way the RCMP handled my complaint and would like the Commission to <a href="/en/request-review">review the disposition of my complaint</a></li>
          <li>I wish to make an <a href="/en/making-access-information-and-privacy-request">access to Information or privacy (ATIP) request</a></li>
          <li>I am a journalist and wish to contact a <a href="/en/newsroom">media spokesperson</a></li>
      </ul>
      <p class="mrgn-bttm-lg"><strong>If you cannot find the answer to your question above, please fill in the following form.</strong></p>

    '),
    ];
    
    }
    //========================================================

    //========================================================
    //user personnal information

    //user firstname
    $form['contact_name_first'] = [
      '#type' => 'textfield',
      '#name' => 'contact_name_first',
      '#title' => $this->t('First Name (Required)'),
      '#required' => TRUE,
    ];
    $form['Title_given_name'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div>
      <div class="col-md-5" <div="">
    '),
    ];
    //user lastname
    $form['contact_name_last'] = [
      '#type' => 'textfield',
      '#name' => 'contact_name_last',
      '#title' => $this->t('Last Name (Required)'),
      '#required' => TRUE,
    ];
    //user email address
    $form['contact_email'] = [
      '#type' => 'textfield',
      '#name' => 'contact_email',
      '#title' => $this->t('E-mail Address (yourname@domain.com)'),
    ];
    $form['contact_subject'] = [
      '#type' => 'textfield',
      '#name' => 'contact_subject',
      '#title' => $this->t('Subject (Required)'),
      '#required' => TRUE,
    ];

    $form['contact_comments'] = [
      '#type' => 'textarea',
      '#name' => 'contact_comments',
      '#title' => $this->t('Comments (Required)'),
      '#required' => TRUE,
    ];

    $form['file_last_Definition'] = [
      '#type' => 'markup',
      '#markup' => t('<div class="well"><label class="control-label" for="note_acknowledge"><span class="field-name">I consent to the use of my personal information by the Civilian Review and Complaints Commission for the purpose of responding to my inquiry.</span> <strong>(Required)</strong> </label>


 
'),
    ];

    
    $form['contact_for_messages_questions_informal'] = [
      '#type' => 'select',
      '#name' => 'contact_for_messages_questions_informal',
      '#title' => $this->t('If yes, did you sign an agreement with the RCMP to resolve this complaint informally? (Required)'),
      '#options' => $signedAgreement,
      '#required' => TRUE,
    ];

//========================================================
    //hidden fields

    $form['intake_log'] = [
      '#type' => 'hidden',
      '#name' => 'intake_log',
      '#value' => '*',
    ];
    $form['form_date'] = [
      '#type' => 'hidden',
      '#name' => 'form_date',
      '#value' => '17-May-2014',
    ];
    $form['form_time'] = [
      '#type' => 'hidden',
      '#name' => 'form_time',
      '#value' => '09:22:03',
    ];
    $form['form_added_by'] = [
      '#type' => 'hidden',
      '#name' => 'form_added_by',
      '#value' => 'ccmEnvoy',
    ];

    $form['form_caller_type'] = [
      '#type' => 'hidden',
      '#name' => 'form_caller_type',
      '#value' => '*',
    ];

    $form['form_intake_method'] = [
      '#type' => 'hidden',
      '#name' => 'form_intake_method',
      '#value' => 'ONLINE-EN LIGNE',
    ];
    $form['form_status'] = [
      '#type' => 'hidden',
      '#name' => 'form_status',
      '#value' => 'PENDING-EN ATTENTE',
    ];
    $form['form_type'] = [
      '#type' => 'hidden',
      '#name' => 'form_type',
      '#value' => 'INT-RÉC',
    ];
    $form['form_crcc_office'] = [
      '#type' => 'hidden',
      '#name' => 'form_crcc_office',
      '#value' => 'NIO-BNRP',
    ];
    $form['form_case_taken_by'] = [
      '#type' => 'hidden',
      '#name' => 'form_case_taken_by',
      '#value' => 'CRCC-CCETP',
    ];

    $form['form_assign_to'] = [
      '#type' => 'hidden',
      '#name' => 'form_assign_to',
      '#value' => 'CCS-CSI-AA-AA',
    ];
    $form['form_activity'] = [
      '#type' => 'hidden',
      '#name' => 'form_activity',
      '#value' => 'Review new Intake - Nouvelle réception à examiner',
    ];
    $form['form_activity_type'] = [
      '#type' => 'hidden',
      '#name' => 'form_activity_type',
      '#value' => 'INT-RÉC',
    ];
    $form['form_assign_date'] = [
      '#type' => 'hidden',
      '#name' => 'form_assign_date',
      '#value' => '17-May-2014',
    ];
    $form['form_deadline'] = [
      '#type' => 'hidden',
      '#name' => 'form_deadline',
      '#value' => '21-May-2014',
    ];
    $form['form_assigned_by'] = [
      '#type' => 'hidden',
      '#name' => 'form_assigned_by',
      '#value' => 'ccmEnvoy',
    ];
    $form['form_modified_by'] = [
      '#type' => 'hidden',
      '#name' => 'form_modified_by',
      '#value' => 'ccmEnvoy',
    ];
    $form['form_modified_date'] = [
      '#type' => 'hidden',
      '#name' => 'form_modified_date',
      '#value' => '17-May-2014',
    ];
    $form['wdtEnvoy_RouteId'] = [
      '#type' => 'hidden',
      '#name' => 'wdtEnvoy_RouteId',
      '#value' => 'contact',
    ];


    $form['file_last_Definition_div'] = [
      '#type' => 'markup',
      '#markup' => t(''),
    ];

    //========================================================
    //user submitting the form options
    //user submit button
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit request'),
      '#button_type' => 'primary',
    ];
    $form['complaint_closingCompleteDiv'] = [
      '#type' => 'markup',
      '#markup' => t('
          </div>'
      ),
    ];
    //returning newly built form
    return $form;
  }
  /**
   * {@inheritdoc}
   */ public function validateForm(array &$form, FormStateInterface $form_state)
  {
    $emptyString = '';
    $count = 0;

    //user fields validation
    if (strlen($form_state->getValue('contact_name_first')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_name_first', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_name_last')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_name_last', $this->t('Error ' . $count . ': This field is required.'));
    }
    /*if (strlen($form_state->getValue('contact_subject ')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_subject', $this->t('Error ' . $count . ': This field is required.'));
    }*/
    if (strlen($form_state->getValue('contact_comments')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_comments', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_email')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_email', $this->t('Error ' . $count . ': This field is required.'));
    }

    if (strlen($form_state->getValue('contact_for_messages_questions_informal')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_informal', $this->t('Error ' . $count . ': This field is required.'));
    }



  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {

    // try{
    $field = $form_state->getValues();


    //========================================================
//CCM_DETAIL TABLE
//========================================================
//user personnal information Section
    $fields['LNAME'] = $field["contact_name_last"];
    $fields['FNAME'] = $field["contact_name_first"];
    $fields["PROV"] = "NA-SO";
    $fields["TEL1"] = "Unknown";
    $fields["EMAIL"] = $field['contact_email'];
//========================================================
//CCM_MASTER TABLE | HIDDEN FIELDS
//========================================================
    $fields["ADDBY"] = "svc_envoy";
    //$fields["CALLER_TYPE"] = "UNKNOWN-INCONNU";
    $fields["INTAKE_METHOD"] = "ONLINE-EN LIGNE";
    $fields["CASE_STATUS"] = "PENDING-EN ATTENTE";
    $fields["CASE_TYPE"] = "INT-RÉC";
    $fields["RECORD_OWNER"] = "INTAKE";
    $fields["CASE_TAKER"] = "CRCC-CCETP";
    $fields["CALLER_TYPE"] = "UNKNOWN-INCONNU";
    $fields["CASE_DETAILS"] = $field['contact_subject'];
    $fields["COMPLAINANT_INCIDENT_INVOLVEMENT"] = "UNK-INC";
    $fields["ENTEREDBY"] = "ccmEnvoy";
    $fields["USERID"] = "svc_envoy";
    $fields["TEXTDATA"] = $field['contact_comments'];
    $fields["NOTE_TYPE"] = "DETAILS-DÉTAILS";
    $fields["ASGNTO"] = "NIO-BNRP IO-ARP";
    $fields["ASGNBY"] = "svc_envoy";
    $fields["RMODBY"] = "svc_envoy";
    $fields["TASK"] = "Intake - Review new correspondence / Réception - Examiner les nouvelles pièces de correspondance";

    $result = null;

    if (isset($_POST['wdtEnvoy_RouteId'])) {
      extract($_POST);
      $url = 'http://cms-ncr-001:51510/submit/add';
      $fields = http_build_query($_POST);

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $result = curl_exec($ch);

      $r = curl_getinfo($ch);
      $rcode = $r['http_code'];

      /* print "<div class='alert alert-success'><p>Thank you for contacting the Commission. Your reference number is <strong>".$result."</strong></p></div>"; */

      if ($result == 'A server exception has been caught: One or more errors occurred.' or $result == NULL) {
        header('Location:/en/failed-submission');
        exit;
      } else {
        header('Location:/en/contact-form?result=' . $result);
        curl_close($ch);
      }
    }

  }


}
