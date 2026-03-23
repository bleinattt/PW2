<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exemplo.css">
    <title>Document</title>
</head>
<body>
    <h1>Dados de requisições GET e POST</h1>
    <?php
        if (isset($_GET["var1"]) && isset($_GET["var2"])) { // isset permite ver se a var existe dentro da memória
            $var1 = $_GET["var1"];
            $var2 = $_GET["var2"];
            echo "<p>O valor informado: {$var1}</p>\n";
            echo "<p>O valor informado: {$var2}</p>\n";
        }
    ?>
</body>
</html>