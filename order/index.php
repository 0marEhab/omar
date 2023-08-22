<?php



$connection = mysqli_connect("127.0.0.1", "root", "", "ecommerce");


$mysql = "SELECT * FROM order_create ";
// $sql = "SELECT id FROM product_create WHERE id='$id' ";
$result = mysqli_query($connection, $mysql);

$records = [];
for($i = 0; $i < mysqli_num_rows($result); $i++) {
    $records[] = mysqli_fetch_assoc($result);
}


foreach($records as $order) {
    $id = $order['id'];
    $name = $order['name_id'];
    echo "<p>$id) $name </p>";
}