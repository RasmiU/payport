//MySQLi Procedural

<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="INNODB";

//create connection
$conn = mysqli_connect($servername,$username,$password);

//check connection
if (!$conn) {
  die("Connection Failed".mysqli_connect_error());
}
echo "Connected Sucessfully";

?>
