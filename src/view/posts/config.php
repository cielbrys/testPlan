<?php

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '965231693854006',
		'app_secret' => 'a6b23dfbec338bf168926fb58115180b',
		'default_graph_version' => 'v3.2'
	]);

  $helper = $FB->getRedirectLoginHelper();
?>
