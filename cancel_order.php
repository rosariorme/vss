<?php
//order cancel
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

// cancel order 
 $results= ParseCloud::run("cancelOrder", ["orderid" => $orderid]);
 echo $results;
  



?>