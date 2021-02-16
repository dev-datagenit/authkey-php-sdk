<?php

require_once './vendor/autoload.php';

use AuthkeyPhpSdk\AuthkeyPhpSdk;

class test {

    public function __construct() {
        $authkeyObj = new AuthkeyPhpSdk();
        $authkeyObj->setMobile('XXXXXXXXXX');
        $authkeyObj->setSid('XXX');
        $authkeyObj->setAuthkey('XXXXXXXXXXXXXX');
	$authkeyObj->setCountryCode('XX');
        echo $authkeyObj->sendMessage();
    }

}

$transaction = new test();

?>
