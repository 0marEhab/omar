<?php


$connection = mysqli_connect("127.0.0.1", "root", "", "ecommerce");

$mysql = "SELECT id,name,count_in_stock FROM product_create";
$result = mysqli_query($connection, $mysql);


echo "<h2>Products</h2>";
echo "<p class=link><a href='create.php' >Create</a></p>";

$records = [];
for($i = 0; $i < mysqli_num_rows($result); $i++) {
    $records[] = mysqli_fetch_assoc($result);
}


foreach($records as $product) {
    $id = $product['id'];
    $name = $product['name'];
    echo "<p>$id) $name <a href='details.php?id=$id'>details</a> || <a href='../order/create.php?id=$id'>Add to cart</a></p>";
}