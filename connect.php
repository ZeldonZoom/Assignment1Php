<?php

$servername="localhost";
$username="root";
$password="";
$dbname="dbarnav";


$conn=mysqli_connect($servername,$username,$password, $dbname);

if(!$conn){
    die("Sorry failed to connect".mysqli_connect_error());
}

else{
    echo "Connection is successful";
}



$student_name=$_GET["student"];
$father_name=$_GET["father"];
$mother_name=$_GET["mother"];
$age=$_GET["age"];

$sql="INSERT INTO `studentinfo` (StudentName, FatherName, MotherName, Age)
VALUES ($student_name, $father_name, $mother_name, $age)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>