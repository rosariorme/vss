<?php

// commission test
$serviceTax = $_POST['serviceTax'];
$tds = $_POST['tds'];
$UpdatedBy = $_POST['UpdatedBy'];

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
ParseClient::initialize('dsYl4bMeuWO6BfncP1Fx9r6PZg4sUHeI0eWEO2M1','17Bw8obwmKWA7eNNUJqGojei7MUXDxDrEbG9R6Lr','rujKzArjnwzNkhBlmQsSfryEvYuBmGEdu0u2Ktij');

// test tax
$taxesObject = ParseObject::create("TaxesDemoagain");
$taxesObject->set("serviceTax",(double)$serviceTax );
$taxesObject->set("tds",(double)$tds );
$taxesObject->set("updatingBy", (string)$UpdatedBy );
$taxesObject->save();
echo 'Data Saved to Tax Succesfully';


?>