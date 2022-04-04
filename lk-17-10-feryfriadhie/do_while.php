<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur perulangan dengan do...while</title>
</head>
<body>
            <?php

            $i = 1;
            do{
                echo "Ini juga pengulangan yang ke-$i<br>";
                $i++;
            }
            while ($i <= 6);

            ?>

            
</body>
</html>