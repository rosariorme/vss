<?php
$mobile = $_POST['mobile'];
$request_id = $_POST['request_id'];
$status = $_POST['status'];
echo $mobile;
echo $request_id;
echo $status;
echo 'Hello Deepak Yadav';
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
ParseClient::initialize('2CCH95YinvXsss6GyUysQercURxkfZ885tpjATos', 'JuKovnLAcYDp5ckek4IKgyPgBZKrKqijIqXCi9PK', 'LB0ep78r436ZXmz5bJ4FMm6OsgDWi0vZbBk6OIKT');
// save something to class TestObject
$testObject = ParseObject::create("PayOne");
$testObject->set("foo","9968581085" );
$testObject->set("mobileNumber",$mobile );
$testObject->set("request_id",$request_id );
$testObject->set("status",$status );
$testObject->save();
echo 'Data Saved Succesfully';

?>