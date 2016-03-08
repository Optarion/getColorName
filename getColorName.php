<?php

function getApiResponse($color = '#ffffff'){

	$url = 'http://chir.ag/projects/name-that-color/#CFED61';


	$html = file_get_contents($url);
	echo $html;
	$results = json_decode($html,true);

	return $results;
}

try{

	echo '<pre>';
	echo print_r(getApiResponse(), true);
	echo '</pre>';

/*	$result = getApiResponse($destination);
	$result = getNextStop($result);
	echo displayNextStop($result);

	echo '<br></br>';
	$slack_url = 'https://hooks.slack.com/services/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';
	$channel = '#general';
	$username = 'Tram Station';
	$message = getPayloadMessage(displayNextStop($result));
	$icon = ':railway_car:';

	$data = json_encode(array(
                "channel"       =>  $channel,
                "username"		=>	$username,
                "text"          =>  $message,
                "icon_emoji"    =>  $icon
            ));

	$curl = curl_init($slack_url);//Set up the url to target
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($curl, CURLOPT_POSTFIELDS, array('payload' => $data)); //Set up data to transfer
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Force curl to every server type (HTTPS included)
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //Return the outputting not displaying it

	//$return = curl_exec($curl);
	if( $return === false)
	{
	    echo 'Erreur Curl : ' . curl_error($curl);
	}
	else
	{
	    echo 'L\'opération s\'est terminée sans aucune erreur<br>'.$return;

	}
	curl_close($curl);*/

	
}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
