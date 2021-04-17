<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Details</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Product Details: </h1>
        <?php
            require_once './products-logic.php';
            $id = $_GET["id"];
            $p = getOneProduct($id);
            echo "<h3>Name: $p->name</h3>";
            echo "<h3>Price: $p->price</h3>";
            echo "<h3>Stock: $p->stock</h3>";
        ?>
        <br>
        <a href="index.php">Back to List</a>
    </body>
</html>
