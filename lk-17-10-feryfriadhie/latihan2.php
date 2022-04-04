<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Hitam Putih</title>

</head>
<body>
    <table border = "1px">

    <?php

    for($baris = 1; $baris <= 10; $baris++)
    {
        echo "<tr>";
        for($kolom = 1; $kolom <= 10; $kolom++)
        {
         $total = $baris+$kolom;
         if($total%2==0)
         {
            echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
         }else{
            echo "<td height=50px width=50px bgcolor=#000000></td>";
         } 
        }

        echo "</tr>";
    }

    ?>

    </table>
</body>
</html>