<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Northwind</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="index.js"></script>
    </head>
    <body>
        
        <h1>Northwind Website</h1>
        <hr>

        <section>
            <h1>Add Product: </h1>

            <form action="products-controller.php" method="post">

                <input type="text" placeholder="Name..." name="name">
                <br><br>

                <input type="number" step="0.01" placeholder="Price..." name="price">
                <br><br>

                <input type="number" placeholder="Stock..." name="stock">
                <br><br>

                <input type="hidden" name="command" value="addProduct">

                <button>Add Product</button>
            </form>

        </section>

<!--        <section>
            <h1>Update Product: </h1>

            <form action="products-controller.php" method="post">

                <input type="number" placeholder="ID..." name="id">
                <br><br>

                <input type="text" placeholder="Name..." name="name">
                <br><br>

                <input type="number" step="0.01" placeholder="Price..." name="price">
                <br><br>

                <input type="number" placeholder="Stock..." name="stock">
                <br><br>

                <input type="hidden" name="command" value="updateProduct">

                <button>Update Product</button>
            </form>

        </section>

        <section>
            <h1>Delete Product: </h1>

            <form action="products-controller.php" method="post">

                <input type="number" placeholder="ID..." name="id">
                <br><br>

                <input type="hidden" name="command" value="deleteProduct">

                <button>Delete Product</button>
            </form>
        </section>-->
        
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
                    require_once './products-logic.php';
                    $products = getAllProducts();
                    foreach($products as $p) {
                        // print_r($p);
                    echo "<tr>" . 
                            "<td>" .
                                "<a href='details.php?id=$p->id'>$p->name</a>" .
                            "</td>" .
                            "<td>$p->price</td>" .
                            "<td>$p->stock</td>" .
                            "<td>" .
                                "<button onclick='navigateToEdit($p->id)'>Edit</button>" .
                            "</td>" .
                            "<td>" .
                                "<button onclick='navigateToDelete($p->id,\"$p->name\")'>Delete</button>" .
                            "</td>" .
                         "</tr>";
                    }
                ?>
            </tbody>
        </table>
        
    </body>
</html>
