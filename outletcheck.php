<?php
//outlet check
$outletId = $_POST['outletId'];


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
ParseClient::initialize('U2MuvTEu4H6E0as50mN9ffrmYf6jxXjXirlTWdZg','5yrA86vLu4F3ZvFyLIg8ouqjP32Jz9UxOYg2krz4','9lc6foUt0Ixme9NbQ266w3OE4nSqzRFhRXab0jow');

// get order
$query = new ParseQuery("Outlets");
try {
  $outletObject = $query->get($outletId);
  // The object was retrieved successfully 
  $outlet= $outletObject->getObjectId();
  $name = $outletObject->get("outletName");
 // $name = urlencode($name);
  if (!is_null($outlet))
  {
   //include('/OrderCreation.html?id='+$outlet);
   header('Location: http://vsstechnologyapp.in/OrderCreation.html?id='.$outlet.'&name='.urlencode($name));
  }else{
	  
	  echo "Invalid id";
  }
 
} catch (ParseException $ex) {
  // The object was not retrieved successfully.
  // error is a ParseException with an error code and message.

}

?>