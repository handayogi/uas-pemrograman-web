<?php
include 'db_connection.php';
require_once 'product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'add') {
        $code = $_POST['code'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $browser = $_POST['browser'];
        $ip = $_POST['ip'];

        // Add Product
        echo Product::addProduct($conn, $code, $name, $category, $price, $browser, $ip);

    } elseif ($action === 'edit') {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];

        // Edit Product
        echo Product::editProduct($conn, $id, $code, $name, $category, $price);

    } elseif ($action === 'delete') {
        $id = $_POST['id'];

        // Delete Product
        echo Product::deleteProduct($conn, $id);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get All Products
    $products = Product::getAllProducts($conn);
    echo json_encode($products);
}
?>