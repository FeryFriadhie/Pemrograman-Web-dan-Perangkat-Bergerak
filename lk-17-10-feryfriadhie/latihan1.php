<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan looping kolom</title>
</head>
<body>
    <table border = "1" cellpadding = "3" cellspacing = "0">
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>
            <!-- script php -->
        <?php

        for ($f = 1; $f <= 3; $f++)
        {
            echo "<tr>";
            for ($c = 1; $c <= 5; $c++)
        {

        echo "<td> kolom ke$c baris ke$f</td>";

        }
        
        echo "<tr>";
    }




      ?>  
    </table>
    
</body>
</html>