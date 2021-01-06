<?php
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$id = $_POST['id'];

echo "Going to connect database";
mysql_connect("50.62.209.49:3306","appdeliverytrack","android@123") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
$markers=mysql_query("insert into markers1(id,lat,lng) values ('$id','$lat','$lng')");		
mysql_close();
?>