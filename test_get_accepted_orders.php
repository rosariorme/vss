
<?php
//order details
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];




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
// get accepted orders

$userGeoPoint = new ParseGeoPoint((double)$latitude, (double)$longitude);


$query = new ParseQuery("_User");
$query->equalTo("name", "Agent");
$query->equalTo("userStatus", "Active");
$query->equalTo("loggedIn", true);
$query->withinKilometers("location", $userGeoPoint, 2);


try{
$results = $query->find();
// Do something with the returned ParseObject values
 $fulldata = array();
foreach  ($results as $orderObject) {
	$fulldata[] = array(
  "agentId"=> $orderObject->getObjectId(),
  "contactno"=> $orderObject->get("username"),
  "agentname"=> $orderObject->get("userFullName")
 );
}
if(!is_null($results)){
  echo json_encode($fulldata);
}else{
	echo "No agents";
}

  } catch (ParseException $ex) {
      echo "Error" . $ex.getMessage();
}

?>