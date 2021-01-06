<?php
//order details
$userid = $_POST['userid'];
$date = $_POST['date'];


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
// get ordertransaction
$unixtimestamp = date('Y-m-d\TH:i:s.u', strtotime($date));

$query = new ParseQuery("OrderTransaction");
$query->equalTo("userId", $userid);
$query->greaterThanOrEqualTo("createdAt", $unixtimestamp);

$results = $query->find();
// Do something with the returned ParseObject values
 $fulldata = array();
foreach  ($results as $orderObject) {
	$fulldata[] = array(
  "baseCommission"=> $orderObject->get("baseCommission"),
  "credit"=> $orderObject->get("credit"),
  "debit"=> $orderObject->get("debit"),
  "orderAmount"=> $orderObject->get("orderAmount"),
  "orderCommission"=> $orderObject->get("orderCommission"),
  "orderId"=> $orderObject->get("orderId"),
  "surchargesComm"=> $orderObject->get("surchargesComm"),
  "taxdeducted"=> $orderObject->get("taxdeducted"),
  "typeoftax"=> $orderObject->get("typeoftax"),
  "userId"=> $orderObject->get("userId"),
  "createdAt"=> $orderObject->get("createdAt"),
  "updatedAt"=> $orderObject->get("updatedAt"));
}
  echo json_encode($fulldata);

?>