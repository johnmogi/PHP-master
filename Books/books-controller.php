<?php
require_once ('./books-logic.php');
switch($command) {
    case "getAllBooks":
        $books = getAllBooks();
        echo $books;
        break;    
}
?>