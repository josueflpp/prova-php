<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Prova PHP</title>
</head>

<body>

    <?php

    $tabuada = 0;
    if (isset($_POST["tabu"])) {
        
        $tabuada = $_POST["tabu"];
        if (!is_numeric($tabuada)) {
            echo "<br>O valor informado não é um número.<br>";
        } else {
           
            $num = 0;
            while ($num <= 10) {
                echo $num ." x " . $tabuada . " = " . ($num * $tabuada) . "<br>";
                $num++;
            }
        }
    }

    ?>

    <form method="post">
        <input type="text" name="tabu">
        <input type="submit">
    </form>

</body>

</html>