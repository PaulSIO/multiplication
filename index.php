<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Table de multiplication :</h2>
        <?php
            for ($i=1; $i < 11; $i++) 
            {
                ?>
                    <p><a href="table.php?multi=<?php echo $i?>">Table de <?php echo $i?></a></p>
                <?php
            }
        ?>
</body>
</html>