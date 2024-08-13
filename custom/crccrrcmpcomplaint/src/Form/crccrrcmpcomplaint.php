<?php

namespace Drupal\crccrrcmpcomplaint\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class crccrrcmpcomplaint extends FormBase
{
  /**
   * return the form id
   */
  public function getFormId()
  {
    return 'crccrrcmpcomplaint-form';
  }
  /**
   * building the form
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    //========================================================
    //VARIABLES
    //array of option for the province selectors
    $provinces = [
      '' => t('Please Select'),
      'AB' => $this->t('AB'),
      'BC' => $this->t('BC'),
      'YK' => $this->t('YK'),
      'NT' => $this->t('NT'),
      'NU' => $this->t('NU'),
      'MB' => $this->t('MB'),
      'ON' => $this->t('ON'),
      'SK' => $this->t('SK'),
      'NB' => $this->t('NB'),
      'QC' => $this->t('QC'),
      'PE' => $this->t('PE'),
      'NL' => $this->t('NL'),
      'NS' => $this->t('NS'),
      'N/A' => $this->t('N/A')
    ];

    // Preferred Language of Correspondence options
    $preferredLanguage = [
      '' => t('Please Select'),
      'ENGLISH-ANGLAIS' => t('English'),
      'FRENCH-FRAN&#199;AIS' => t('French'),
    ];
    // Preferred method of communication options
    $preferredCommunication = [
      '' => t('Please Select'),
      'EMAIL-COURRIEL' => t('E-mail'),
      'TELEPHONE-TÉLÉPHONE' => t('Phone'),
      'LETTER-LETTRE' => t('Mail')
    ];
    //involved in accident options
    $accident = [
      '' => t('Please Select'),
      'NO-NON' => t('No'),
      'YES-OUI' => t('Yes')
    ];
    //filed complaint options
    $filedComplaint = [
      '' => t('Please Select'),
      'NO-NON' => t('No'),
      'YES-OUI' => t('Yes')
    ];
    //signed agreement options
    $signedAgreement = [
      '' => t('Please Select'),
      'NO-NON' => t('No'),
      'YES-OUI' => t('Yes')
    ];

    //signed agreement options
    $timeIncident = [
      '00:00 ' => t('00:00 '),
      '00:15 ' => t('00:15 '),
      '00:30 ' => t('00:30 '),
      '00:45 ' => t('00:45 '),
      '01:00 ' => t('01:00 '),
      '01:15 ' => t('01:15 '),
      '01:30 ' => t('01:30 '),
      '01:45 ' => t('01:45 '),
      '02:00 ' => t('02:00 '),
      '02:15 ' => t('02:15 '),
      '02:30 ' => t('02:30 '),
      '02:45 ' => t('02:45 '),
      '03:00 ' => t('03:00 '),
      '03:15 ' => t('03:15 '),
      '03:30 ' => t('03:30 '),
      '03:45 ' => t('03:45 '),
      '04:00 ' => t('04:00 '),
      '04:15 ' => t('04:15 '),
      '04:30 ' => t('04:30 '),
      '04:45 ' => t('04:45 '),
      '05:00 ' => t('05:00 '),
      '05:15 ' => t('05:15 '),
      '05:30 ' => t('05:30 '),
      '05:45 ' => t('05:45 '),
      '06:00 ' => t('06:00 '),
      '06:15 ' => t('06:15 '),
      '06:30 ' => t('06:30 '),
      '06:45 ' => t('06:45 '),
      '07:00 ' => t('07:00 '),
      '07:15 ' => t('07:15 '),
      '07:30 ' => t('07:30 '),
      '07:45 ' => t('07:45 '),
      '08:00 ' => t('08:00 '),
      '08:15 ' => t('08:15 '),
      '08:30 ' => t('08:30 '),
      '08:45 ' => t('08:45 '),
      '09:00 ' => t('09:00 '),
      '09:15 ' => t('09:15 '),
      '09:30 ' => t('09:30 '),
      '09:45 ' => t('09:45 '),
      '10:00 ' => t('10:00 '),
      '10:15 ' => t('10:15 '),
      '10:30 ' => t('10:30 '),
      '10:45 ' => t('10:45 '),
      '11:00 ' => t('11:00 '),
      '11:15 ' => t('11:15 '),
      '11:30 ' => t('11:30 '),
      '11:45 ' => t('11:45 '),
      '12:00 ' => t('12:00 '),
      '12:15 ' => t('12:15 '),
      '12:30 ' => t('12:30 '),
      '12:45 ' => t('12:45 '),
      '13:00 ' => t('13:00 '),
      '13:15 ' => t('13:15 '),
      '13:30 ' => t('13:30 '),
      '13:45 ' => t('13:45 '),
      '14:00 ' => t('14:00 '),
      '14:15 ' => t('14:15 '),
      '14:30 ' => t('14:30 '),
      '14:45 ' => t('14:45 '),
      '15:00 ' => t('15:00 '),
      '15:15 ' => t('15:15 '),
      '15:30 ' => t('15:30 '),
      '15:45 ' => t('15:45 '),
      '16:00 ' => t('16:00 '),
      '16:15 ' => t('16:15 '),
      '16:30 ' => t('16:30 '),
      '16:45 ' => t('16:45 '),
      '17:00 ' => t('17:00 '),
      '17:15 ' => t('17:15 '),
      '17:30 ' => t('17:30 '),
      '17:45 ' => t('17:45 '),
      '18:00 ' => t('18:00 '),
      '18:15 ' => t('18:15 '),
      '18:30 ' => t('18:30 '),
      '18:45 ' => t('18:45 '),
      '19:00 ' => t('19:00 '),
      '19:15 ' => t('19:15 '),
      '19:30 ' => t('19:30 '),
      '19:45 ' => t('19:45 '),
      '20:00 ' => t('20:00 '),
      '20:15 ' => t('20:15 '),
      '20:30 ' => t('20:30 '),
      '20:45 ' => t('20:45 '),
      '21:00 ' => t('21:00 '),
      '21:15 ' => t('21:15 '),
      '21:30 ' => t('21:30 '),
      '21:45 ' => t('21:45 '),
      '22:00 ' => t('22:00 '),
      '22:15 ' => t('22:15 '),
      '22:30 ' => t('22:30 '),
      '22:45 ' => t('22:45 '),
      '23:00 ' => t('23:00 '),
      '23:15 ' => t('23:15 '),
      '23:30 ' => t('23:30 '),
      '23:45 ' => t('23:45 ')
    ];

    //========================================================
   if(isset($_GET['result'])){
	  
	   $form['Result_number'] = [
	   
			         '#type' => 'markup',
				       '#markup' => t('

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
</div>'),
	   
	   ]; 
	  
	  
	  
	  
	  
	   $form['Title_info'] = [
      '#type' => 'markup',
      '#markup' => t('
      <div class="alert alert-info">
        <p>The Complaint Form along with all other relevant documentation will be shared with the <abbr title="Royal Canadian Mounted Police">RCMP</abbr> for investigation pursuant to <a href="https://laws-lois.justice.gc.ca/eng/acts/r-10/page-9.html#422053">subsection 45.53(10)  of the <abbr title="Royal Canadian Mounted Police">RCMP</abbr> Act.</a> Accordingly, a RCMP complaint investigator may contact you to provide a statement.</p>
        <p class="mrgn-lft-md"> The CRCC has the discretion to refuse certain complaints. To learn more, click <a href="/en/discretion-refuse-deal-complaint-policy">here</a>.</p>
      </div>'),
    ];
   }else{
	   $form['Title_info'] = [
		         '#type' => 'markup',
			       '#markup' => t('
			             <div class="alert alert-info">
				             <p>The Complaint Form along with all other relevant documentation will be shared with the <abbr title="Royal Canadian Mounted Police">RCMP</abbr> for investigation pursuant to <a href="https://laws-lois.justice.gc.ca/eng/acts/r-10/page-9.html#422053">subsection 45.53(10)  of the <abbr title="Royal Canadian Mounted Police">RCMP</abbr> Act.</a> Accordingly, a RCMP complaint investigator may contact you to provide a statement.</p>
					             <p class="mrgn-lft-md"> The CRCC has the discretion to refuse certain complaints. To learn more, click <a href="/en/discretion-refuse-deal-complaint-policy">here</a>.</p>
						           </div>'),
			           ];
   
   }

    //========================================================
//Complaint Checklist
    $form['complaint_checklist'] = [
      '#type' => 'markup',
      '#markup' => t('
      <div class="row">
		<div class="mrgn-tp-0">
		
			<main role="main" property="mainContentOfPage" class="col-md-9 col-md-push-3">			
			  	
			    
			    			        <h1 id="wb-cont">PUBLIC COMPLAINT FORM (for RCMP use only)</h1>
			    				
				<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script> 
<!--<div class="alert alert-warning">
<h2>Service Interruption </h2>
   <p>The PUBLIC COMPLAINT FORM (for RCMP use only) will be unavailable on Tuesday, May 14, from 6 p.m. to 8 p.m. (ET) due to system maintenance.</p>
</div>-->
<p class="mrgn-tp-md"><strong>If you are a member of the public, please click <a href="/en/make-complaint-form">here</a> to be redirected to the public access form.</strong></p>
<p><strong>This public complaint form is for RCMP use only. RCMP members please note: This form is not for use for Code of Conduct or statutory offences.</strong></p>
<div class="alert alert-info mrgn-tp-md">
<p class="mrgn-tp-xl"><strong>If you are using Internet Explorer and the form below is not displaying correctly, please contact the RCMP Central Helpdesk at 1-800-461-7797 or 613-993-6666 for further assistance.</strong></p>

<p class="mrgn-tp-xl"><strong>Before completing this form, please advise members of the public that:</strong></p>
<ul>
<li> Complaints can be filed independently with the Civilian Review and Complaints Commission (CRCC);</li>
<li>The public complaint process can be accessed through the CRCC&&#39;s website at www.complaintscommission.ca;</li>
<li>Pursuant to subsection 45.53(10) of the <em>RCMP Act</em>, the information provided on completed complaint forms will be forwarded to the RCMP as part of the public complaint process; and,</li>
<li>An RCMP investigator may contact them to obtain a statement or further information related to the complaint. </li>
</ul>
</div>
<div class="well well-md mrgn-tp-lg">
   <h2 class="mrgn-tp-0">Checklist</h2>
 
 
  <p><strong>Members should ensure that the complaint concerns:</strong> </p>
 <ul class="fa-ul">
        <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> the conduct of an RCMP officer in the performance of their policing duties. 
 <p class="mrgn-bttm-0"><strong>and</strong></p> </li>
 
   <li><span class="fa fa-li fa-check text-success"></span>  an incident that occurred within the last 12 months.<p>If the incident occurred more than 12 months ago, please advise the individual making the complaint that they will need to provide additional information / justification for the delay in order to determine if a time extension will be granted.</p> </li>
   </ul>
 
 <p class="mrgn-tp-md"><strong>Individuals making a complaint need to be:</strong></p>
  <ul class="fa-ul">
        <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> directly involved in the incident  
  <p class="mrgn-bttm-0"><strong>or</strong></p>
 </li>
    <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span>a witness to the incident  
  <p class="mrgn-bttm-0"><strong>or</strong></p></li>
 
    <li><span class="fa fa-li fa-check text-success"></span>  a person authorized to act on behalf  of the person directly involved in the incident </li>
  </ul>

</div>
 

 
<div class="wb-frmvld wb-fdbck nojs-hide wb-init wb-frmvld-inited" id="wb-auto-1">
  <form method="post" action="/en/fill-your-form" role="form" id="complaint-form" novalidate="novalidate">

  <fieldset class="mrgn-tp-xl">
  <legend>Complainant Contact Information</legend>


  <div class="row">
    <div class="col-md-6">'
      ),
    ];
    //========================================================
    //user personnal information

    //user lastname
    $form['complainant_name_family'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_name_family',
      '#title' => $this->t('Family Name (Required)'),
      '#required' => TRUE,
    ];
    $form['complainant_name_family_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> <div class="col-md-6">
       '),

    ];
    //user firstname
    $form['complainant_name_given'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_name_given',
      '#title' => $this->t('Given Name (Required)'),
      '#required' => TRUE,

    ];
    
    $form['complainant_name_given_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> </div>  <div class="row"><div class="col-md-6">
       '),

    ];
    //user date of birth chooser
    $form['complainant_date_birth'] = [
      '#type' => 'date',
      //'#type' => 'date',
      '#name' => 'complainant_date_birth',
      '#title' => $this->t('Date of Birth<br>'),
    ];

    $form['complainant_date_birth_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> <div class="col-md-6">
       '),

    ];
    //user mailling address
    $form['complainant_address_mailing_street_nbr'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_street_nbr',
      '#title' => $this->t('Street Address or Post Office Box (Required)'),
      '#required' => TRUE,
    ];
    $form['complainant_address_mailing_street_nbr_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> </div>  <div class="row"><div class="col-md-6">
       '),

    ];
    //user city of residence
    $form['complainant_address_mailing_city'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_city',
      '#title' => $this->t('City (Required)'),
      '#required' => TRUE,
    ];

    $form['complainant_address_mailing_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> <div class="col-md-6">
       '),

    ];
    //user province of residence
    $form['complainant_address_mailing_province'] = [
      '#type' => 'select',
      '#name' => 'complainant_address_mailing_province',
      '#title' => $this->t('Province (Canada) (Required)'),
      '#options' => $provinces,
      '#required' => TRUE,
    ];
    
    $form['complainant_address_mailing_province_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> </div>  <div class="row"><div class="col-md-6">
       '),

    ];
    //user postal code
    $form['complainant_address_mailing_postalcode'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_postalcode',
      '#title' => $this->t('Postal Code / ZIP Code (Required)'),
      '#required' => TRUE,
    ];

    
    $form['complainant_address_mailing_postalcode_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> <div class="col-md-6">
       '),

    ];


    //user country of residence
    $form['complainant_address_mailing_country'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_country',
      '#title' => $this->t('Country (Required)'),
      '#required' => TRUE,
    ];

    
    $form['complainant_complainant_address_mailing_country_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> </div>  <div class="row"><div class="col-md-6">
       '),

    ];
    //user telephone
    $form['complainant_phone_home'] = [
      '#type' => 'tel',
      '#name' => 'complainant_phone_home',
      '#title' => $this->t('Telephone number where you can be reached (999-999-9999) (Required)'),
      '#required' => TRUE,
    ];
    $form['complainant_phone_home_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> <div class="col-md-6">
       '),

    ];

    //user email address
    $form['complainant_email'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_email',
      '#title' => $this->t('E-mail Address (yourname@domain.com)'),
    ];

    $form['complainant_complainant_email_div'] = [
      '#type' => 'markup',
       '#markup' => t('
       </div> </div>   </fieldset>

       '),
    ];
    //========================================================
    //QUESTIONS
    //user date of birth label
    $form['question'] = [
      '#type' => 'markup',
      '#markup' => t('<fieldset class="mrgn-tp-lg"><legend>Questions</legend>'),
    ];

    $form['contact_for_messages_questions_form'] = [
      '#type' => 'select',
      '#name' => 'contact_for_messages_questions_form',
      '#title' => $this->t('Have you previously filed an official public complaint about this incident with the CRCC or the RCMP for which you were provided with a public complaint record/file number? (Required)'),
      '#options' => $filedComplaint,
      '#required' => TRUE,
    ];

    $form['contact_for_messages_questions_informal'] = [
      '#type' => 'select',
      '#name' => 'contact_for_messages_questions_informal',
      '#title' => $this->t('If yes, did you sign an agreement with the RCMP to resolve this complaint informally? (Required)'),
      '#options' => $signedAgreement,
      '#required' => TRUE,
    ];

    $form['complainant_language'] = [
      '#type' => 'select',
      '#name' => 'complainant_language',
      '#title' => $this->t('What is the complainant’s preferred language of correspondence (Required)'),
      '#options' => $preferredLanguage,
      '#required' => TRUE,
    ];
    $form['contact_tool'] = [
      '#type' => 'select',
      '#name' => 'contact_tool',
      '#title' => $this->t('How does the complainant want to be contacted? (Required)'),
      '#options' => $preferredCommunication,
      '#required' => TRUE,
    ];
    $form['contact_for_messages_questions_involved'] = [
      '#type' => 'select',
      '#name' => 'contact_for_messages_questions_involved',
      '#title' => $this->t('Is the complainant directly involved in the incident? (Required)'),
      '#options' => $accident,
      '#required' => TRUE,
    ];
   
  

    $form['question_closingfieldsetDiv'] = [
      '#type' => 'markup',
      '#markup' => t('</fieldset>'),
    ];
    //========================================================
    //Representative Authorization
    $form['authorization'] = [
      '#type' => 'markup',
      '#markup' => t('<fieldset class="mrgn-tp-lg"><legend>Representative Authorization</legend>'),
    ];
    $form['authorization_info'] = [
      '#type' => 'markup',
      '#markup' => t('  <div class="alert alert-info mrgn-tp-xl">
  
  <p>Complete the following section <strong>ONLY</strong> if the complainant wants the Civilian Review and Complaints Commission for the RCMP (the Commission) and the RCMP to communicate directly with a legal representative or an <span class="hover-text">advocate<span class="tooltip-text" id="right">An individual that you authorize to act/speak on your behalf</span></span> <strong>instead</strong> of the complainant.</p>
 
  <p>Please advise the complainant that by providing this information they are  authorizing the Commission &amp; RCMP to:</p>
<ul>
  <li>Communicate directly with a legal representative or an advocate instead of the complainant; and</li>
  <li>Disclose information related to the complaint to the complainant&&#39;s representative. </li>
 </ul> 
</div>'),
    ];

    $form['authorization_values'] = [
      '#type' => 'markup',
      '#markup' => t('
      <ul>
        <li>Family Name</li>
        <li>Given Name</li>
        <li>Telephone Number</li>
        <li>E-mail Address</li>
      </ul>'
      ),
    ];

    $form['authorization_moreInfo'] = [
      '#type' => 'markup',
      '#markup' => t('<p>By providing this information, you are authorizing the Commission and the RCMP to:</p>'),
    ];

    $form['authorization_options'] = [
      '#type' => 'markup',
      '#markup' => t('
      <ul>
        <li>Communicate directly with a legal representative or an advocate instead of yourself; and,</li>
        <li>Disclose information related to your complaint to your representative.</li>
      </ul>'
      ),
    ];

    $form['contact_for_messages_organization'] = [
      '#type' => 'textarea',
      '#name' => 'contact_for_messages_organization',
      '#title' => $this->t(''),
    ];

    $form['authorization_closingfieldsetDiv'] = [
      '#type' => 'markup',
      '#markup' => t('</fieldset>'),
    ];
    //========================================================
    //Details of Complaint
    $form['complaint'] = [
      '#type' => 'markup',
      '#markup' => t('<fieldset class="mrgn-tp-lg"><legend>Details of Complaint <small>(complete as much as possible)</small></legend> <div class="row">
    <div class="col-md-6">'),
    ];

    //date of incident chooser
    $form['incident_date'] = [
      '#type' => 'date', //'#type' => 'date',
      '#name' => 'incident_date',
      '#title' => $this->t('Date of Incident (Required)'),
      //'#required' => TRUE,
    ];

    $form['incident_dateDiv'] = [
      '#type' => 'markup',
      '#markup' => t('</div>
    <div class="col-md-6">'),
    ];

    //time of incident $chooser
    $form['incident_time'] = [
      '#type' => 'select',
      '#name' => 'incident_time',
      '#title' => $this->t('Time of Incident (approx.)'),
      '#options' => $timeIncident,
      //'#required' => FALSE,
    ];

    $form['incident_timeDiv'] = [
      '#type' => 'markup',
      '#markup' => t('</div>
    </div>  <div class="row">
    <div class="col-md-6">'),
    ];

    //province of incident
    $form['incident_province'] = [
      '#type' => 'select',
      '#name' => 'incident_province',
      '#title' => $this->t('Province (Canada) (Required)'),
      '#options' => $provinces,
      '#required' => TRUE,
    ];

    $form['incident_provinceDiv'] = [
      '#type' => 'markup',
      '#markup' => t('</div>
    <div class="col-md-6">'),
    ];
    // city of incident
    $form['incident_location'] = [
      '#type' => 'textfield',
      '#name' => 'incident_location',
      '#title' => $this->t('Location (city, town)'),
      //'#required' => FALSE,
    ];
    $form['incident_locationDiv'] = [
      '#type' => 'markup',
      '#markup' => t('</div>
    </div>  <div class="row">
    <div class="col-md-6">'),
    ];

   
    // city of incident
    $form['incident_country'] = [
      '#type' => 'textfield',
      '#name' => 'incident_country',
      '#title' => $this->t('Location (city, town)'),
      '#required' => TRUE,
    ];
    $form['incident_describe_info'] = [
      '#type' => 'markup',
      '#for' => 'circumstances',
      '#markup' => t(' <label class="control-label" for="circumstances"><span class="field-name">Please describe the circumstances of the complaint</span> <strong>(Required)</strong> </label>
      
  <p>Please include:</p>
  <ul>
  <li>Who was involved</li>
  <li>What was said and done</li>
  
  <li>Was there  any damage or injury</li>
  <li>Is there any additional information the individual believes relates to the incident or affected their interaction with the RCMP</li>
  </ul>'
      ),
    ];

    $form['circumstances'] = [
      '#type' => 'textarea',
      '#name' => 'circumstances',
      '#title' => $this->t('* Allowable limit: 3500 characters'),
      '#required' => TRUE,
    ];

    $form['circumstances_info'] = [
      '#type' => 'markup',
      '#for' => 'circumstances',
      '#markup' => t(' </fieldset>
<fieldset class="mrgn-tp-xl">
  <legend>RCMP Member(s)</legend> '
      ),
    ];


    $form['officer_entered_note'] = [
      '#type' => 'textarea',
      '#name' => 'officer_entered_note',
      '#title' => $this->t('List the member(s) whose conduct the individual is complaining about. If the complainant is unsure, please write UNKNOWN for each member involved and ask the individual to provide a brief physical description. <ul>
 <li> Name</li>
<li>Rank</li>
<li>Detachment</li>
</ul>'),
    ];
    $form['witness_entered_note'] = [
      '#type' => 'textarea',
      '#name' => 'witness_entered_note',
      '#title' => $this->t('<strong>Witness(es)</strong> if applicable. Witnesses may include RCMP members who are NOT the subject of the complaint. If the witness(es) and/or member(s) are unknown to the individual, ask the individual to provide a brief physical description.</span> </label>
      
 <ul>
 <li>First Name, Last Name: </li>
<li>Contact Information (address, phone, email) if known:</li>
</ul>'),
    ];

    $form['incident_textinfo'] = [
      '#type' => 'label',
      '#title' => t(' </fieldset>'),
      //'#required' => FALSE,
    ];

    $form['complaint_approval_text'] = [
      '#type' => 'markup',
      '#markup' => t('
      <fieldset class="mrgn-tp-xl">
  <legend>Privacy &amp; Disclosure of Personal Information</legend> 
    
  <div class="alert alert-info mrgn-tp-xl">
<p><strong>Member should advise complainant of the following:</strong></p>
<ol>
<li> By submitting a completed complaint form, the complainant authorizes the Commission to collect personal information for the purposes related to Parts VI, VII, VII.1 and VII.2 of the <em>RCMP Act</em>. This information is held in personal information bank CRCC PPU 005, and the complainant has a right to access this information in accordance with the <em>Privacy Act</em>. </li>
<li>Completed public complaint forms, along with all other relevant documentation the complainant provides to the Commission, will be forwarded to the RCMP for investigation pursuant to subsection 45.53(10) of the <em>RCMP Act</em> and an RCMP investigator may contact the complainant to provide a statement. </li>
</ol>
  </div>'
      ),
    ];
    $form['note_acknowledge'] = [
      '#type' => 'checkbox',
      '#name' => 'note_acknowledge',
      '#title' => $this->t('<strong><span class="field-name">By clicking this box, you are acknowledging that the information provided is complete and accurate to the best of your knowledge.</span>  <strong>(Required)</strong>'),
      '#required' => TRUE,
    ];

    $form['witness_added_note'] = [
      '#type' => 'textfield',
      '#name' => 'witness_added_note',
      '#title' => $this->t('<br>RCMP Member&&#39;s Name and HRMIS # (Required)'),
      '#required' => TRUE,
    ];
    //========================================================
    //HIDDEN FIELDS
    //========================================================
    $form['witness_entered_by'] = [
      '#type' => 'hidden',
      '#name' => 'witness_entered_by',
      '#value' => 'ccmEnvoy',
    ];
    $form['witness_entered_date'] = [
      '#type' => 'hidden',
      '#name' => 'witness_entered_date',
      '#value' => '17-May-2014',
    ];
    $form['witness_entered_userid'] = [
      '#type' => 'hidden',
      '#name' => 'witness_entered_userid',
      '#value' => 'ccmEnvoy',
    ];
    $form['witness_entered_type'] = [
      '#type' => 'hidden',
      '#name' => 'witness_entered_type',
      '#value' => 'WITNESS-TÉMOIN',
    ];
    $form['officer_entered_by'] = [
      '#type' => 'hidden',
      '#name' => 'officer_entered_by',
      '#value' => 'ccmEnvoy',
    ];
    $form['officer_entered_date'] = [
      '#type' => 'hidden',
      '#name' => 'officer_entered_date',
      '#value' => '17-May-2014',
    ];
    $form['officer_entered_userid'] = [
      '#type' => 'hidden',
      '#name' => 'officer_entered_userid',
      '#value' => 'ccmEnvoy',
    ];
    $form['officer_entered_type'] = [
      '#type' => 'hidden',
      '#name' => 'officer_entered_type',
      '#value' => 'RCMP-GRC',
    ];
    $form['witness_added_type'] = [
      '#type' => 'hidden',
      '#name' => 'witness_added_type',
      '#value' => 'GENERAL-GÉNÉRAL',
    ];
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
      '#value' => 'RCMP-GRC',
    ];
    $form['form_assign_to'] = [
      '#type' => 'hidden',
      '#name' => 'form_assign_to',
      '#value' => 'NIO-BNRP IO-ARP',
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
    $form['form_summary'] = [
      '#type' => 'hidden',
      '#name' => 'form_summary',
      '#value' => 'Online complaint form for RCMP use only.',
    ];
    $form['advocate_entered_type'] = [
      '#type' => 'hidden',
      '#name' => 'advocate_entered_type',
      '#value' => 'ADVOCATE-DÉFENSEUR',
    ];
    $form['wdtEnvoy_RouteId'] = [
      '#type' => 'hidden',
      '#name' => 'wdtEnvoy_RouteId',
      '#value' => 'officer',
    ];

    //========================================================
    $form['complaint_closingfieldsetDiv'] = [
      '#type' => 'markup',
      '#markup' => t('
          </div>
        </div>
      </fieldset>'
      ),
    ];
    //========================================================
    //user submitting the form options
    //user submit button
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit complaint'),
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
   */
  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    $emptyString = '';
    $count = 0;

