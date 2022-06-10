
<?php


$AMADEUS_API_CLIENT_ID = "ZzawjX6abhDRDqdQYU0Wqgbx5oGgA0EG";
$AMADEUS_API_CLIENT_SECRET = "MHwrmrkmbL8obtvD";

//$AMADEUS_API_CLIENT_ID="qeWTJrzwL2Mzm8pXeViyFgyWUn1e8JT5";
//$AMADEUS_API_CLIENT_SECRET="o0uwwwIoJXhKWGwy";

$AMADEUS_API_TOKEN_REQUEST="https://test.api.amadeus.com/v1/security/oauth2/token";
$AMADEUS_API_SEARCH_ENDPOINT="https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=CTA&destinationLocationCode=";

//Richiedo il token
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL,$AMADEUS_API_TOKEN_REQUEST);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS,"grant_type=client_credentials&client_id=".$AMADEUS_API_CLIENT_ID."&client_secret=".$AMADEUS_API_CLIENT_SECRET); 
$headers = array("Content-Type:application/x-www-form-urlencoded");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$token = curl_exec($curl);

echo $token;



curl_close($curl);

        
?>
