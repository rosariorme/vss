<?php
$name = $_POST['id'];
$designation=$_POST['id1'];
$credit =$_POST['id2'];
$debit=$_POST['id3'];
$balance=$_POST['id4'];
echo "Going to connect database";
mysql_connect("50.62.209.49:3306","appdeliverytrack","android@123") or  die(mysql_error());
//mysql_connect("mysql7.000webhost.com","a1716706_user","android@123") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
//mysql_select_db("a1716706_latlng");
$markers=mysql_query("insert into agent_account(agent_name,agent_designation,agent_credit,agent_debit,agent_balance	) values 
('$name','$designation','$credit','$debit','$balance')");		
mysql_close();
?>