<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite</title>
</head>
<body>
    <h1>no</h1>
    <?php
    
    if(isset ($idUsuario))
        {
            echo $idUsuario;
        }
    else{
        echo "muerte";
    }

    ?> 
</body>
</html>