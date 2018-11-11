<?php require("../include/connection.php");

//create database
$sql = "CREATE DATABASE payport";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


// create tables

$tnameo="student";
$sqlo = "CREATE TABLE IF NOT EXISTS $tnameo (
  reg_no CHAR(10) NOT NULL ,
  pswd VARCHAR(20) NOT NULL,
  name VARCHAR(30) NOT NULL,
  sem INT NOT NULL,
  dept VARCHAR(30) NOT NULL,
  paystatus TINYINT NOT NULL,
  PRIMARY KEY (reg_no,pswd)
)ENGINE=INNODB";

if (mysqli_query($conn, $sql)) {
    echo "Table $tnameo created successfully";
} else {
    echo "Error creating table $tnameo : " . mysqli_error($conn);
}



$tnamet="staff";
$sqlt = "CREATE TABLE IF NOT EXISTS $tnamet (
  staff_id CHAR(10) NOT NULL,
  pswd VARCHAR(20) NOT NULL ,
  name VARCHAR(30) NOT NULL,
  cat VARCHAR(15) NOT NULL,
  dept VARCHAR (30),
  amt INT ,
  paystatus TINYINT NOT NULL,
  PRIMARY KEY (staff_id,pswd)
) ENGINE=INNODB";

if (mysqli_query($conn, $sqlt)) {
    echo "Table $tnamet created successfully";
} else {
    echo "Error creating table $tnamet : " . mysqli_error($conn);
}

$tnameth="amount";
$sqlth = "CREATE TABLE IF NOT EXISTS $tnameth (
  reg_no CHAR(10) NOT NULL,
  lib_fine INT,
  fee INT ,
  PRIMARY KEY (reg_no)
)ENGINE=INNODB";

if (mysqli_query($conn, $sqlth)) {
    echo "Table $tnameo created successfully";
} else {
    echo "Error creating table $tnameo : " . mysqli_error($conn);
}

mysqli_close($conn);
?>















