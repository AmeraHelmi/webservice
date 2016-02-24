<?php  
$host="localhost"; //replace with database hostname 
$username="root"; //replace with database username 
$password="amera123"; //replace with database password 
$db_name="VAS"; //replace with database name
 
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name="nnnnona";
$code="123s";
 $sqll = "INSERT INTO `test` ( `name`, `code`) VALUES ('$name', '$code');";
 $qur = mysql_query($sqll);
$json = array();
$sql = "select * from test"; 
$result = mysql_query($sql);
 
if(mysql_num_rows($result)){
while($row=mysql_fetch_assoc($result)){
$json['test'][]=$row;
}
}
mysql_close($con);
echo json_encode($json); 
?>
