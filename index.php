<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $text = $_GET ['testo']
    ?>

    <h1>Il testo è:</h1> 
    <h3><?="${text}"?></h3>
    <span> NUMERO CARATTERI: </span><h1><?= mb_strlen ($text) ?></h1>

    <form  method="GET" action="">
        <label for="testo">Testo</label>
        <input type="text" id="testo" name="testo">
        <button>Pusha tetso</button>
    </form>

    <hr>



    <?php
        $testo1 = "STO SCRIVENDO (PALLA) DEL TESTO TOTALMETE (PALLA)RANDOMICO PERCHE' NON SO CHE (PALLA)CAVOLICCHIO SCRIVERE (PALLA)";
        $parola = $_GET ['parola'];
    ?>

    <h1>Il testo è:</h1> 
    <h3><?="${testo1}"?></h3>
    <h1> NUMERO CARATTERI: <span><?= mb_strlen ($testo1) ?></span></h1>
    <?= str_replace(${parola},"***",${testo1}) ?>

    <form  method="GET" action="">
        <label for="parola">Testo</label>
        <input type="parola" id="parola" name="parola">
        <button>Pusha tetso</button>
    </form>

</body>
</html>