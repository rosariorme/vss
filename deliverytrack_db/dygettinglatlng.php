<?php
//$id = $_POST['id'];
echo "Going connecting DB";
$response = array();
//mysql_connect("mysql7.000webhost.com","a1716706_user","android@123") or  die(mysql_error());
mysql_connect("50.62.209.49:3306","appdeliverytrack","android@123") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");

 // check for post data
if (isset($_GET["id"])) {
    $id = $_GET['id'];
	echo "Getting id dynamically";
}
$sql = "SELECT *FROM markers1 WHERE id = $id";
$result = mysql_query($sql);
//$result = mysql_query("SELECT *FROM markers1 WHERE id = $id");
//$result=mysq
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["product"] = array();
    
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["lat"] = $row["lat"];
        $product["lng"] = $row["lng"];
        // push single product into final response array
        array_push($response["product"], $product);
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
