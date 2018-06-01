<?php
//getting data from database
$conn = mysqli_connect('localhost', 'root', '24Strawberry', 'shop');

//getting data from products
$result = mysqli_query($conn, "SELECT * FROM products");

//storying in array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

//returning response in JSON format
echo json_encode($data);

 ?>
