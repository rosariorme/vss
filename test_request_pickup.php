<?php

//order posting
$paymentMode = $_POST['paymentMode'];
$address = $_POST['address'];
$amount = $_POST['amount'];
$area = $_POST['area'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$customernumber = $_POST['customernumber'];
$postedby = $_POST['postedby'];
$ordername = $_POST['ordername'];
$userid = $_POST['userid'];
$status = $_POST['status'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$restname = $_POST['restname'];

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


// post order
 $point = new ParseGeoPoint((double)$latitude, (double)$longitude);
 $results= ParseCloud::run("postOrder", ["paymentMode" => $paymentMode, "address"=>$address,"amount"=>$amount, "area"=>$area,"city"=>$city,"pincode"=>$pincode,"customernumber"=>$customernumber,
 "postedby"=>$postedby,"ordername"=>$ordername,"userid"=>$userid,"status"=>$status,"location"=>$point,"restname"=>$restname]);
 echo $results;

?>