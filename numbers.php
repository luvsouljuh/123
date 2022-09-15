<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
    <link rel="stylesheet" href="others.css">
</head>
<body>
    <?php
    $title = 'Powrót do strony głównej';
    ?>
    <h3> <a href="index.php"> <?php echo "$title";?> </a> </h3>

    <?php
        $integer= 2137;
        ?>
    <?php
        $float= 21.37;
    ?>
    <h5> funkcja ' IS_INT ' i ' IS_FLOAT '</h5>
    <a> sprawdzenie dla zmiennej " $integer "</a>
    <br>
    <?php
        var_dump(is_int($integer));
    ?>
    <br>
    <a> sprawdzenie dla zmiennej " $float "</a>
    <br>
    <?php
        var_dump(is_int($float));
    ?>
    <br>
    <hr>
    <h5> funkcja 'IS_NUMERIC' </h5>
    <?php
        $dod= "59.85"+100;
    ?>
    <a> zastosowanie funkcji dla zmiennej: "59.85" + 100 </a>
    <br>
    <?php
        var_dump(is_numeric($dod));
        ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_INT_MAX '</h5>
    <?php
        echo PHP_INT_MAX;
    ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_INT_MIN ' </h5>
    <?php
        echo PHP_INT_MIN;
        ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_INT_SIZE ' </h5>
    <?php
        echo PHP_INT_SIZE;
        ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_FLOAT_MAX ' </h5>
    <?php
        echo PHP_FLOAT_MAX;
        ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_FLOAT_MIN ' </h5>
    <?php
        echo PHP_FLOAT_MIN;
        ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_FLOAT_DIG ' </h5>
    <?php
        echo PHP_FLOAT_DIG;
        ?>
    <br>
    <hr>
    <h5> funkcja ' PHP_FLOAT_EPSILON ' </h5>
        <?php
        echo PHP_FLOAT_EPSILON;
    ?>

</body>
</html>
