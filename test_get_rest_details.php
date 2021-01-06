<?php
//outlet rest
$restid = $_POST['restid'];


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

// get order
$query = new ParseQuery("OutletRest");
$query->equalTo("restId", $restid);
   $results = $query->find();
   $fulldata = array();

 foreach  ($results as $orderObject) {
	 $fulldata[] = array("area"=>$orderObject->get("area"),
	                     "city"=>$orderObject->get("city"),
						 "address"=>$orderObject->get("address"),
						 "pincode"=>$orderObject->get("pincode"),
						 "lat"=>$orderObject->get("lat"),
						 "lon"=>$orderObject->get("lon"),
						 "restContactNo"=>$orderObject->get("restContactNo"),
						 "restName"=>$orderObject->get("restName"));
 }

	 
   $value = reset($fulldata);
  
   echo json_encode($value);
   
   



?>