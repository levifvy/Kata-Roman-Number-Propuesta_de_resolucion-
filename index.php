<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kata-roman-number</title>
</head>
<body>
    <h1><strong><center>Kata-Roman-Number</center></strong></h1>

    <h3><left>Ingressar un nombre sencer més gran que 0 i més petit que 4000 i el programa obtindrà el seu equivalent en nombre romà</left></h3>

    <form name="Romans" method="get" action="index.php">
        Ingressa un numero:<input type="text" name="vector" value=""><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

<?php

    $num = strval($_GET['vector']);
    
    echo integerChangeToRoman($num);
    
    function integerChangeToRoman($num) {
        $numRomans = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );
        $result = '';
        while ($num > 0 && $num < 4000) {
            foreach ($numRomans as $clau => $value) {
                if ($num >= $value) {
                    $num -= $value;
                    $result .= $clau;
                    break;
                }
            }
        }
        return $result;
    }
    
?>

</body>
</html>