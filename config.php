<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => 'your_App_id',
	'app_secret' => 'Yuor_secret_id',
	'default_graph_version' => 'v2.10',
]);

$handler = $FBObject->getRedirectLoginHelper();
