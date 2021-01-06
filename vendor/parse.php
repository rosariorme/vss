<?php
// define location of Parse PHP SDK, e.g. location in "Parse" folder
// Defaults to ./Parse/ folder. Add trailing slash
define( 'PARSE_SDK_DIR');
// include Parse SDK autoloader
//require_once( 'autoload.php' );
require 'autoload.php';
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
// Init parse: app_id, rest_key, master_key
ParseClient::initialize('2CCH95YinvXsss6GyUysQercURxkfZ885tpjATos', 'JuKovnLAcYDp5ckek4IKgyPgBZKrKqijIqXCi9PK', 'LB0ep78r436ZXmz5bJ4FMm6OsgDWi0vZbBk6OIKT');
// save something to class TestObject
$testObject = ParseObject::create("TestObjectDY");
$testObject->set("foo", "barDY");
$testObject->save();

}
