<?php
require_once ('./data-access-layer.php');
function getAllBooks() {
    $sql = "SELECT * FROM book";
    $books = select($sql);
    return $books;
}
function getAllBooksData() {
    $sql = "SELECT * FROM book INNER JOIN authors ON book.bookID = authors.bookID
    ";
    $data = select($sql);
    return $data;
}
function addBook($bookName, $price, $category, $authorName, $birthDate) {
    $addBook = "INSERT INTO book(bookName, price, category) " .
             "VALUES('$bookName', $price, $category)";
             $addAuthor = "INSERT INTO authors(authorName, birthDate) " .
             "VALUES('$authorName', $birthDate)";
       $id = insert($addBook, $addAuthor );
       return $id;
   }
