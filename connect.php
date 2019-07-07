<?php
$name = $_GET['name'];
$color3 = $_GET['color3'];
/* $name = filter_input(INPUT_POST, 'name');*/
 /*$color3 = filter_input(INPUT_POST, 'color3');*/
 if (!empty($name)){
if (!empty($color3)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "movement";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO markers (name, color3)
values ('$name','$color3')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>