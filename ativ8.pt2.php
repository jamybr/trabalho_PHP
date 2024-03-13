<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número redondo</title>
</head>
<body>
<form method="" action="">
        <input name="num" type="number">
        <button type="submit"> Enter </button>
    </form>
 
    <?php
//Criar um código para verificar se o número é redondo ou não

    function numeroRedondo($numero) {
        if ($numero % 1 === 0) {
            return true; // É redondo
        } else {
            return false; // Não é redondo
        }
    }
    // Teste da função

    $num = 10;
    if (numeroRedondo($num)) {
        echo "$num é um número redondo.";
    } else {
        echo "$num não é um número redondo.";
    }
    ?>
</body>
</html>