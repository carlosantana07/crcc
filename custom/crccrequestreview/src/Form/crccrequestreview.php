<?php

namespace Drupal\crccrequestreview\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class crccrequestreview extends FormBase
{
  /**
   * return the form id
   */
  public function getFormId()
  {
    return 'review-form';
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


    $Title_infotrans = '
      <div class="row">
      <div class="col-md-5 pull-right">
         <div class="well mrgn-bttm-md">
           <p><span class="glyphicon glyphicon-question-sign text-primary"></span> Do you have questions? More information can be found in the <a href="/en/review-process-frequently-asked-questions">Review Process Frequently Asked Questions (FAQ)</a>. </p>
    <p><a href="/pdf/Review-examen_Form-inuk.pdf">cᑐᑦᓯᕋᐅᑦ ᕿᒥᕐᕈᔭᐅᑎᑦᓯᓂᕐᒧᑦ ᑕᑕᑎᒐᖅ</a> <br>Request for Review Form [PDF] </p>
    <p><a href="/en/qimirrujaunirmut-atuagait-apiqkutiugajuttut">ᕿᒥᕐᕈᔭᐅᓂᕐᒧᑦ ᐊᑐᐊᒐᐃᑦ: ᐊᐱᖅᑯᑎᐅᒐᔪᑦᑐᑦ</a> <br>Review Process FAQ</p>
         </div>
      </div>
      <div class="mrgn-lft-md mrgn-rght-md">
    <!--<div class="alert alert-warning">
    <h2>Service Interruption </h2>
       <p>The Request for Review Form will be unavailable on Tuesday, May 14, from 6 p.m. to 8 p.m. (ET) due to system maintenance.</p>
    </div>-->
        <p>If you have made a complaint concerning the conduct of an  RCMP member and are not satisfied with the way the RCMP handled your complaint,  you can request a review.</p>

    <p>To request a review, you must have already received the report or decision letter from the RCMP (often called a "<strong>Letter of Disposition</strong>" or a "<strong>Notice of Direction</strong>").</p>
    <p>If you would like to request a review, please complete  the following form. </p>



      </div>
    </div>

    <p class="well text-info"><strong>Please note:</strong> The Commission will only review the original public complaint made by the complainant or their representative. If you would like to submit a new complaint, please complete the <a href="/en/make-complaint-form">Complaint Form</a>.</p>

    <div class="wb-frmvld wb-fdbck nojs-hide wb-init wb-frmvld-inited" id="wb-auto-1">

  <section class="panel panel-info hght-inhrt">

  <div class="panel-heading"><h2 class="panel-title large">Personal Details</h2></div>


  <div class="panel-body">
<div class="row">
<div class="col-md-5">
    ';

$complainant_name_giventrans = 'Given Name (Required)';
$complainant_name_familytrans = 'Family Name (Required)';
$complainant_address_mailing_street_nbrtrans = 'Street Address (Required)';
$complainant_address_mailing_citytrans = 'City (Required)';
$complainant_address_mailing_provincetrans = 'Province (Canada) (Required)';
$complainant_address_mailing_postalcodetrans = 'Postal Code / ZIP Code (Required)';
$complainant_address_mailing_countrytrans = 'Country (Required)';
$complainant_phone_hometrans = 'Telephone number where you can be reached (999-999-9999) (Required)';
$complainant_emailtrans = 'E-mail Address (yourname@domain.com)';
$file_detailstrans = '<section class="panel panel-info hght-inhrt">

      <div class="panel-heading"><h2 class="panel-title large">File Details</h2></div>
      <div class="panel-body">
      <div class="row">
      <div class="col-md-5">';
$rcmp_file_numbertrans = 'RCMP File Number (If known)';
$commission_file_numbertrans = 'Commission File Number (If known)';
$file_closingDivtrans = '
      </div>
      <div class="col-md-4">
      <p class="well small text-info mrgn-tp-md"><strong>Please Note:</strong> The RCMP and CRCC file numbers are located in the top right-hand corner of the RCMP &#39; s report.</p>
 </div>
 </div><div class="clearfix"></div>
 <div class="row">
 <div class="col-md-8">
 <p><strong>The CRCC &#39; s review will only examine the   findings you list in the box below.  Please include the following (Required):</strong></p>
 <ol class="lst-spcd">
    <li>In the RCMP &#39; s report, you will  find one or more allegations based on your public complaint as well as the RCMP &#39;s  findings. List the RCMP finding(s) you are not satisfied with and explain why you are not satisfied for each one. Please try to be as specific as possible.  <p></p>
	  </li>

   <li>Describe  your desired outcome from the review process.  	  </li>
    <li>Do you have additional evidence? If  you answered yes, describe the evidence you would like the Commission to  review.   </li>


	  </ol>';

$file_texttrans = '* Allowable limit: 7000 characters';
$file_last_Definitiontrans = '</div>
      <div class="col-md-4 pull-right well well-sm  text-info">
<p><strong>Did you know?</strong></p>
<ul class="lst-spcd small">
<li>The role of the CRCC is limited to remedial measures aimed at improving the quality of policing. </li>
<li>The CRCC does <strong>NOT</strong> make recommendations related to:
		<ul>
			<li> Payment  of money as an award for RCMP misconduct</li>
    <li>Charging  a person with criminal or regulatory offences</li>
    <li>Withdrawing, pardoning, or otherwise interfering with outstanding  criminal or regulatory charges or convictions</li>
    <li>Terminating, demoting or imposing specific discipline for RCMP members</li>
  </ul>
</li>

<li>Any information you previously  provided to the RCMP will be provided to us. We also have access to the  complete RCMP file pertaining to your case. This includes any materials in the  possession or control of the RCMP that are relevant to reviewing your matter.  You do not need to resend any of this material.<p></p>
<p> You have 30 days from the date  of your request for review to provide us with any supporting information. We will  only accept a maximum of 50 pages of written material, and  60 minutes of audio  or video material.</p>
<p> If you need to send additional materials or are unable to  send materials within the 30-day period, please <a href="/en/review-process-frequently-asked-questions#contactus">contact us</a> with details. </p>
</li>
</ul></div>
</div>';
$buttontrans = 'Submit request';




    if(strcmp( $_SERVER['REQUEST_URI'],"/fr/request-review-form")==0) {

      $Title_infotrans = '
      <h1 id="wb-cont">Formulaire de demande d&#39;examen</h1>
     <div class="row">
  <div class="col-md-5 pull-right">
     <div class="well mrgn-bttm-md">
		 <p><span class="glyphicon glyphicon-question-sign text-primary"></span> Vous avez des questions? La page qui s&#39;intitule <a href="/fr/processus-dexamen-foire-aux-questions">Processus d&#39;examen&nbsp;: Foire aux questions</a> renferme de plus amples renseignements.   </p>
<p><a href="/pdf/Review-examen_Form-inuk.pdf">cᑐᑦᓯᕋᐅᑦ ᕿᒥᕐᕈᔭᐅᑎᑦᓯᓂᕐᒧᑦ ᑕᑕᑎᒐᖅ</a><br>Formulaire de demande d&#39;examen [PDF] </p>
<p><a href="/fr/qimirrujaunirmut-atuagait-apiqkutiugajuttut">ᕿᒥᕐᕈᔭᐅᓂᕐᒧᑦ ᐊᑐᐊᒐᐃᑦ: ᐊᐱᖅᑯᑎᐅᒐᔪᑦᑐᑦ</a><br>Processus d&#39;examen : Foire aux questions</p>
     </div>
  </div>
  <div class="mrgn-lft-md mrgn-rght-md">
<!--<div class="alert alert-warning">
<h2>Interruption de service </h2>
   <p>Le formulaire de demande d&#39;examen ne sera pas accessible le mardi 14 mai, de 18 h à 20 h (HE) en raison de l&#39;entretien du système.</p>
</div>-->
	  <p>Si vous avez déposé une plainte au sujet de la conduite d&#39;un membre de la GRC et que vous d&#39;êtes pas satisfait(e) de la décision de la GRC concernant votre plainte, vous pouvez présenter une demande d&#39;examen.</p>

<p>Pour demander un examen, vous devez avoir déjà reçu le rapport ou la lettre de décision de la GRC (souvent appelé «&nbsp;<strong>lettre de règlement</strong>&nbsp;» ou «<strong>&nbsp;avis de la décision</strong>&nbsp;»).</p>
<p>Pour présenter une demande d&#39;examen, veuillez remplir le formulaire suivant.</p>



  </div>
</div>

    <p class="well text-info"><strong>Remarque :</strong> La  Commission n&#39;examinera que la plainte   originale déposée par le plaignant ou son  représentant. Si vous   souhaitez déposer une nouvelle plainte, veuillez remplir  un <a href="/fr/formulaire-de-plainte-en-ligne">formulaire de plainte</a>.</p>
    <div class="wb-frmvld wb-fdbck nojs-hide wb-init wb-frmvld-inited" id="wb-auto-1">

  <section class="panel panel-info hght-inhrt">

  <div class="panel-heading"><h2 class="panel-title large">Renseignements personnels</h2></div>


  <div class="panel-body">
<div class="row">
<div class="col-md-5">
    ';

$complainant_name_giventrans = 'Prénom (obligatoire)';
$complainant_name_familytrans = 'Nom (obligatoire)';
$complainant_address_mailing_street_nbrtrans = 'Adresse municipale (obligatoire)';
$complainant_address_mailing_citytrans = 'Ville (obligatoire)';
$complainant_address_mailing_provincetrans = 'Province (Canada) (obligatoire))';
$complainant_address_mailing_postalcodetrans = 'Code postal / ZIP (obligatoire)';
$complainant_address_mailing_countrytrans = 'Pays (obligatoire)';
$complainant_phone_hometrans = 'Numéro de téléphone où l&#39;on peut vous joindre (obligatoire)';
$complainant_emailtrans = 'Adresse de courriel';
$file_detailstrans = '<section class="panel panel-info hght-inhrt">

      <div class="panel-heading"><h2 class="panel-title large">Détails du dossier</h2></div>
      <div class="panel-body">
      <div class="row">
      <div class="col-md-5">';
$rcmp_file_numbertrans = 'Numéro de dossier de la GRC (si vous le connaissez)';
$commission_file_numbertrans = 'Numéro de dossier de la Commission (si vous le connaissez)';
$file_closingDivtrans = '
      </div>
      <div class="col-md-4">
      <p class="well small text-info"><strong>Remarque&nbsp;:</strong>  Les numéros de dossier de la GRC et de la CCETP se trouvent dans le coin supérieur droit du rapport de la GRC.</p>
      </div>
 </div><div class="clearfix"></div>
 <div class="row">
 <div class="col-md-8">
 <p><strong>La Commission n&#39;examinera que les conclusions que vous énoncerez dans l&#39;encadré ci-dessous. Vous devez inclure les renseignements suivants (obligatoire)&nbsp;: </strong></p>
 <ol class="lst-spcd">
    <li>Le rapport de la GRC comprend une ou plusieurs allégations formulées d&#39;après votre plainte du public, ainsi que les conclusions de la GRC pour ces allégations. Veuillez énumérer les conclusions dont vous n&#39;êtes pas satisfait(e). Soyez le plus précis possible.    </li>

		  <li>Décrivez les résultats auxquels vous vous attendez du processus d&#39;examen.</li>


		  <li>Avez-vous de nouvelles preuves? Si vous avez répondu oui, veuillez décrire les preuves que vous aimeriez que la Commission examine </li>

	  </ol>';

$file_texttrans = '* Nombre maximum de caractères autorisés : 7 000';
$file_last_Definitiontrans = '</div>
      <div class="col-md-4 pull-right well well-sm  text-info">
<p><strong>Le saviez-vous?</strong></p>
<ul class="lst-spcd small">
	 <li>Le rôle de la Commission se limite à proposer des mesures correctives pour améliorer la qualité des services de police.</li><li> La CCETP ne fait <strong>AUCUNE</strong> des recommandations suivantes&nbsp;:
		<ul>
			<li>Paiement d&#39;une somme d&#39;argent à titre de récompense pour inconduite de la GRC</li>
    <li>Inculpation pénale ou réglementaire d&#39;une personne</li>
    <li>Retrait, pardon ou interférence de toute autre manière avec des accusations ou des condamnations pénales ou réglementaires en cours</li>
    <li>Renvoi ou rétrogradation des membres de la GRC, ou imposition de mesures disciplinaires spécifiques</li>

	   </ul>
	  </li>
	  <li><p>Toute information que vous avez déjà fournie à la GRC nous sera communiquée. Nous avons également accès au dossier complet de la GRC concernant votre cas. Cela inclut tout matériel en possession ou sous le contrôle de la GRC qui est pertinent pour l&#39;examen de votre dossier.</p> <p>Vous n&#39;avez pas besoin de renvoyer ces documents. Vous avez 30 jours à compter de la date de votre demande d&#39;examen pour nous fournir toute information additionnelle. Nous n&#39;accepterons qu&#39;un maximum de 50 pages de documents écrits et un maximum de 60 minutes de documents audio ou vidéo.</p><p> Si vous devez envoyer des documents supplémentaires ou que vous ne pouvez pas respecter l&#39;échéance de 30 jours pour ce faire, veuillez <a href="/fr/processus-dexamen-foire-aux-questions#commNous">nous contacter</a> et nous fournir plus de détails. </p>
	  </li>
	   </ul></div>
</div>';

$buttontrans = 'Soumettre la demande';
    }

    //========================================================
    $form['Title_info'] = [
      '#type' => 'markup',
      '#markup' => t($Title_infotrans),
    ];
    //========================================================

    //========================================================
    //user personnal information

    //user firstname
    $form['complainant_name_given'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_name_given',
      '#title' => $this->t($complainant_name_giventrans),
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
    $form['complainant_name_family'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_name_family',
      '#title' => $this->t($complainant_name_familytrans),
      '#required' => TRUE,
    ];

    $form['Title_family_name'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div></div>
      <div class="clearfix"></div>
      <div class="row">
      <div class="col-md-5">
    '),
    ];
    //user mailling address
    $form['complainant_address_mailing_street_nbr'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_street_nbr',
      '#title' => $this->t($complainant_address_mailing_street_nbrtrans),
      '#required' => TRUE,
    ];
    $form['Title_street_nbr'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div>
      <div class="col-md-5" <div="">
    '),
    ];

    //user city of residence
    $form['complainant_address_mailing_city'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_city',
      '#title' => $this->t($complainant_address_mailing_citytrans),
      '#required' => TRUE,
    ];

    $form['Title_city'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div></div>
      <div class="clearfix"></div>
      <div class="row">
      <div class="col-md-5" <div="">
    '),
    ];
    //user province of residence
    $form['complainant_address_mailing_province'] = [
      '#type' => 'select',
      '#name' => 'complainant_address_mailing_province',
      '#title' => $this->t($complainant_address_mailing_provincetrans),
      '#options' => $provinces,
      '#required' => TRUE,
    ];
    $form['Title_province'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div>
      <div class="col-md-5" <div="">
    '),
    ];
    //user postal code
    $form['complainant_address_mailing_postalcode'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_postalcode',
      '#title' => $this->t($complainant_address_mailing_postalcodetrans),
      '#required' => TRUE,
    ];
    $form['Title_postalcode'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div> </div>
      <div class="clearfix"></div>
    '),
    ];
    //user country of residence
    $form['complainant_address_mailing_country'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_address_mailing_country',
      '#title' => $this->t($complainant_address_mailing_countrytrans),
      '#required' => TRUE,
    ];
    $form['Title_country'] = [
      '#type' => 'markup',
      '#markup' => t('
      <div class="row">
      <div class="col-md-5" <div="">
    '),
    ];
    //user telephone
    $form['complainant_phone_home'] = [
      '#type' => 'tel',
      '#name' => 'complainant_phone_home',
      '#title' => $this->t($complainant_phone_hometrans),
      '#required' => TRUE,
    ];
    $form['Title_phone_home'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div>
      <div class="col-md-5" <div="">
    '),
    ];
    //user email address
    $form['complainant_email'] = [
      '#type' => 'textfield',
      '#name' => 'complainant_email',
      '#title' => $this->t($complainant_emailtrans),
    ];
    $form['Title_email'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div></div>
      <div class="clearfix"></div>
      </div>
      </section>
    '),
    ];


    //========================================================
    //FILES
    //user date of birth label
    $form['file_details'] = [
      '#type' => 'markup',
      '#markup' => t($file_detailstrans),
    ];
    $form['rcmp_file_number'] = [
      '#type' => 'textfield',
      '#name' => 'rcmp_file_number',
      '#title' => $this->t($rcmp_file_numbertrans),
    ];
    $form['Title_file_number'] = [
      '#type' => 'markup',
      '#markup' => t('
      </div> <div class="col-md-5">
    '),
    ];
    $form['commission_file_number'] = [
      '#type' => 'textfield',
      '#name' => 'commission_file_number',
      '#title' => $this->t($commission_file_numbertrans),
      //'#required' => TRUE,
    ];

    $form['file_closingDiv'] = [
      '#type' => 'markup',
      '#markup' => t($file_closingDivtrans),
    ];


    $form['file_text'] = [
      '#type' => 'textarea',
      '#name' => 'file_text',
      '#title' => $this->t($file_texttrans),
      '#required' => TRUE,
    ];

    $form['file_last_Definition'] = [
      '#type' => 'markup',
      '#markup' => t($file_last_Definitiontrans),
    ];

    //========================================================
    //HIDDEN FIELDS
    //========================================================
    $form['review_entered_by'] = [
      '#type' => 'hidden',
      '#name' => 'review_entered_by',
      '#value' => 'ccmEnvoy',
    ];
    $form['review_entered_date'] = [
      '#type' => 'hidden',
      '#name' => 'review_entered_date',
      '#value' => '17-May-2014',
    ];
    $form['review_entered_userid'] = [
      '#type' => 'hidden',
      '#name' => 'review_entered_userid',
      '#value' => 'ccmEnvoy',
    ];
    $form['review_entered_type'] = [
      '#type' => 'hidden',
      '#name' => 'review_entered_type',
      '#value' => 'REVIEW NOTE-NOTE EXAMEN',
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
      '#value' => 'CRCC-CCETP',
    ];
    $form['form_assign_to'] = [
      '#type' => 'hidden',
      '#name' => 'form_assign_to',
      '#value' => 'RI-EE PO-AP',
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
      '#value' => 'Online Request for Review form.',
    ];
    $form['wdtEnvoy_RouteId'] = [
      '#type' => 'hidden',
      '#name' => 'wdtEnvoy_RouteId',
      '#value' => 'review',
    ];
    //========================================================
    $form['complaint_closingfieldsetDiv'] = [
      '#type' => 'markup',
      '#markup' => t('

</div>
</section> '
      ),
    ];
    //========================================================
    //user submitting the form options
    //user submit button
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t($buttontrans),
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

    if (strlen($form_state->getValue('file_text')) < 1) {
      ++$count;
      $form_state->setErrorByName('file_text', $this->t('Error ' . $count . ': This field is required.'));
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
    $fields["ADDR"] = $field['complainant_address_mailing_street_nbr'];
    $fields["CITY"] = $field['complainant_address_mailing_city'];
    $fields["PROV"] = $field['complainant_address_mailing_province'];
    $fields["P_CODE"] = $field['complainant_address_mailing_postalcode'];
    $fields["COUNTRY"] = $field['complainant_address_mailing_country'];
    $fields["TEL1"] = $field['complainant_phone_home'];
    $fields["EMAIL"] = $field['complainant_email'];
//========================================================
//CCM_MASTER TABLE | HIDDEN FIELDS
//========================================================
    $fields["ADDBY"] = "svc_envoy";
    $fields["CALLER_TYPE"] = "UNKNOWN-INCONNU";
    $fields["INTAKE_METHOD"] = "ONLINE-EN LIGNE";
    $fields["CASE_STATUS"] = "PENDING-EN ATTENTE";
    $fields["CASE_TYPE"] = "INT-RÉC";
    $fields["RECORD_OWNER"] = "Reviews";
    $fields["CASE_TAKER"] = "CRCC-CCETP";
    $fields["CASE_DETAILS"] = $field['file_text'];
    $fields["CASE_XREF"] = "";
    $fields["COMPLAINANT_INCIDENT_INVOLVEMENT"] = "UNK-INC";
    $fields["ENTEREDBY"] = "ccmEnvoy";
    $fields["USERID"] = "svc_envoy";
    $fields["RCMP_FILENUM"] = $field['rcmp_file_number'];
    $fields["TEXTDATA"] = $field['file_text'];
    $fields["NOTE_TYPE"] = "REVIEW NOTE-NOTE EXAMEN";
    $fields["ASGNTO"] = "RI-EE Review Officers";
    $fields["TASK"] = "Review new correspondence / Réception - Examiner les nouvelles pièces de correspondance";
    $fields["ASGNBY"] = "svc_envoy";
    $fields["RMODBY"] = "svc_envoy";


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
        header('Location:/en/crccreviewthankyou?result=' . $result);
        curl_close($ch);
      }
    }

  }


}
