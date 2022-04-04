<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur perulangan dengan foreach</title>
</head>
<body>
            <?php

            $a = array("Surakarta", "Jakarta", "Yogyakarta");
            foreach ($a as $data)
            {
                echo "$data <br>";
            }

            ?>
</body>
</html>