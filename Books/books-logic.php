<?php
require_once ('./data-access-layer.php');
function getAllBooks() {
    $sql = "SELECT * FROM book";
    $books = select($sql);
    return $books;
}
?>