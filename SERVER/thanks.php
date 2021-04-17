<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="3; URL='index.php'" />
        <title>Thanks</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Done.</h1>
        
        <?php
            session_start();
            
            if(isset($_SESSION["lastCommands"])) {
                $lastCommands = $_SESSION["lastCommands"];
                echo "Last Commands:<br>" . $lastCommands;
            }
        ?>
        
    </body>
</html>
