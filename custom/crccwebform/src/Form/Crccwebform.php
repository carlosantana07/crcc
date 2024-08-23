<?php

namespace Drupal\crccwebform\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class Crccwebform extends FormBase{
/**
* return the form id
*/
public function getFormId()
{
  return 'complaint-form';
}
/**
* building the form
*/
public function buildForm(array $form, FormStateInterface $form_state)
{

    //VARIABLES


//signed agreement options
$timeIncident= [
  '00:00 '=> t('00:00 '),
  '00:15 '=> t('00:15 '),
  '00:30 '=> t('00:30 '),
  '00:45 '=> t('00:45 '),
  '01:00 '=> t('01:00 '),
  '01:15 '=> t('01:15 '),
  '01:30 '=> t('01:30 '),
  '01:45 '=> t('01:45 '),
  '02:00 '=> t('02:00 '),
  '02:15 '=> t('02:15 '),
  '02:30 '=> t('02:30 '),
  '02:45 '=> t('02:45 '),
  '03:00 '=> t('03:00 '),
  '03:15 '=> t('03:15 '),
  '03:30 '=> t('03:30 '),
  '03:45 '=> t('03:45 '),
  '04:00 '=> t('04:00 '),
  '04:15 '=> t('04:15 '),
  '04:30 '=> t('04:30 '),
  '04:45 '=> t('04:45 '),
  '05:00 '=> t('05:00 '),
  '05:15 '=> t('05:15 '),
  '05:30 '=> t('05:30 '),
  '05:45 '=> t('05:45 '),
  '06:00 '=> t('06:00 '),
  '06:15 '=> t('06:15 '),
  '06:30 '=> t('06:30 '),
  '06:45 '=> t('06:45 '),
  '07:00 '=> t('07:00 '),
  '07:15 '=> t('07:15 '),
  '07:30 '=> t('07:30 '),
  '07:45 '=> t('07:45 '),
  '08:00 '=> t('08:00 '),
  '08:15 '=> t('08:15 '),
  '08:30 '=> t('08:30 '),
  '08:45 '=> t('08:45 '),
  '09:00 '=> t('09:00 '),
  '09:15 '=> t('09:15 '),
  '09:30 '=> t('09:30 '),
  '09:45 '=> t('09:45 '),
  '10:00 '=> t('10:00 '),
  '10:15 '=> t('10:15 '),
  '10:30 '=> t('10:30 '),
  '10:45 '=> t('10:45 '),
  '11:00 '=> t('11:00 '),
  '11:15 '=> t('11:15 '),
  '11:30 '=> t('11:30 '),
  '11:45 '=> t('11:45 '),
  '12:00 '=> t('12:00 '),
  '12:15 '=> t('12:15 '),
  '12:30 '=> t('12:30 '),
  '12:45 '=> t('12:45 '),
  '13:00 '=> t('13:00 '),
  '13:15 '=> t('13:15 '),
  '13:30 '=> t('13:30 '),
  '13:45 '=> t('13:45 '),
  '14:00 '=> t('14:00 '),
  '14:15 '=> t('14:15 '),
  '14:30 '=> t('14:30 '),
  '14:45 '=> t('14:45 '),
  '15:00 '=> t('15:00 '),
  '15:15 '=> t('15:15 '),
  '15:30 '=> t('15:30 '),
  '15:45 '=> t('15:45 '),
  '16:00 '=> t('16:00 '),
  '16:15 '=> t('16:15 '),
  '16:30 '=> t('16:30 '),
  '16:45 '=> t('16:45 '),
  '17:00 '=> t('17:00 '),
  '17:15 '=> t('17:15 '),
  '17:30 '=> t('17:30 '),
  '17:45 '=> t('17:45 '),
  '18:00 '=> t('18:00 '),
  '18:15 '=> t('18:15 '),
  '18:30 '=> t('18:30 '),
  '18:45 '=> t('18:45 '),
  '19:00 '=> t('19:00 '),
  '19:15 '=> t('19:15 '),
  '19:30 '=> t('19:30 '),
  '19:45 '=> t('19:45 '),
  '20:00 '=> t('20:00 '),
  '20:15 '=> t('20:15 '),
  '20:30 '=> t('20:30 '),
  '20:45 '=> t('20:45 '),
  '21:00 '=> t('21:00 '),
  '21:15 '=> t('21:15 '),
  '21:30 '=> t('21:30 '),
  '21:45 '=> t('21:45 '),
  '22:00 '=> t('22:00 '),
  '22:15 '=> t('22:15 '),
  '22:30 '=> t('22:30 '),
  '22:45 '=> t('22:45 '),
  '23:00 '=> t('23:00 '),
  '23:15 '=> t('23:15 '),
  '23:30 '=> t('23:30 '),
  '23:45 '=> t('23:45 ')
];

  //========================================================
  //translation



  $Title_info= ' <div class="row">
<div class="col-md-8">
<!--<div class="alert alert-warning">
<h2>Service Interruption </h2>
   <p>The Complaint Form will be unavailable on Tuesday, May 14, from 6 p.m. to 8 p.m. (ET) due to system maintenance.</p>
</div>-->
<div class="alert alert-info">

<p>The Complaint Form along with all other relevant documentation will be shared with the <abbr title="Royal Canadian Mounted Police">RCMP</abbr> for investigation pursuant to <a href="https://laws-lois.justice.gc.ca/eng/acts/r-10/page-9.html#422053">subsection 45.53(10)  of the <abbr title="Royal Canadian Mounted Police">RCMP</abbr> Act.</a> Accordingly, a RCMP complaint investigator may contact you to provide a statement.</p>
<p class="mrgn-lft-md"> The CRCC has the discretion to refuse certain complaints. To learn more, click <a href="/en/discretion-refuse-deal-complaint-policy">here</a>.</p>
</div>
  <!-- <h2 class="mrgn-tp-0">Complaint  Checklist</h2>


  <p><strong>Does  your complaint concern:</strong> </p>
 <ul class="fa-ul">
        <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> the on-duty conduct of an  RCMP officer? <p class="mrgn-bttm-0"><strong>and</strong> </p></li>
   <li><span class="fa fa-li fa-check text-success"></span> an incident that occurred within the last 12 months? </li>
 </ul>
 <p><strong>Are  you:</strong></p>
  <ul class="fa-ul">
        <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> directly involved in the  incident? <p class="mrgn-bttm-0"><strong>or</strong></p></li>
   <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> a witness? <p class="mrgn-bttm-0"><strong>or</strong></p></li>
   <li><span class="fa fa-li fa-check text-success"></span> authorized to act on behalf  of someone who was? </li>
</ul>
-->

 </div>
<section class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading"><span class="glyphicon glyphicon-flag"></span> <strong>RCMP Members</strong></div>
      <ul class="list-unstyled mrgn-tp-md">
<li class="mrgn-lft-md megn-tp-md">If you are an RCMP member assisting a member of the public with the filing of their public complaint, please click <a href="/en/make-complaint-rcmp-use-only"><strong>here</strong></a>.</li>



</ul>
    </div>

  </section>
</div>';




$languageEnglish = 'English';
$languageFrench = 'French';
$selectboxtranslate = 'Please Select';
$selectboxtranslateAccident = 'Please Select';
$selectboxtranslatefiledComplaint = 'Please Select';
$selectboxtranslatesignedAgreement = 'Please Select';
$selectboxtranslatepreferredLanguage= 'Please Select';
$selectboxtranslatepreferredCommunication = 'Please Select';
$email = 'E-mail';
$phone = 'Phone';
$mail = 'Mail';

$famillyname= 'Family Name (Required)';
$givenname= 'Given Name (Required)';
$dateofbirth = 'Date of Birth';
$street = 'Street Address or Post Office Box (Required)';
$city = 'City (Required)';
$proving = 'Province (Canada) (Required)';
$postalcode = 'Postal Code / ZIP Code (Required)';
$country = 'Country (Required)';
$telephone = 'Telephone number where you can be reached (999-999-9999) (Required)';
$emailadress = 'E-mail Address (yourname@domain.com)';
$accidentyes = 'Yes';
$accidentno = 'No';
$filedComplaintyes = 'Yes';
$filedComplaintno = 'No';
$signedAgreementyes = 'Yes';
$signedAgreementno = 'No';

$complainant_languagetrans = 'Preferred Language of Correspondence (Required)';
$contact_tooltrans = 'Preferred method of communication (Required)';
$contact_for_messages_questions_involvedtrans = 'Were you the person involved in the incident being complained of? (Required)';
$contact_for_messages_questions_filenbrtrans = 'If you were given a file number by the RCMP with respect to the incident, please provide it (if known)';
$contact_for_messages_questions_formtrans = 'Have you previously filed an official public complaint about this incident with the CRCC or the RCMP for which you were provided with a public complaint record/file number? (Required)';
$contact_for_messages_questions_informaltrans = 'If yes, did you sign an agreement with the RCMP to resolve this complaint informally? (Required)';


$authorizationtrans = '<fieldset class="mrgn-tp-lg"><legend>Representative Representative Authorization</legend>';
$authorization_infotrans = '
    <p>Complete the following section
      <strong>ONLY</strong>
    if you want the Civilian Review and Complaints Commission for the RCMP (the Commission) and the RCMP to communicate directly with a legal representative or an
      <span class="hover-text">advocate<span class="tooltip-text" id="right">An individual that you authorize to act/speak on your behalf</span></span>
    instead of yourself.</p>';
$authorization_valuestrans = '
      <ul>
        <li>Family Name</li>
        <li>Given Name</li>
        <li>Telephone Number</li>
        <li>E-mail Address</li>
      </ul>';

$authorization_moreInfotrans = '<p>By providing this information, you are authorizing the Commission and the RCMP to:</p>';
$authorization_optionstrans = '
<ul>
  <li>Communicate directly with a legal representative or an advocate instead of yourself; and,</li>
  <li>Disclose information related to your complaint to your representative.</li>
</ul>';



$complainttrans = '<fieldset class="mrgn-tp-lg"><legend>Details of Complaint <small>(complete as much as possible)</small></legend>';
$complaint_dateIncidenttrans = '
      <div class="well well-sm small">
        <p>Please note that this date is in reference to the date that the alleged RCMP misconduct took place. It is not necessarily in reference to the date that the original incident took place, though the dates may be one in the same.</p>
        <p>*If this date falls outside the one-year time limit for lodging a public complaint, you will be required to provide a justification to explain the delay in lodging your public complaint. </p>
      </div>';

$incident_timetrans='Time of Incident (approx.)';
$incident_provincetrans = 'Province (Canada) (Required)';
$incident_locationtrans = 'Location (city, town)';
$incident_citytrans = 'Describe the circumstances that led to your complaint as completely as possible (Required)';
$incident_describe_infotrans = '
      <p>Please include:</p>
      <ul>
        <li>Where and when did the incident(s) that led to your complaint happen? </li>
        <li>Who was involved</li>
        <li>What conduct by the RCMP member(s) do you feel was improper?</li>
        <li>What was said and done by the RCMP member(s) that you feel was improper</li>
        <li>The names of any individual(s)   who witnessed the incident (including other police officers)</li>
        <li>If there was any damage or injury</li>
        <li>If there were any charges laid and the current status of those charges</li>
        <li>If there was something that you feel caused the incident or affected your interaction with the RCMP</li>
      </ul>
      <p>Fill in as much of the information as you know. If you do not know any specific details, you may wish to include details such as landmarks, etc.</p>';

$circumstancestrans = '* Allowable limit: 3500 characters';
$officer_entered_notetrans = 'Please provide, if possible, the name, rank and detachment of the RCMP member(s) whose behavior you are complaining about. If you do not know the name, please provide a description and the number of members you are complaining about. Please ensure that the details of the specific misconduct of any members you list here are included in the section below.';
$witness_entered_notetrans = 'Please provide the name(s) of any witness(es), if applicable. Witnesses may include RCMP members you are not complaining about.';
$incident_textinfotrans = 'If you have provided the information requested above, your complaint should be complete.';
$complaint_last_Definitiontrans = '
<p> After your  submission is reviewed by an Intake Agent, you will receive correspondence on  the status of your complaint, along with information explaining future steps in  the complaint process.</p>
<p>* please ensure that you check your spam mail to ensure that the Commission&&#39;s email has not been sent there erroneously. </p>
<p>Although not  necessary, should you still feel that you need to speak with an Intake Agent by  phone please indicate below:</p>
<ul>
  <li>the best number to reach you at</li>
  <li>a brief explanation why a call back is being  requested </li>
</ul>
<p>Please note that attempts to contact you by phone may take up to 15 business days. Calls will be placed during regular business hours Monday to Friday (Eastern Daylight Time) and may result in a delay in your complaint being reviewed.</p>';

$complaint_approval_texttrans = '
      <div class="well">
        <p><strong>Privacy &amp; Disclosure of Personal Information</strong></p>
        <p>By submitting a completed complaint form, you are authorizing the Commission to collect your personal information for the purposes related to Parts VI, VII, VII.1 and VII.2 of the RCMP Act. This information is held in personal information bank CRCC PPU 005, and you have a right to access this information in accordance with the <em>Privacy Act</em>.</p>
        <p>Completed public complaint forms, along with all other relevant documentation you provide to the Commission, will be forwarded to the RCMP for investigation pursuant to subsection 45.53(10) of the <em>RCMP Act</em> and an RCMP complaint investigator may contact you to provide a statement.</p>
        <p><strong>Acknowledgement</strong></p>
        <p>I have reviewed this public complaint form and the information I have provided is true and complete to the best of my knowledge.</p>
        <div class="checkbox-inline">';

$note_acknowledgetrans =  'By clicking this box, you are acknowledging that the information provided is complete and accurate to the best of your knowledge. (Required)';
$incident_dateofincidenttrans = 'Date of Incident (Required)';

  $lang = $_SERVER['REQUEST_URI'];





  if(strcmp( $_SERVER['REQUEST_URI'],"/fr/make-complaint-form")==0) {

    $Title_info = '
<div class="row">
<div class="col-md-8">
<!--<div class="alert alert-warning">
<h2>Interruption de service </h2>
   <p>Le formulaire de plainte en ligne ne sera pas accessible le mardi 14 mai, de 18 h à 20 h (HE) en raison de l’entretien du système.</p>
</div>-->
<div class="alert alert-info">
<p>Le Formulaire de plainte et tous les documents pertinents seront acheminés à la GRC pour une enquête en vertu du <a href="https://laws-lois.justice.gc.ca/fra/lois/R-10/page-9.html#412153">paragraphe 45.53(10) de la <em>Loi sur la GRC</em></a>. Par conséquent, un enquêteur de la GRC pourrait vous demander de donner une déclaration. </p>
<p class="mrgn-lft-md">La CCETP a le pouvoir discrétionnaire de refuser d&#39;accepter certaines plaintes. Pour en savoir plus, cliquez <a href="/fr/politique-sur-le-pouvoir-discretionnaire-de-refuser-dexaminer-une-plainte">ici</a>.</p>

</div>
  <!-- <h2 class="mrgn-tp-0">Aide-mémoire pour le dépôt d&#39;une plainte</h2>


  <p><strong>Votre plainte vise-t-elle&nbsp;:</strong> </p>
 <ul class="fa-ul">
        <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> la conduite d&#39;un membre de la GRC en service? <p class="mrgn-bttm-0"><strong>et</strong> </p></li>
   <li><span class="fa fa-li fa-check text-success"></span> un incident s&#39;étant produit au cours des 12 derniers mois? </li>
 </ul>
 <p><strong>Êtes-vous&nbsp;:</strong></p>
  <ul class="fa-ul">
        <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> directement lié(e) à l&#39;incident? <p class="mrgn-bttm-0"><strong>ou</strong></p></li>
   <li class="mrgn-bttm-0"><span class="fa fa-li fa-check text-success"></span> un témoin?<p class="mrgn-bttm-0"><strong>ou</strong></p></li>
   <li><span class="fa fa-li fa-check text-success"></span> autorisé(e) à agir au nom d&#39;une personne qui l&#39;est? </li>
</ul>-->


 </div>
<section class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading"><span class="glyphicon glyphicon-flag"></span> <strong>Membre de la GRC</strong></div>
      <ul class="list-unstyled mrgn-tp-md">
<li class="mrgn-lft-md megn-tp-md">Si vous êtes un membre de la GRC qui aidez un membre du public à formuler une plainte, veuillez cliquer  <a href="/fr/depot-dune-plainte-reserve-lusage-de-la-grc"><strong>ici</strong></a>.</li>



</ul>
    </div>

  </section>
</div>';


    $languageEnglish = 'Anglais';
  $languageFrench = 'Français';
  $email = 'Courriel';
  $phone = 'Téléphone';
  $mail = 'Courrier';
  $selectboxtranslateAccident= 'Veuillez choisir';
  $selectboxtranslatefiledComplaint= 'Veuillez choisir';
  $selectboxtranslatesignedAgreement= 'Veuillez choisir';
  $selectboxtranslate = 'Veuillez choisir';
  $selectboxtranslatepreferredLanguage= 'Veuillez choisir';
  $selectboxtranslatepreferredCommunication = 'Veuillez choisir';


  $famillyname= 'Nom de famille (obligatoire)';
  $givenname= 'Prénom (obligatoire)';
  $dateofbirth = 'Date de naissance';
  $street = 'Adresse municipale ou casier postal (obligatoire)';
  $city = 'Ville (obligatoire)';
  $proving = 'Province (Canada) (obligatoire)';
  $postalcode = 'Code postal / ZIP (obligatoire)';
  $country = 'Pays (obligatoire)';
  $telephone = 'Numéro de téléphone où l&#39;on peut vous joindre (999-999-9999) (obligatoire)';
  $emailadress = 'Adresse de courriel (votrenom@domaine.com)';
  $accidentyes = 'Oui';
  $accidentno = 'Non';
  $filedComplaintyes = 'Oui';
  $filedComplaintno = 'Non';
  $signedAgreementyes = 'Oui';
  $signedAgreementno = 'Non';


  $complainant_languagetrans = 'Langue de correspondance préférée (obligatoire)';
$contact_tooltrans = 'Mode de communication privilégié (obligatoire)';
$contact_for_messages_questions_involvedtrans = 'L&#39;incident faisant l&#39;objet de la plainte vous concerne-t-il directement? (obligatoire)';
$contact_for_messages_questions_filenbrtrans = 'Si la GRC vous a donné un numéro de dossier concernant l&#39;incident, veuillez l&#39;indiquer (si vous le connaissez)';
$contact_for_messages_questions_formtrans = 'Avez-vous déjà déposé une plainte auprès de la CCETP ou de la GRC concernant l&#39;incident et pour laquelle vous avez reçu un numéro de document ou de dossier? (obligatoire)';
$contact_for_messages_questions_informaltrans = 'Si oui, avez-vous conclu une entente avec la GRC pour régler la plainte à l&#39;amiable? (obligatoire)';



$authorizationtrans = '<fieldset class="mrgn-tp-lg"><legend>Autorisation d&#39;un représentant</legend>';
$authorization_infotrans = '<p>Remplir la section qui suit <strong>UNIQUEMENT</strong> si   vous souhaitez que la Commission civile d&#39;examen et de traitement des plaintes relatives à la GRC (la Commission) et la GRC communiquent directement avec un représentant légal ou un  <span class="hover-text">porte-parole<span class="tooltip-text" id="right">Une personne que vous autorisez à agir/parler en votre nom</span></span> plutôt qu&#39;avec vous.</p>';
$authorization_valuestrans = '<ul>
<li>Nom de famille </li>

<li>Prénom</li>

<li>Numéro de téléphone </li>

<li>Adresse de courriel </li>
</ul>';

$authorization_moreInfotrans = '<p>En fournissant ces renseignements, vous autorisez la Commission et la GRC à :</p>';
$authorization_optionstrans = '<ul>
<li>Communiquer directement avec un représentant légal ou un porte-parole plutôt qu&#39;avec vous;</li>
<li>Divulguer à votre représentant des renseignements vous concernant.</li>
</ul>';



$complainttrans = '<fieldset class="mrgn-tp-lg"><legend>Détails concernant la plainte<small> (fournir le plus de renseignements possible)</small></legend>';
$incident_dateofincidenttrans = 'Date de l&#39;incident (obligatoire)';
$complaint_dateIncidenttrans = '
      <div class="well well-sm small">
        <p>Veuillez noter que cette date concerne la date à laquelle la GRC aurait commis l&#39;inconduite. Il ne s&#39;agit pas nécessairement de la date de survenance de l&#39;incident d&#39;origine, bien que les deux dates puissent être identiques. </p>
        <p>*Si cette date tombe après le délai prescrit d&#39;un an pour déposer une plainte du public, vous devrez fournir une justification pour expliquer le retard à déposer votre plainte.</p>
        </div>';

$incident_timetrans='Heure de l&#39;incident (approx.)';
$incident_provincetrans = 'Province (obligatoire)';
$incident_locationtrans = 'Lieu (ville, village)';
$incident_citytrans = 'Veuillez décrire de la façon la plus complète possible les circonstances qui ont motivé votre plainte (obligatoire)';
$incident_describe_infotrans = '
      <p>Fournissez des précisions concernant :</p>
      <ul>

  <li>À quel  endroit et quand l&#39;incident faisant l&#39;objet de la plainte s&#39;est-il produit? </li>
  <li>Les personnes concernées</li>
  <li>Quelle conduite répréhensible le membre de la GRC a-t-il adoptée selon vous?</li>
  <li>Les gestes et les paroles du membre de la GRC qui, selon vous, étaient inappropriées</li>
  <li>Le nom de toutes autres personnes qui ont été témoins de l&#39;incident (y compris d&#39;autres policiers)</li>
  <li>Les blessures ou les dommages causés, s&#39;il y a lieu</li>
  <li>Toutes accusations déposées et le résultat de celles-ci</li>
  <li>Un détail qui, selon vous, est à l&#39;origine de l&#39;incident ou qui a eu des conséquences sur vos échanges avec la GRC</li>
  </ul>
   <p>Veuillez fournir autant de renseignements que vous le pouvez. Si vous ne connaissez pas de détails précis, vous pouvez inclure des précisions concernant un point de repère, etc.</p>';

$circumstancestrans = '* Nombre maximum de caractères autorisés : 3 500';
$officer_entered_notetrans = 'Veuillez fournir, si possible, le nom du membre de la GRC qui fait l&#39;objet de votre plainte, ainsi que son grade et le détachement auquel il appartient. Si vous ignorez le nom du membre, veuillez fournir une description de sa personne, ainsi que le nombre de membres qui sont visés par la plainte. Veillez à ce que les renseignements concernant l&#39;inconduite des  membres énumérés dans ce champ soient mentionnés dans la section ci-dessous. ';
$witness_entered_notetrans = 'Veuillez fournir le nom de tous les témoins, s&#39;il y a lieu. Il peut s&#39;agir de membres de la GRC dont la conduite ne fait pas l&#39;objet de la plainte.';
$incident_textinfotrans = 'Si vous avez fourni les renseignements demandés ci-dessus, votre plainte est complète.';
$complaint_last_Definitiontrans = '
      <p>Lorsqu&#39;un agent de la réception des plaintes aura pris connaissance de votre plainte, vous recevrez une lettre sur l&#39;état d&#39;avancement de votre plainte, ainsi que des renseignements expliquant les prochaines étapes du processus de traitement des plaintes.</p><p>* Si vous avez fourni à la Commission une adresse de courriel pour qu&#39;elle communique avec vous, vérifiez votre boîte de pourriels afin de vous assurer que les courriels de la Commission n&#39;y ont pas été livrés par erreur. </p>
<p>Bien que ce ne soit pas nécessaire, si vous souhaitez toujours parler à un agent de la réception des plaintes par téléphone, veuillez fournir ci-dessous :</p>
<ul>
  <li>le numéro où vous joindre  </li>
  <li>une brève explication de la raison pour laquelle vous demandez à ce qu&#39;on vous rappelle  </li>
</ul>
<p>Veuillez noter que les tentatives de vous contacter par téléphone pourraient prendre jusqu&#39;à 15 jours ouvrables. Les appels seront faits durant les heures normales d&#39;ouverture, du lundi au vendredi (heure avancée de l&#39;Est), ce qui pourrait retarder l&#39;examen de votre plainte.</p>
      <textarea class="form-control" id="witness_added_note" name="witness_added_note" rows="5" cols="65" maxlength="3510" size="3510" data-rule-rangelength="[0,3500]"></textarea>
    ';

$complaint_approval_texttrans = '
      <div class="well">
        <p><strong>Respect de la vie privée et divulgation de renseignements personnels</strong></p>
        <p>En soumettant le Formulaire de plainte dûment rempli, vous autorisez la Commission à recueillir vos renseignements personnels à des fins reliées au processus prévu aux parties VI, VII, VII.1 et VII.2 de la <em>Loi sur la GRC</em>. Les renseignements sont conservés dans le fichier de renseignements personnels CCETP PPU 005, et vous pouvez y accéder conformément à la <em>Loi sur la protection des renseignements personnels</em>.</p>
        <p>Le Formulaire de plainte dûment rempli ainsi que tous les documents pertinents que vous fournirez à la Commission seront acheminés à la GRC pour une enquête en vertu du paragraphe 45.53(10) de la <em>Loi sur la GRC</em>. Par conséquent, un enquêteur de la GRC chargé de la plainte pourrait vous demander de donner une déclaration.</p>
        <p><strong> Attestation</strong></p>
        <p>J&#39;ai passé en revue le Formulaire de plainte, et je reconnais que les renseignements fournis sont, à ma connaissance, complets et exacts.</p>
        <div class="checkbox-inline">';

$note_acknowledgetrans =  'En cochant cette case, vous reconnaissez que les renseignements fournis sont complets et exacts au meilleur de votre connaissance. (obligatoire)';
}


//===============================================================

  // Preferred Language of Correspondence options
  $preferredLanguage = [
    '' => t($selectboxtranslatepreferredLanguage),
    'ENGLISH-ANGLAIS' => t($languageEnglish),
    'FRENCH-FRAN&#199;AIS' => t($languageFrench),
  ];
  // Preferred method of communication options
  $preferredCommunication = [
    '' => t($selectboxtranslatepreferredCommunication),
    'EMAIL-COURRIEL' => t($email),
    'TELEPHONE-TÉLÉPHONE' => t($phone),
    'LETTER-LETTRE' => t($mail)
  ];
  //involved in accident options
  $accident= [
    '' => t($selectboxtranslateAccident),
    'NO-NON' => t($accidentno),
    'YES-OUI' => t($accidentyes)
  ];
  //filed complaint options
  $filedComplaint= [
    '' => t($selectboxtranslatefiledComplaint),
    'NO-NON' => t($filedComplaintno),
    'YES-OUI' => t($filedComplaintyes)
  ];
  //signed agreement options
  $signedAgreement= [
    '' => t($selectboxtranslatesignedAgreement),
    'NO-NON' => t($signedAgreementno),
    'YES-OUI' => t($signedAgreementyes)
  ];

  //array of option for the province selectors
  $provinces = [
    '' => t($selectboxtranslate),
    'AB'=> $this->t('AB'),
    'BC'=> $this->t('BC'),
    'YK'=> $this->t('YK'),
    'NT'=> $this->t('NT'),
    'NU'=> $this->t('NU'),
    'MB'=> $this->t('MB'),
    'ON'=> $this->t('ON'),
    'SK'=> $this->t('SK'),
    'NB'=> $this->t('NB'),
    'QC'=> $this->t('QC'),
    'PE'=> $this->t('PE'),
    'NL'=> $this->t('NL'),
    'NS'=> $this->t('NS'),
    'N/A'=> $this->t('N/A')
  ];

//========================================================
  $form['Title_info'] = [
    '#type' => 'markup',
    '#markup' => t($Title_info),
    ];

  //========================================================
  //user personnal information

  //user lastname
  $form['complainant_name_family'] = [
    '#type' => 'textfield',
    '#name'=> 'complainant_name_family',
    '#title' => $this->t($famillyname),


  ];
  //user firstname
  $form['complainant_name_given']= [
    '#type' => 'textfield',
    '#name'=> 'complainant_name_given',
    '#title' => $this->t($givenname),

  ];
  //user date of birth chooser
  $form['complainant_date_birth'] = [
    '#type' => 'date', //'#type' => 'date',
    '#name'=> 'complainant_date_birth',
    '#title' => $this->t($dateofbirth),
  ];

  //user mailling address
  $form['complainant_address_mailing_street_nbr'] = [
    '#type' => 'textfield',
    '#name'=> 'complainant_address_mailing_street_nbr',
    '#title' => $this->t($street),
   // '#required' => TRUE,
  ];
  //user city of residence
  $form['complainant_address_mailing_city'] = [
    '#type' => 'textfield',
    '#name'=> 'complainant_address_mailing_city',
    '#title' => $this->t($city),
  ];
  //user province of residence
  $form['complainant_address_mailing_province'] = [
    '#type' => 'select',
    '#name'=> 'complainant_address_mailing_province',
    '#title' => $this->t($proving),
    '#options' => $provinces,
  ];
  //user postal code
  $form['complainant_address_mailing_postalcode'] = [
    '#type' => 'textfield',
    '#name'=> 'complainant_address_mailing_postalcode',
    '#title' => $this->t($postalcode),
  ];
  //user country of residence
  $form['complainant_address_mailing_country'] = [
    '#type' => 'textfield',
    '#name'=> 'complainant_address_mailing_country',
    '#title' => $this->t("$country"),
  ];
  //user telephone
  $form['complainant_phone_home'] = [
    '#type' => 'tel',
    '#name'=> 'complainant_phone_home',
    '#title' => $this->t($telephone),
  ];
  //user email address
  $form['complainant_email'] = [
    '#type' => 'textfield',
    '#name'=> 'complainant_email',
    '#title' => $this->t($emailadress),
  ];

  //========================================================
  //QUESTIONS
   //user date of birth label
   $form['question'] = [
    '#type' => 'markup',
    '#markup' => t('<fieldset class="mrgn-tp-lg"><legend>Questions</legend>'),
  ];
  $form['complainant_language'] = [
   '#type' => 'select',
   '#name'=> 'complainant_language',
   '#title' => $this->t($complainant_languagetrans),
   '#options' => $preferredLanguage,
  ];
  $form['contact_tool'] = [
    '#type' => 'select',
    '#name'=> 'contact_tool',
    '#title' => $this->t($contact_tooltrans),
    '#options' => $preferredCommunication,
    //'#required' => TRUE,
  ];
  $form['contact_for_messages_questions_involved'] = [
    '#type' => 'select',
    '#name'=> 'contact_for_messages_questions_involved',
    '#title' => $this->t($contact_for_messages_questions_involvedtrans),
    '#options' => $accident,
    //'#required' => TRUE,
  ];
  $form['contact_for_messages_questions_filenbr'] = [
    '#type' => 'textfield',
    '#name'=> 'contact_for_messages_questions_filenbr',
    '#title' => $this->t($contact_for_messages_questions_filenbrtrans),
  ];

  $form['contact_for_messages_questions_form'] = [
    '#type' => 'select',
    '#name'=> 'contact_for_messages_questions_form',
    '#title' => $this->t($contact_for_messages_questions_formtrans),
    '#options' => $filedComplaint,
   //'#required' => TRUE,
  ];

  $form['contact_for_messages_questions_informal'] = [
    '#type' => 'select',
    '#name'=> 'contact_for_messages_questions_informal',
    '#title' => $this->t($contact_for_messages_questions_informaltrans),
    '#options' => $signedAgreement,
   // '#required' => TRUE,
  ];

  $form['question_closingfieldsetDiv'] = [
    '#type' => 'markup',
    '#markup' => t('</fieldset>'),
  ];
  //========================================================
  //Representative Authorization
  $form['authorization'] = [
    '#type' => 'markup',
    '#markup' => t($authorizationtrans),
  ];
  $form['authorization_info'] = [
    '#type' => 'markup',
    '#markup' => t($authorization_infotrans),
  ];

  $form['authorization_values'] = [
    '#type' => 'markup',
    '#markup' => t($authorization_valuestrans),
  ];

  $form['authorization_moreInfo'] = [
    '#type' => 'markup',
    '#markup' => t($authorization_moreInfotrans),
  ];

  $form['authorization_options'] = [
    '#type' => 'markup',
    '#markup' => t($authorization_optionstrans
    ),
  ];

  $form['contact_for_messages_organization'] = [
    '#type' => 'textarea',
    '#name'=> 'contact_for_messages_organization',
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
    '#markup' => t($complainttrans),
  ];

  $form['incident_dateofincident'] = [
    '#type' => 'label',
    '#title' => $this->t($incident_dateofincidenttrans),
    //'#required' => FALSE,
  ];

  $form['complaint_dateIncident'] = [
    '#type' => 'markup',
    '#markup' => t($complaint_dateIncidenttrans
    ),
  ];
  //date of incident chooser
  $form['incident_date'] = [
    '#type' => 'date',//'#type' => 'date',
    '#name'=> 'incident_date',
    //'#required' => TRUE,
  ];
  //time of incident $chooser
  $form['incident_time'] = [
    '#type' => 'select',
    '#name'=> 'incident_time',
    '#title' => $this->t($incident_timetrans),
    '#options' =>$timeIncident,
    //'#required' => FALSE,
  ];

  //province of incident
  $form['incident_province'] = [
    '#type' => 'select',
    '#name'=> 'incident_province',
    '#title' => $this->t($incident_provincetrans),
    '#options' => $provinces,
    //'#required' => TRUE,
  ];

  // city of incident
  $form['incident_location'] = [
    '#type' => 'textfield',
    '#name'=> 'incident_location',
    '#title' => $this->t($incident_locationtrans),
    //'#required' => FALSE,
  ];

  $form['incident_city'] = [
    '#type' => 'label',
    '#for' => 'circumstances',
    '#title' => $this->t($incident_citytrans),
    //'#required' => FALSE,
  ];
  $form['incident_describe_info'] = [
    '#type' => 'markup',
    '#for' => 'circumstances',
    '#markup' => t($incident_describe_infotrans),
  ];

  $form['circumstances'] = [
    '#type' => 'textarea',
    '#name' => 'circumstances',
    '#title' => $this->t($circumstancestrans),
  ];
  $form['officer_entered_note'] = [
    '#type' => 'textarea',
    '#name' => 'officer_entered_note',
    '#title' => $this->t($officer_entered_notetrans),
  ];
  $form['witness_entered_note'] = [
    '#type' => 'textarea',
    '#name' => 'witness_entered_note',
    '#title' => $this->t($witness_entered_notetrans),
  ];

  $form['incident_textinfo'] = [
    '#type' => 'label',
    '#title' => t($incident_textinfotrans),
    //'#required' => FALSE,
  ];

  $form['complaint_last_Definition'] = [
    '#type' => 'markup',
    '#markup' => t($complaint_last_Definitiontrans),
  ];
  $form['witness_added_note'] = [
    '#type' => 'textarea',
    '#name' => 'witness_added_note',
    '#title' => $this->t(''),
  ];

  $form['complaint_approval_text'] = [
    '#type' => 'markup',
    '#markup' => t($complaint_approval_texttrans
    ),
  ];
  $form['note_acknowledge'] = [
    '#type' => 'checkbox',
    '#name'=> 'note_acknowledge',
    '#title' => $this->t($note_acknowledgetrans),
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
    '#value' => 'CRCC-CCETP',
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
    '#value' => 'Online complaint form.',
  ];
  $form['advocate_entered_type'] = [
    '#type' => 'hidden',
    '#name' => 'advocate_entered_type',
    '#value' => 'ADVOCATE-DÉFENSEUR',
  ];
  $form['wdtEnvoy_RouteId'] = [
    '#type' => 'hidden',
    '#name' => 'wdtEnvoy_RouteId',
    '#value' => 'complaint',
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
    if (strlen($form_state->getValue('complainant_name_family'))  <1 ) {
      ++$count;
      $form_state->setErrorByName('complainant_name_family', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_name_given')) <1) {
      ++$count;
      $form_state->setErrorByName('complainant_name_given', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_address_mailing_street_nbr') )<1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_street_nbr', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_address_mailing_city') )<1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_city',$this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('complainant_address_mailing_province') )<1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_province', $this->t('Error '.$count .': This field is required.'));
    }
    //postal code

    if (strlen($form_state->getValue('complainant_address_mailing_postalcode') )<1 ) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_postalcode', $this->t('Error '.$count .': This field is required.'));
    }else{

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

      if ( !(preg_match($country_regex['ca'], $postalCode)) ) {
        ++$count;
        $form_state->setErrorByName('complainant_address_mailing_postalcode', $this->t('Error '.$count .': Value needs to be entered as follow A1A 1A1'));
      }


    }

    if (strlen($form_state->getValue('complainant_address_mailing_country') )<1) {
      ++$count;
      $form_state->setErrorByName('complainant_address_mailing_country', $this->t('Error '.$count .': This field is required.'));
    }

    //phone number
    if (strlen($form_state->getValue('complainant_phone_home') )<1) {
      ++$count;
      $form_state->setErrorByName('complainant_phone_home', $this->t('Error '.$count .': This field is required.'));
    }else{
      $phone = $form_state->getValue('complainant_phone_home');
      if(!(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone))) {
        ++$count;
        $form_state->setErrorByName('complainant_phone_home', $this->t('Error '.$count .': Value needs to be entered as follow 999-999-9999'));
      }
    }

    //question form validation
    if (strlen($form_state->getValue('complainant_language') )<1) {
      ++$count;
      $form_state->setErrorByName('complainant_language', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_tool') )<1) {
      ++$count;
      $form_state->setErrorByName('contact_tool', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_for_messages_questions_involved') )<1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_involved', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_for_messages_questions_form') )<1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_form', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('contact_for_messages_questions_informal') )<1) {
      ++$count;
      $form_state->setErrorByName('contact_for_messages_questions_informal', $this->t('Error '.$count .': This field is required.'));
    }

    //detail of complain validation

    if (strlen($form_state->getValue('incident_date') )<1) {
      ++$count;
      $form_state->setErrorByName('incident_date', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('incident_time') )<1) {
      ++$count;
      $form_state->setErrorByName('incident_time', $this->t('Error '.$count .': This field is required.'));
    }
    if (strlen($form_state->getValue('incident_province') )<1) {
      ++$count;
      $form_state->setErrorByName('incident_province', $this->t('Error '.$count .': This field is required.'));
    }

    if (strlen($form_state->getValue('circumstances') )<1) {
      ++$count;
      $form_state->setErrorByName('circumstances', $this->t('Error '.$count .': This field is required.'));
    }

    //more work to be done
    if (strcmp($form_state->getValue('note_acknowledge'),"1")) {
      ++$count;
      $form_state->setErrorByName('note_acknowledge', $this->t('Error '.$count .': This field is required.'));
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
$fields["ADDBY"] = "svc_envoy";
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


$result=null;

if (isset($_POST['wdtEnvoy_RouteId'])) {
    extract($_POST);
    $url = 'http://cms-ncr-001:51510/submit/add';
    $fields = http_build_query($_POST);

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $r = curl_getinfo($ch);
    $rcode = $r['http_code'];

  /* print "<div class='alert alert-success'><p>Thank you for contacting the Commission. Your reference number is <strong>".$result."</strong></p></div>"; */

if($result=='A server exception has been caught: One or more errors occurred.' or $result==NULL) {
   header('Location:/en/failed-submission');
   exit;
 }
 else {
    header('Location:/en/thank-you?result=' .$result);
	curl_close($ch);
 }
 }

  }


}
