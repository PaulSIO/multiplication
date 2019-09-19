<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tables</title>
    </head>
    <body>
        <?php
        if(isset($_GET["multi"]))
        {
        
        
            for($i = 1; $i <= 10; $i++)
            {
                $x = $i * $_GET["multi"];
                echo "<p>".$i." x ".$_GET["multi"]." = ".$x."</p>";
            }
        }
        ?>
    </body>
</html>


