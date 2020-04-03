<?php
// starting the login session.

session_start();

require 'vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '617722699081535',
	'app_secret' => '5292b40bc3d7727681a3d01d8ac8834f',
	'default_graph_version' => 'v2.10'

]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl('https://writers.r254developers.co.ke/fb-login');

try {

	$accessToken = $helper->getAccessToken();
	if(isset($accessToken)) {
		$_SESSION['access_token'] = (string)$accessToken; // coverting to string
		// if the session is set we can redirect to the user page.

		header("Location: ../dashboard.php");

	}
} catch (Exception $e) {
	echo $e->getTraceAsString();
	
}

// now we are going to get user's first name, email, last name 
if (isset($_SESSION['access_token'])) {

	try {
		$fb->setDefaultAccessToken($_SESSION['access_token']);
		$res = $fb->get('/me?locale=en_US&fields=name, email');
		$user = $res->getGraphUser();
		echo 'Hello ', $user->getField('name');
		
	} catch (Exception $e) {
		
	}
}

?>