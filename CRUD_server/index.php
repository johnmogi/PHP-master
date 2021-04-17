<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample CRUD php</title>
</head>
<body>
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
</body>
</html>