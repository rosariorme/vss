
<?php
//order details
$userid = $_POST['userid'];



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
// get accepted orders

$query = new ParseQuery("order");
$query->equalTo("resturantid", $userid);
$query->notEqualTo("status", "Delivered");



$results = $query->find();
// Do something with the returned ParseObject values
 $fulldata = array();
foreach  ($results as $orderObject) {
	$fulldata[] = array(
  "agentId"=> $orderObject->get("agentid"),
  "contactno"=> $orderObject->get("AgentContactNo"),
  "agentname"=> $orderObject->get("agentName"),
  "order"=> $orderObject->get("order"),
  "status"=> $orderObject->get("status")
 );
}
  echo json_encode($fulldata);

?>