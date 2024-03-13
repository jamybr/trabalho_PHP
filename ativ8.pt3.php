<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números positivos, negativos e neutros</title>
</head>
<body>
<form method="" action="">
        <input name="num" type="number">
        <button type="submit"> Enter </button>
</form>
<?php
//Criar um código para verificar se o número é positivo, negativo é neutro (zero).
 
   if ((isset($_GET['num']))) {
    $num = $_GET['num'];
 
   if ($num > 0)
    printf("O número   $num  é positivo.", $num);
   else if ($num < 0)
    printf("O número $num  é negativo.", $num);
   else if ($num == 0)
    printf("O número é considerado neutro.", $num);
 
   return 0;
 }
?>
</body>
</html>