<?php
/*
  @Author: ananayarora
  @Date:   2016-10-12T14:54:23+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T01:23:08+05:30
*/

    session_start();

    require("inc/mysqli.php");
    require("inc/conf.php");
    require("inc/functions.php");

    $f = new Functions();

	require("autoload.php");
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\Entities\AccessToken;
	use Facebook\HttpClients\FacebookCurlHttpClient;
	use Facebook\HttpClients\FacebookHttpable;

    FacebookSession::setDefaultApplication("431936060318677","26345efb3b9af4a5c56722a256c3dd8b");
    $helper = new FacebookRedirectLoginHelper($f->c->facebook_redirect_url);

    try {
		$session = $helper->getSessionFromRedirect();
	} catch( FacebookRequestException $ex ) {
  		// When Facebook returns an error
	} catch( Exception $ex ) {
	  // When validation fails or other local issues
	}
    if (isset($session)) {
        $request = new FacebookRequest($session, 'GET', '/me?fields=id,first_name,last_name,email');
		$response = $request->execute();
        $graphObject = $response->getGraphObject();
        $fb['fbid'] = $graphObject->getProperty('id');
        $fb['first_name'] = $graphObject->getProperty('first_name');
        $fb['last_name'] = $graphObject->getProperty('last_name');
        $fb['email'] = $graphObject->getProperty('email');
        $f->initiateFacebookLogin($fb);
    } else {
		$loginURL = $helper->getLoginUrl();
		header("Location: ".$loginURL);
	}
?>
