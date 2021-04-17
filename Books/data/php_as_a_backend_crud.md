// using books db (attached at root folder)

0. data-access-layer : <?php
function connect() {
    $connection = mysqli_connect("localhost", "root", "", "Books");
    if(mysqli_connect_errno($connection)) {
        $msg = "Error: " . mysqli_connect_error();
        die($msg);
    }
    return $connection;
}
function select($sql) {
    $connection = connect();
    $table = mysqli_query($connection, $sql);
    $row = mysqli_fetch_object($table);
    while($row) {
        $arr[] = $row;
        $row = mysqli_fetch_object($table);
    }
    mysqli_close($connection);
    return $arr;
}
?> 

0. books logic : <?php
require_once ('./data-access-layer.php');
function getAllBooks() {
    $sql = "SELECT * FROM book";
    $books = select($sql);
    return $books;
}
?>

0. books controller : <?php
require_once ('./books-logic.php');
switch($command) {
    case "getAllBooks":
        $books = getAllBooks();
        echo $books;
        break;    
}
?>


0. index.php :
// display a data table
//  fetch data into table in html:
<table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <!-- Template Engine: -->
                <?php
                    require_once './product_logic.php';
                    $books = getAllBooks();
                    foreach($books as $p) {
                        // print_r($p);
                    echo "<tr>" . 
                            "<td>" .
                                // "<a href='details.php?id=$p->id'>
                                $p->name
                                // </a>"
                                 .
                            "</td>" .
                            "<td>$p->price</td>" .
                            "<td>$p->stock</td>" .
                            "<td>" .
                                // "<button onclick='navigateToEdit($p->id)'>Edit</button>" .
                            "</td>" .
                            "<td>" .
                                // "<button onclick='navigateToDelete($p->id,\"$p->name\")'>Delete</button>" .
                            "</td>" .
                         "</tr>";
                    }
                ?>
            </tbody>
        </table>

0. simplify on a new sample crud base:
php crud to display: books
vanilla js
tallywind

books mysql db:
book table
bookID PK
bookName
price
category

authors table
authorID PK
bookID FK
authorName

INSERT INTO `book` (`bookID`, `bookName`, `price`, `category`) VALUES (NULL, 'The Lord Of The Rings', '89', 'Fantasy');

INSERT INTO `authors` (`authorID`, `bookID`, `authorName`, `birthdate`) VALUES (NULL, '1', 'J R R Tolkien', '1923-04-13');

inner join: https://www.w3schools.com/sql/sql_join_inner.asp
SELECT * FROM book INNER JOIN authors ON book.bookID = authors.bookID


0. addBook - book-logic.php: 
function addProduct($name, $price, $stock) {
 $sql = "INSERT INTO Products(ProductName, UnitPrice, UnitsInStock) " .
          "VALUES('$name', $price, $stock)";
    $id = insert($sql);
    return $id;
}
## got complex join table issues?
function addBook($bookName, $price, $category, $authorName, $birthDate) {
    $addBook = "INSERT INTO book(bookName, price, category) " .
             "VALUES('$bookName', $price, $category)";
             $addAuthor = "INSERT INTO authors(authorName, birthDate) " .
             "VALUES('$authorName', $birthDate)";
       $id = insert($addBook, $addAuthor );
       return $id;
   }

0. test