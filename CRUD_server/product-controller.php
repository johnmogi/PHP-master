<?php

require_once './products-logic.php';

switch($command) {

    case "getAllProducts":
        $products = getAllProducts();
        echo $products;
        break;
        
}

?>