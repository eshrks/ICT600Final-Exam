<?php
session_start();

include_once('../config/database.php');

$query1 = "SELECT * FROM users";
$query2 = "SELECT * FROM students";

if(mysqli_query($conn, $query1) && mysqli_query($conn, $query2)){
  $result1 = mysqli_query($conn, $query1);
  $result2 = mysqli_query($conn, $query2);

  // Use $result1 and $result2 as needed
} else {
  // Handle query errors
  echo "Error executing one of the queries: " . mysqli_error($conn);
}
?>
