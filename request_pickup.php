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
ParseClient::initialize('U2MuvTEu4H6E0as50mN9ffrmYf6jxXjXirlTWdZg','5yrA86vLu4F3ZvFyLIg8ouqjP32Jz9UxOYg2krz4','9lc6foUt0Ixme9NbQ266w3OE4nSqzRFhRXab0jow');


// post order
 $point = new ParseGeoPoint((double)$latitude, (double)$longitude);
 $results= ParseCloud::run("postOrder", ["paymentMode" => $paymentMode, "address"=>$address,"amount"=>$amount, "area"=>$area,"city"=>$city,"pincode"=>$pincode,"customernumber"=>$customernumber,
 "postedby"=>$postedby,"ordername"=>$ordername,"userid"=>$userid,"status"=>$status,"location"=>$point,"restname"=>$restname]);
 echo $results;

?>