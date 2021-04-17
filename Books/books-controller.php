<?php
require_once ('./books-logic.php');
switch($command) {
    case "getAllBooks":
        $books = getAllBooks();
        echo $books;
        break;   

        case "addBook":
            $bookName = $_POST["bookName"];
            $price = $_POST["price"];
            $category = $_POST["category"];
            $authorName = $_POST["authorName"];
            $birthdate = $_POST["birthdate"];
            $id = addBook($bookName, $price, $category, $authorName, $birthdate);
             // header("location: thanks.php");
            break; 
}
?>