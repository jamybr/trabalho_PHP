<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
    <h1>Código de verificação - Par ou Ímpar</h1>
    <!-- Código PHP -->
<form method="" action="">
    <input name="num" type="number">
    <button type="submit"> Enter </button>
</form>
    <?php
      if ((isset($_GET['num']))) {
        $num = $_GET['num'];
       }
    //Estrutura de decisão na linguagem PHP
      if ($num % 2 == 0){
        echo "O numero informado é PAR";
      }else{
        echo "O numero informado é Impar";
      }
     ?>
</body>
</html>