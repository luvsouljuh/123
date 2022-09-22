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
    <br>
    <hr>
    <h5> Dodawanie, odejmowanie, dzielenie, mnożenie oraz reszta dzielenia zmiennych </h5>
        <?php
            $x = 5;
            $y = 15;
            ?>
    <a> Dodawanie: $x + $y = </a>
    <?php
        echo $x + $y;
    ?>
    <br>
    <a> Odejmowanie: $x - $y =</a>
    <?php
        echo $x - $y;
        ?>
    <br>
    <a> Dzielenie: $x / $y = </a>
    <?php
        echo $x / $y;
        ?>
    <br>
    <a> Mnożenie: $x * $y = </a>
    <?php
        echo $x * $y;
        ?>
    <br>
    <a> Reszta z dzielenia zmiennych: $x % $y =</a>
    <?php
        echo $x % $y;
        ?>
    <br>
    <hr>
    <?php
        $a = 4;
        $b = 35;
    ?>
    <h5> Obliczenie pola i obwodu prostokąta </h5>
    <a> Obwód: </a>
    <?php
        echo ($a * 2) + ($b * 2)
    ?>
    <br>
    <a> Pole: </a>
    <?php
        echo $a * $b
    ?>
    <br>
    <hr>
    <h5> Funkcja "abs"  </h5>
    <p style="background-color: aliceblue"
        <?php
            echo abs(-2000)
        ?>
    <br>
    <hr>

    <h5> Funkcje "min" i "max" </h5>
    <p style="background-color: darkblue; color: aliceblue"> "min" dla zestawu liczb 0, 150, 30, 20, -8, -200 =
        <?php
            echo min(0, 150, 30, 20, -8, -200)
            ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> "max" dla zestawu liczb 0, 150, 30, 20, -8, -200 =
    <?php
        echo max(0, 150, 30, 20, -8, -200)
        ?>
    </p>
    <hr>
    <h5> Funkcja " pi " </h5>
    <p style="background-color: darkblue; color: aliceblue"> pi =
    <?php
        echo pi()
        ?>
    </p>
    <hr>
    <h5> Funkcja " round " dla liczb: </h5>
    <p style="background-color: darkblue; color: aliceblue"> 3,4 =
        <?php
            echo round(3.4)
        ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> 3,6 =
        <?php
        echo round(3.6)
        ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> 5,045 =
        <?php
        echo round(5.045,2)
        ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> 5,045 =
        <?php
        echo round(5.055,2)
        ?>
    </p>
    <hr>
    <h5> Funkcja " rand "  dla liczb z przedzialu od 900 do 1000</h5>
    <p style="background-color: darkblue; color: aliceblue">
        <?php
         echo rand(900,1000)
         ?>
    </p>
    <hr>
    <h5> Funkcja " sqrt " dla liczb:</h5>
    <p style="background-color: darkblue; color: aliceblue"> 0 =
        <?php
            echo sqrt(0)
        ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> 64 =
        <?php
        echo sqrt(64)
        ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> 256 =
        <?php
        echo sqrt(256)
        ?>
    </p>
    <p style="background-color: darkblue; color: aliceblue"> 65536 =
        <?php
        echo sqrt(65536)
        ?>
    </p>
    <hr>






    <h5> </h5>












</body>










</body


</body>
</html>
