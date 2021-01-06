<?php
echo 'Hello Sir';
$app_id='GPgmQSK3lJSiImPaIOpu7Pap6qbOamQHrxCMdNwe';
$rest_key='mqTMeMCO7KYH3fxl8iwH2cFsDaJetZQxUwTM0VL3';
$master_key='muiCHgOq4YnjKTW2JIXvM7HVSKNb3l2QLDaAS9Oa';
echo 'Connected';
$mobile='9790880140';
$requestId='299';
$success='Success';
echo $app_id;

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


// Init parse: app_id, rest_key, master_key for Deepak Parse Account
ParseClient::initialize('GPgmQSK3lJSiImPaIOpu7Pap6qbOamQHrxCMdNwe', 'mqTMeMCO7KYH3fxl8iwH2cFsDaJetZQxUwTM0VL3', 'muiCHgOq4YnjKTW2JIXvM7HVSKNb3l2QLDaAS9Oa');
// save something to class TestObject
$testObject = ParseObject::create("TestObjectDY");
$testObject->set("foo", "DEEPAK YADAV-DY");
$testObject->save();



?>