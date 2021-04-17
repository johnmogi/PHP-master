// using northwind db (attached at SERVER folder)

0. dal : <?php
function connect() {
    $connection = mysqli_connect("localhost", "root", "", "Northwind");
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

0. products logic : <?php
require_once ('./dal.php');
function getAllProducts() {
    $sql = "SELECT ProductID as id, ProductName as name, " . 
            "UnitPrice as price, UnitsInStock as stock " .
            "FROM Products";
    $products = select($sql);
    return $products;
}
?>

0. products controller : <?php
require_once './products-logic.php';
switch($command) {
    case "getAllProducts":
        $products = getAllProducts();
        echo $products;
        break;    
}
?>


0. index.php :
// display a data table
//  fetch data into table in html:
<table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <!-- Template Engine: -->
                <?php
                    require_once './product_logic.php';
                    $products = getAllProducts();
                    foreach($products as $p) {
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

