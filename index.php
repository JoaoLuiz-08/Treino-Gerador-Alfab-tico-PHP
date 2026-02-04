<!DOCTYPE html>
<html>

<body>

<form action="index.php" method="GET">

<label for="numero">Insira o número:</label>
<input type="text" id="numero" name="numero" required><br>

<input type="submit" value="Verificar"><br><br>
</form>
<?php

if (isset($_GET['numero'])){

    $numerophp = (int) $_GET['numero'];
    $alfabeto = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    if ($numerophp > 0){

        if ($numerophp > count($alfabeto)){
            $numerophp = count($alfabeto);
        }

        for ($i = 0; $i < $numerophp; $i++){
        echo $alfabeto[$i] . " ";
        
        }
    }else{
        echo "Digite um número maior que zero.";
    }
    
}

?>

</body>

</html>