<?php
    require_once './products-logic.php';
    $id = $_GET["id"];
    $p = getOneProduct($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Edit Product: </h1>
        

        <form action="products-controller.php" method="post">

            <input type="hidden" name="id" value="<?php echo $p->id; ?>">
            <br><br>

            <input type="text" placeholder="Name..." name="name" value="<?php echo $p->name; ?>">
            <br><br>

            <input type="number" step="0.0001" placeholder="Price..." name="price" value="<?php echo $p->price; ?>">
            <br><br>

            <input type="number" placeholder="Stock..." name="stock" value="<?php echo $p->stock; ?>">
            <br><br>

            <input type="hidden" name="command" value="updateProduct">

            <button>Update Product</button>
        </form>
    </body>
</html>
