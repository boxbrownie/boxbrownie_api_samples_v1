<?php  
$url = 'https://api.boxbrownie.com/v1/job';                                                                 
$headers = ['Content-Type: application/xml','Authorization: $token'];
$ch = curl_init($url);		
curl_setopt($ch, CURLOPT_POST, 1);		
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);	
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);	
$response = curl_exec($ch);		
?>			