<?php
$id = $_POST['id'];

$response = array();

echo "Going to connect database";
mysql_connect("50.62.209.49:3306","appdeliverytrack","android@123") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
echo"dy1";
$sql = "SELECT agent_balance FROM agent_account WHERE agent_name = $id";
$result = mysql_query($sql);
//$result = mysql_query("SELECT agent_balance FROM agent_account WHERE agent_name=$id") or die(mysql_error());
echo"Dy";
// check for empty result
echo"Dy2";
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["products"] = array();
    
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
		
        $product["lat"] = $row["lat"];
        //$product["lng"] = $row["lng"];
	//	$product["id"] = $row["id"];
        // push single product into final response array
        array_push($response["products"], $product);
    }
    // success
   // $response["success"] = 1;

 //  echo "<br/>";
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";

    // echo no users JSON
    echo json_encode($response);
}

?>

