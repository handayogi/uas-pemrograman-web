<?php

class Product {
    private $productCode;
    private $productName;
    private $productCategory;
    private $productPrice;

    // Constructor
    public function __construct($code, $name, $category, $price) {
        $this->productCode = $code;
        $this->productName = $name;
        $this->productCategory = $category;
        $this->productPrice = $price;
    }

    // Method to display product details
    public function displayProduct() {
        return [
            "code" => $this->productCode,
            "name" => $this->productName,
            "category" => $this->productCategory,
            "price" => $this->productPrice
        ];
    }

    // Method to update the product price
    public function updatePrice($newPrice) {
        $this->productPrice = $newPrice;
    }

    // Database interaction methods (Add, Edit, Delete)
    public static function addProduct($conn, $code, $name, $category, $price, $browser, $ip) {
        $stmt = $conn->prepare("INSERT INTO products (product_code, product_name, product_category, product_price, browser, ip_address) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $code, $name, $category, $price, $browser, $ip);
        $stmt->execute();
        $stmt->close();
        return "Product added successfully!";
    }

    public static function editProduct($conn, $id, $code, $name, $category, $price) {
        $stmt = $conn->prepare("UPDATE products SET product_code = ?, product_name = ?, product_category = ?, product_price = ? WHERE id = ?");
        $stmt->bind_param("sssii", $code, $name, $category, $price, $id);
        $stmt->execute();
        $stmt->close();
        return "Product updated successfully!";
    }

    public static function deleteProduct($conn, $id) {
        $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        return "Product deleted successfully!";
    }

    public static function getAllProducts($conn) {
        $result = $conn->query("SELECT id, product_code, product_name, product_category, product_price FROM products");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>