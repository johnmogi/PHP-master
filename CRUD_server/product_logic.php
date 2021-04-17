<?php

require_once ('./dal.php');

function getAllProducts() {
    $sql = "SELECT ProductID as id, ProductName as name, " . 
            "UnitPrice as price, UnitsInStock as stock " .
            "FROM Products";
    $products = select($sql);
    return $products;
}

?>