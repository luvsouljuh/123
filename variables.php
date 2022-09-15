<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Variables </title>
</head>
<body>
    <h5> string (ciąg znaków) </h5>
    <?php
        $ciag_znakow = 'ciąg znaków';
        ?>
    <?= $ciag_znakow ; ?>

    <hr>
    <h5> int (liczba całkowita) </h5>
    <?php
        $licza_całkowita= 212323232;
        ?>
    <?= $licza_całkowita ; ?>

    <hr>
    <h5> float (liczba zmiennoprzecinkowa) </h5>
    <?php
        $l_zmiennoprzecinkowa = 232323232.2323;
        ?>
    <?= $l_zmiennoprzecinkowa ; ?>

    <hr>

    <h5> boolean </h5>
    <?php
        $prawdafałsz = true;
        ?>
    <?= $prawdafałsz ; ?>
    <hr>
    <h5> wyświetlanie za pomocą echo/var_dump </h5>
    <?php
        echo $ciag_znakow;
        ?>
    <br>
    <br>
    <?php
        var_dump($licza_całkowita);
        ?>
    <br>
    <br>
    <?php
        echo $l_zmiennoprzecinkowa;
        ?>
    <br>
    <br>
    <?php
        var_dump($prawdafałsz);
        ?>
    <br>
    <hr>
    <h5> stała (define) </h5>
    <a> define("moj_numer", 2137)</a>
    <br>
    <br>
    <?php
        define("moj_numer", 2137);
        ?>
    <hr>
    <h5> wyświetlanie stałej za pomocą print i var_export </h5>
    <?php
        print moj_numer;
        ?>
    <br>
    <br>
    <?php
        var_export(moj_numer);
        ?>
    <hr>






</body>
</html>