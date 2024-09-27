<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Imagenes</title>
</head>
<body>
    <h1>Array con Imagenes</h1>
    <div>
        <table>
            <tr>
                <th colspan="3">Crea un array que guarde la url de una imagen y el nombre asociado a esa imagen</th>
            </tr>
            <tr>
                <?php
                $array["rosa"] = "rosa.jpg";
                $array ["cactus"] ="cactus.jpg";    
                $array["margarita"]="margarita.jpg";
                //var_dump($array);
                foreach($array as $i => $valor){
                    echo "<td>
                            <figure>
                            <img src ='img/".$valor."'>
                            <figcaption>".$i."</figcaption>
                        </td>";
                }
                ?>
            </tr>
        </table>
     </div>
</body>
</html>