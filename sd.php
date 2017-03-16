<?php
$db_name = "androiddb";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);

//$user_name = $_POST["user_name"];
//$user_pass = $_POST["password"];
//$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$mysql_qry = "select * from member";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "login success !!!!! Welcome user";
}
else {
echo "login not success";
}

?>
