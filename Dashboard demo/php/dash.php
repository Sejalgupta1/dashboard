<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "phpadminpanel";


/ Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$query = "SELECT `Customer Name`, `Product Name`, `Quantity`, `Price` FROM `admin`  order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
  while ($product = mysqli_fetch_array($queryfire)){

    print_r($product);




  }

}
 
?>