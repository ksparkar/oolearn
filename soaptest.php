<?php

$client = new SoapClient("http://rnt0012.staging.beinteractive.com.au/rnt0012.asmx?WSDL", array(
    "trace"      => 1,
    "exceptions" => 0));

# $response = $client->__getFunctions();
# print_r($response);

// $params = array('RNTCustId' => '65');

// $response = $client->__soapCall("ProcessInstantWin", $params); 

$response = $client->ProcessInstantWin(array(
  'RNTCustId' => '312'
));

echo "ID : " . $response->ProcessInstantWinResult->CustId . "<br />";
echo "Status : " . $response->ProcessInstantWinResult->Status . "<br />";
echo "Prize : " . $response->ProcessInstantWinResult->Prize . "<br />";

/*
print "<pre>\n";
print "Request :\n".htmlspecialchars($client->__getLastRequest()) ."\n";
print "Response:\n".htmlspecialchars($client->__getLastResponse())."\n";
print "</pre>"; 
*/

?>