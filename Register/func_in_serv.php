<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost:127.0.0.1 ','root','Software Debugger');
if ($conn-> connect_error) {
  echo "conn-> connect_error";
  die("connection  failed: ".$conn->connect_error);
}else {
  $stmt = $conn->prepare("INSERT INTO `form1` (`name`,`email`,`password`) values(?,?,?)");
  $stmt-> bind_param("sss",$name,$email,$password);
  $execval = $stmt->execute();
  echo $execval;
  echo  "submitted";
  $stmt-> close();
  $conn-> close();
}
?>