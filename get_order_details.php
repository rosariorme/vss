<?php
//order posting
$orderid = $_POST['orderid'];


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
$query = new ParseQuery("order");
try {
  $orderObject = $query->get($orderid);
  // The object was retrieved successfully
  $obj = new stdClass();
  $obj->orderid= $orderObject->getObjectId();
  $obj->amount= $orderObject->get("amount");
  $obj->area= $orderObject->get("area");
  $obj->status= $orderObject->get("status");
  $obj->city= $orderObject->get("city");
  $obj->pincode= $orderObject->get("pincode");
  $obj->postedby= $orderObject->get("name");
  $obj->agentname= $orderObject->get("agentName");
  $obj->agentid= $orderObject->get("agentid");
  $obj->customernumber= $orderObject->get("customerNumber");
  $obj->itemname= $orderObject->get("order");
  $obj->restcontactno= $orderObject->get("restContactNo");
  $obj->agentcontactno= $orderObject->get("AgentContactNo");
  $obj->paymentmode= $orderObject->get("PaymentMode");
  $obj->restname= $orderObject->get("restName");
  $obj->resturantid= $orderObject->get("resturantid");
echo json_encode($obj);

} catch (ParseException $ex) {
  // The object was not retrieved successfully.
  // error is a ParseException with an error code and message.

}

?>