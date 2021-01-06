<?php
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$id = $_POST['id'];
$response = array();
echo "Going to connect database";
//mysql_connect("mysql7.000webhost.com","a1716706_user","android@123") or  die(mysql_error());
mysql_connect("50.62.209.49:3306","appdeliverytrack","android@123") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
$result=mysql_query("insert into markers1(id,lat,lng) values ('$id','$lat','$lng')");		
if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Product successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}

mysql_close();
?>