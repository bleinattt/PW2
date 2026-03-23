<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/exemplo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Variáveis e constantes PHP</h1>
    <?php
    include "Fruta.php";
    // include_once"Fruta.php";
    // require_once"Fruta.php";
    // require "Fruta.php";
    //Variável
    /*

    */
    $a = 4; //int
    $b = 0.0; //float
    $c = ""; //string
    $d = ''; //string
    $e = null; //null
    $teste = false; //bool
    
    //Constante
    define("MINHA_CONST", value: "teste");
    const TESTE = "valor";

    //Escrevendo na tela
    echo "<p>O valor de a é " . $a . "</p>";
    echo "\t<p>O valor de b é $b</p>\n";
    print "<p>O valor de a + b é " . ($a + $b) . "</p>";
    echo "O valor de " . TESTE;

    //Objeto DateTime
    $d = new DateTime(
        "now",
        new DateTimeZone("America/Sao_Paulo")
    );
    echo "\t<p>A data e hora atual é: {$d->format("d/m/y - H:i:s")}</p>\n";

    ?>
    <hr>

    <h1>Estruturas de decisão</h1>
    <h2 class="text-primary">IF</h2>
    <code>
        if ($a > $b) {<br>
            echo "Deu verdadeiro";
        }<br> else if ($a == $c && $b < $c) {<br>
            echo "A é igual a C";
        }
    </code>

    <?php
    if ($a > $b) {
        echo "\t<p>Deu verdadeiro</p>";
    } else if ($a == $c && $b < $c) {
        echo "\t<p>A é igual a C</p>";
    }
    ?>

    <h2 class="text-primary">Switch</h2>
    <?php
    $a = 9;
    switch ($a) {
        case 1:
            echo "\t<p>O valor é 1!</p>\n";
            break;

        case 2:
            echo "\t<p>O valor é 2!</p>\n";
            break;
        case 3:
            echo "\t<p>O valor é 3!</p>\n";
            break;
        case 4:
            echo "\t<p>O valor é 4!</p>\n";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
            echo "\t<p>O valor esta entre 5 e 8!</p>\n";
            echo "\t<p>Confira o valor!</p>\n";
            break;
        default:
            echo "\t<p>O valor não esta entre 1 e 8!</p>\n";
            break;
    }
    ?>
    <hr>
    <h1>Estruturas de repetição</h1>
    <h2 class="text-primary">Do...While</h2>
    <?php
    $i = 0;
    do {
        echo "\t<p>O valor de \$i é $i</p>\n";
        $i++;
        if ($i == 6) {
            break;
        }
    } while ($i <= 10);
    ?>
    <hr>
    <h2 class="text-primary">Foreach</h2>
    <?php
    $vet = ["Thur", "Pedreiro", "15998336415"];
    $vet2 = array("Zeca", "Pedreiro", "15998336415");
    $vet2[] = "Itu";
    array_push($vet2, "SP", "11998336415");

    foreach ($vet as $value) {
        echo "\t<p>O valor atual é  $value</p>\n";
    }
    ?>

    <hr>

    <h2 class="text-primary">For com valor indexado</h2>
    <?php
    for ($i = 0; $i < count($vet2); $i++) {
        echo "\t<p>O valor da " . $i + 1 .
            "ª posição do vetor \$vet2 é {$vet2[$i]}</p>\n";
    }
    ?>

    <hr>

    <h2 class="text-primary">Foreach com vetor associativo</h2>
    <?php
    $vet_assoc = ["id" => "1", "nome" => "Tião", "telefone" => "15998336419"];
    foreach ($vet_assoc as $key => $value) {
        echo "\t<p>O valor de $key do vetor \$vet_assoc é $value</p>\n";
    }
    echo "\t<p>O valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
    ?>

    <hr>

    <h2 class="text-primary">Foreach com vetor associativo</h2>
    <?php
    $vet_assoc = ["id" => "1", "nome" => "Tião", "telefone" => "15998336419"];
    foreach ($vet_assoc as $key => $value) {
        echo "\t<p>O valor de $key do vetor \$vet_assoc é $value</p>\n";
    }
    echo "\t<p>O valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
    ?>

    <hr>

    <h2 class="text-primary">For com vetor bidimensional</h2>
    <?php
    $cars = [

        ["Volvo", 22, 18],
        ["BMW", 15, 13],
        ["Saab", 5, 2],
        ["Land Rover", 17, 15],
        123
    ];
    echo "\t<p>O valor avulso de \$cars é {$cars["1"]["1"]}</p>\n";
    $vet_assoc = ["id" => "1", "nome" => "Tião", "telefone" => "15998336419"];
    for ($i = 0; $i < count($cars); $i++) {
        if (is_array($cars[$i])) {
            for ($j = 0; $j < count($cars[$i]); $j++) {
                echo "\t<p>O valor da posição $i do vetor \$cars na posição $j é {$cars["$i"]["$j"]}</p>\n";
            }
        } else {
            echo "\t<p>O valor da posição $i do vetor \$cars é {$cars[$i]}</p>\n";
        }
    }
    ?>
    <h2 class="text-primary">Foreach com vetor objetos</h2>
    <?php
    $fruta1 = new Fruta("mamão", "laranja");
    $fruta2 = new Fruta("mamão", "laranja");
    $vet_frutas = [$fruta1, $fruta2];
    foreach ($vet_frutas as $obj) {
        echo "\t<p>{$obj->__tostring()}</p>\n";
    }
    echo "\t<p>O valor avulso de \$fruta2 é {$fruta1->getNome()}</p>\n";
    echo "\t<p>O valor avulso de \$vet_frutas é {$vet_frutas[0]->getNome()}</p>\n";
    ?>
    <h2>Global $_SERVER</h2>
    <?php
    echo "<p>{$_SERVER['PHP_SELF']}</p>\n";
    echo "<p>{$_SERVER['HTTP_HOST']}</p>\n";
    echo "<p>{$_SERVER['HTTP_REFERER']}</p>\n";
    echo "<p>{$_SERVER['HTTP_USER_AGENT']}</p>\n";
    echo "<p>{$_SERVER['SCRIPT_NAME']}</p>\n";
    ?>

    <h2>Global $_GET</h2>
    <a href="dados.php?var1=lalala&var2=24243">Exemplo requisição GET</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>