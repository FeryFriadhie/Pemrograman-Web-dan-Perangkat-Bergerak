<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur pengulangan dengan while</title>
</head>
<body>
            <?php

            $i = 1;
            while ($i <= 6)
            {
                echo "<h$i>Ini adalah contoh heading $i</h$i>", $i++;
            }

            ?>
</body>
</html>