<?php
require_once 'product.php';
require_once 'db_connection.php';  // Include database connection

// Creating a Product instance
$product = new Product("P001", "Smartphone", "Electronics", 3000000);

// Display Product Details
$productDetails = $product->displayProduct();
echo "Product Details: <br>";
echo "Code: " . $productDetails["code"] . "<br>";
echo "Name: " . $productDetails["name"] . "<br>";
echo "Category: " . $productDetails["category"] . "<br>";
echo "Price: Rp. " . $productDetails["price"] . "<br>";

// Update Product Price
$newPrice = 3500000;
$product->updatePrice($newPrice);

// Display Updated Product Details
$updatedDetails = $product->displayProduct();
echo "<br>Updated Product Details: <br>";
echo "Code: " . $updatedDetails["code"] . "<br>";
echo "Name: " . $updatedDetails["name"] . "<br>";
echo "Category: " . $updatedDetails["category"] . "<br>";
echo "Price: Rp. " . $updatedDetails["price"] . "<br>";
?>