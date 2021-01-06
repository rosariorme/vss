<?php

//order posting
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$adharcardNo = $_POST['adharcardNo'];
$area = $_POST['area'];
$exactname = $_POST['exactname'];
$bankname = $_POST['bankname'];
$bankifsc = $_POST['bankifsc'];
$bankaccount = $_POST['bankaccount'];
$email = $_POST['email'];
$managerno = $_POST['managerno'];
$userFullName = $_POST['userFullName'];


require 'vendor/autoload.php';
// Add the "use" declarations where you'll be using the classes

use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseGeoPoint;

// Init parse: app_id, rest_key, master_key for Demo Parse Account
ParseClient::initialize('dsYl4bMeuWO6BfncP1Fx9r6PZg4sUHeI0eWEO2M1','17Bw8obwmKWA7eNNUJqGojei7MUXDxDrEbG9R6Lr','rujKzArjnwzNkhBlmQsSfryEvYuBmGEdu0u2Ktij');

         $user = new ParseUser();
         $user->set("username", $username);
         $user->set("email", $email);
         $user->set("password", $password);
          $user->set("address",$address);
               $user->set("exactname",$exactname); 
               $user->set("bankname",$bankname);
               $user->set("bankaccount",$bankaccount);
               $user->set("bankifsc",$bankifsc); 
               $user->set("area",$area); 
               $user->set("userFullName",$userFullName);
               $user->set("managerName", $managerno);
			   $user->set("name", "Restaurant");
try {
    $user->signUp();
    $result = $user->getObjectId();
	echo "Registration sucessful Kindly copy the id :" .$result ."  in the place of userid during API intergration";
} catch (ParseException $ex) {
    echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
}

?>