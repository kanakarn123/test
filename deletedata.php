<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'jaootest.mysql.database.azure.com', 'kanakarn@jaootest', 'Jaoo01062544', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}

$product = $_POST['product'];
$price = $_POST['price'];


$sql = "DELETE FROM guestbook WHERE Name='$product'";

if (mysqli_query($conn, $sql)) {
  header("Location: showdata.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>