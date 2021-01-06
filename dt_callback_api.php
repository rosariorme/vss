<?php
$mobile = $_POST['mobile'];
$request_id = $_POST['request_id'];
$status = $_POST['status'];
$amount=$_POST['amount'];

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

// Init parse: app_id, rest_key, master_key for Demo Parse Account
ParseClient::initialize('U2MuvTEu4H6E0as50mN9ffrmYf6jxXjXirlTWdZg','5yrA86vLu4F3ZvFyLIg8ouqjP32Jz9UxOYg2krz4','9lc6foUt0Ixme9NbQ266w3OE4nSqzRFhRXab0jow');
// save something to class TestObject
$testObject = ParseObject::create("PayOneStatus");
$testObject->set("mobileNumber",$mobile );
$testObject->set("request_id",$request_id );
$testObject->set("amount",$amount );
$testObject->set("status",$status );
$testObject->save();
echo 'Data Saved Succesfully';

?>