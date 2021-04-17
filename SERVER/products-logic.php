<?php

require_once './dal.php';

function addProduct($name, $price, $stock) {
 $sql = "INSERT INTO Products(ProductName, UnitPrice, UnitsInStock) " .
          "VALUES('$name', $price, $stock)";
    $id = insert($sql);
    return $id;
}

function updateProduct($id, $name, $price, $stock) {
    
    $sql = "UPDATE Products SET " . 
            "ProductName='$name', UnitPrice=$price, " .
            "UnitsInStock=$stock WHERE ProductID=$id";
    
    $affectedRows = update($sql);
    
    return $affectedRows;
}

function deleteProduct($id) {
    $sql = "DELETE FROM Products WHERE ProductID=$id";
    $affectedRows = delete($sql);
    return $affectedRows;
}

function getAllProducts() {
    $sql = "SELECT ProductID as id, ProductName as name, " . 
            "UnitPrice as price, UnitsInStock as stock " .
            "FROM Products";
    $products = select($sql);
    return $products;
}

function getOneProduct($id) {
    $sql = "SELECT ProductID as id, ProductName as name, " . 
            "UnitPrice as price, UnitsInStock as stock " .
            "FROM Products WHERE ProductID=$id";
    $products = select($sql);
    return $products[0];
}






