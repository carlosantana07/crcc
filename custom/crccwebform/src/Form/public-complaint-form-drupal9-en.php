
 

<?PHP
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
 
 
  ?>

 