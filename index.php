<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
</head>
<body>
    <h1>Array con Imagenes</h1>
    <table>
        <tr>
            <?php
            $array["rosa"] = "img/rosa.jpg";
            $array ["cactus"] ="img/cactus.jpg";    
            $array["margarita"]="img/margarita.jpg";
            
            foreach(){
                
            }
            echo "<td><img src =".$array["rosa"]."></td>";
            echo "<td><img src =".$array["cactus"]."></td>";
            echo "<td><img src =".$array["margarita"]."></td>";
            ?>
        </tr>
    </table>
</body>
</html>