    //user fields validation
    if (strlen($form_state->getValue('complainant_name_family')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_name_family', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_name_given')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_name_given', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_address_mailing_street_nbr')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_street_nbr', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_address_mailing_city')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_city', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_address_mailing_province')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_province', $this->t('Error ' . $count . ': This field is required.'));
    }
    //postal code

    if (strlen($form_state->getValue('complainant_address_mailing_postalcode')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_postalcode', $this->t('Error ' . $count . ': This field is required.'));
    } else {

      $postalCode = $form_state->getValue('complainant_address_mailing_postalcode');


      //regex expression for validation of the postal code
      $country_regex = array(
        'uk' => '/\\A\\b[A-Z]{1,2}[0-9][A-Z0-9]? [0-9][ABD-HJLNP-UW-Z]{2}\\b\\z/i',
        'ca' => '/\\A\\b[ABCEGHJKLMNPRSTVXY][0-9][A-Z][ ]?[0-9][A-Z][0-9]\\b\\z/i',
        'it' => '/^[0-9]{5}$/i',
        'de' => '/^[0-9]{5}$/i',
        'be' => '/^[1-9]{1}[0-9]{3}$/i',
        'us' => '/\\A\\b[0-9]{5}(?:-[0-9]{4})?\\b\\z/i',
        'default' => '/\\A\\b[0-9]{5}(?:-[0-9]{4})?\\b\\z/i' // Same as US.
      );

      if (!(preg_match($country_regex['ca'], $postalCode))) {
        ++$count;
        $form_state->setErrorByName('complainant_address_mailing_postalcode', $this->t('Error ' . $count . ': Value needs to be entered as follow A1A 1A1'));
      }


    }

    if (strlen($form_state->getValue('complainant_address_mailing_country')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_country', $this->t('Error ' . $count . ': This field is required.'));
    }

    //phone number
    if (strlen($form_state->getValue('complainant_phone_home')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_phone_home', $this->t('Error ' . $count . ': This field is required.'));
    } else {
      $phone = $form_state->getValue('complainant_phone_home');
      if (!(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone))) {
        ++$count;
        $form_state->setErrorByName('complainant_phone_home', $this->t('Error ' . $count . ': Value needs to be entered as follow 999-999-9999'));
      }
    }

    //question form validation
    if (strlen($form_state->getValue('complainant_language')) < 1) {
      ++$count;
      $form_state->setErrorByName('complainant_language', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_tool')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_tool', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_for_messages_questions_involved')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_involved', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_for_messages_questions_form')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_form', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_for_messages_questions_informal')) < 1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_informal', $this->t('Error ' . $count . ': This field is required.'));
    }

    //detail of complain validation

    if (strlen($form_state->getValue('incident_date')) < 1) {
      ++$count;
      $form_state->setErrorByName('incident_date', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('incident_time')) < 1) {
      ++$count;
      $form_state->setErrorByName('incident_time', $this->t('Error ' . $count . ': This field is required.'));
    }
    if (strlen($form_state->getValue('incident_province')) < 1) {
      ++$count;
      $form_state->setErrorByName('incident_province', $this->t('Error ' . $count . ': This field is required.'));
    }

    if (strlen($form_state->getValue('circumstances')) < 1) {
      ++$count;
      $form_state->setErrorByName('circumstances', $this->t('Error ' . $count . ': This field is required.'));
    }

    //more work to be done
    if (strcmp($form_state->getValue('note_acknowledge'), "1")) {
      ++$count;
      $form_state->setErrorByName('note_acknowledge', $this->t('Error ' . $count . ': This field is required.'));
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
    $fields['LNAME'] = $field["complainant_name_family"];
    $fields['FNAME'] = $field["complainant_name_given"];
    $fields['CONTACT_DOB'] = $field["complainant_date_birth"];
    $fields["ADDR"] = $field['complainant_address_mailing_street_nbr'];
    $fields["CITY"] = $field['complainant_address_mailing_city'];
    $fields["PROV"] = $field['complainant_address_mailing_province'];
    $fields["P_CODE"] = $field['complainant_address_mailing_postalcode'];
    $fields["COUNTRY"] = $field['complainant_address_mailing_country'];
    $fields["TEL1"] = $field['complainant_phone_home'];
    $fields["EMAIL"] = $field['complainant_email'];
    $fields["PREF_LANG"] = $field['complainant_language'];
    $fields["CONTACT_METHOD"] = $field['contact_tool'];
    $fields["COMPLAINANT_INCIDENT_INVOLVEMENT"] = $field['contact_for_messages_questions_involved'];
    $fields["COMPLAINANT_RCMP_FORM"] = $field['contact_for_messages_questions_form'];
    $fields["COMPLAINANT_RCMP_RESOLUTION"] = $field['contact_for_messages_questions_informal'];
    //========================================================
//CCM_COMMENT TABLE
//========================================================
    $fields["TEXTDATA"] = $field['witness_added_note'];
    $fields["general"] = $field['witness_added_note'];
    $fields["TEXTDATA"] = $field['circumstances'];
    $fields["TEXTDATA"] = $field['contact_for_messages_organization'];
    $fields["advocate"] = $field['contact_for_messages_organization'];
    $fields["TEXTDATA"] = $field['officer_entered_note'];
    $fields["officer"] = $field['officer_entered_note'];
    $fields["TEXTDATA"] = $field['witness_entered_note'];
    $fields["witness"] = $field['witness_entered_note'];
    //========================================================
//CCM_MASTER TABLE
//========================================================
    $fields["INCIDENT_DATE"] = $field['incident_date'];
    $fields["INCIDENT_TIME"] = $field['incident_time'];
    $fields["CASE_PROV"] = $field['incident_province'];
    $fields["CASE_CITY"] = $field['incident_location'];

    //default fields
    $fields["ADDBY"] = "================================";
    $fields["CALLER_TYPE"] = "UNKNOWN-INCONNU";
    $fields["INTAKE_METHOD"] = "ONLINE-EN LIGNE";
    $fields["CASE_STATUS"] = "PENDING-EN ATTENTE";
    $fields["CASE_TYPE"] = "INT-RÉC";
    $fields["RECORD_OWNER"] = "INTAKE";
    $fields["CASE_TAKER"] = "CRCC-CCETP";
    $fields["CASE_DETAILS"] = "Online Complaint Form";
    $fields["RCMP_FILENUM"] = "";
    $fields["CASE_PROV"] = $field['incident_province'];
    $fields["CASE_CITY"] = $field['incident_location'];


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
        header('Location:/en/fill-your-form?result=' . $result);
        curl_close($ch);
      }
    }

  }


}
