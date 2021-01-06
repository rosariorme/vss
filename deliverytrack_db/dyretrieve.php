<?php


$markers = array();

echo "Going to connect database";
mysql_connect("50.62.209.49:3306","appdeliverytrack","android@123") or  die(mysql_error());
//mysql_connect("mysql7.000webhost.com","a1716706_user","android@123") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
$sql = ;
$result = mysql_query("select lat,lng from markers1 where $id='9968581085'");

if($result){
	while($row=$result->fetch_assoc()){
                $lat = $row['lat'];
	        $lng = $row['lng'];
                $data= array("lat"=>$lat,"lng"=>$lng);
                $marker[] = $data;
	}

        $markers = array("markers"=>$marker);

        echo json_encode($markers);
}


?>

