<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="others.css">
</head>
<body>
<?php
$losowa = rand(1, 30)
?>

<h2 style="text-align: center; color: darkorchid"> Losowa liczba od 1 do 30:
    <?php
    echo $losowa
    ?>
</h2>
<h4 style="text-align: center; color: magenta">
    <?php
    if ($losowa >= 20) {
        echo('Liczba losowa jest większa lub równa 20');
    } else
        echo('Liczba jest mniejsza od 20');
    ?>

</h4>
<h4 style="color: navy; text-align: center">
    <?php
    if ($losowa % 2 == 0) {
        echo('Liczba jest parzysta');
    } else echo('Liczba jest nieparzysta');
    ?>
</h4>
<h4 style="color: deeppink; text-align: center">
    <?php
    if ($losowa <= 10) {
        echo('Ta liczba należy do pierwszej dziesiątki');
    } else if ($losowa <= 20) {
        echo('Ta liczba należy do drugiej dziesiątki');
    } else echo('Ta liczba należy do trzeciej dziesiątki');
    ?>
</h4>
<hr>
<h1 style="border-style: solid; border-width: 4px; text-align: center; "> Miesiąc:
    <?php
    $miesiac = rand(1, 15);
    echo $miesiac;
    ?>
    ,
    <?php
    switch ($miesiac) {
        case 1:
        case 2:
        case 3:
            echo('Kwartał I');
     break;
        case 4:
        case 5:
        case 6:
            echo('Kwartał II');
     break;
        case 7:
        case 8:
        case 9:
            echo('Kwartał III');
     break;

        case 10:
        case 11:
        case 12:
            echo('Kwartał IV');
        default:
            echo('Błędny numer miesiąca');
    }


    ?>
</h1>


</body>
</html>