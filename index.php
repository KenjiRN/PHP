<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro ficheiro PHP</title>
</head>
<body>

    <div>
        <?php
            $valor = $_GET["v"];
            
            $rq = sqrt($valor);
            echo "A raiz de $valor é igual a $rq";
        ?>
    </div>
    <a href="index.html">Voltar</a>
</body>
</html> 