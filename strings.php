<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="others.css"
</head>
<body>
    <?php
    $title = 'Powrót do strony głównej';
    ?>
    <h3> <a href="index.php"> <?php echo "$title";?> </a> </h3>
    <h5> zdefiniowanie i wyświetlenie stałej </h5>
    <?php
        define("DOBRA_RADA", 'Bez chleba, to się nie najesz.')
    ?>
    <?php
        print DOBRA_RADA;
    ?>
    <br>
    <hr>
    <h5> funkcja ' STRLEN ' </h5>
    <a> ilość znaków w zdaniu: </a>
    <?php
        print strlen(DOBRA_RADA);
        ?>
    <br>
    <hr>
    <h5> funkcja ' STR_WORD_COUNT '</h5>
    <a> ilość słów w zdaniu: </a>
    <?php
        print str_word_count(DOBRA_RADA);
        ?>
    <br>
    <hr>
    <h5> funkcja ' STRREV ' </h5>
    <?php
        print strrev(DOBRA_RADA);
        ?>
    <br>
    <hr>
    <h5> funkcja ' STRPOS ' </h5>
    <?php
        print strpos(DOBRA_RADA, "to")
        ?>
    <br>
    <hr>
    <h5> funkcja ' STR_REPLACE ' </h5>
        <a> zastąpienie słowa "chleba", słowem "mięsa":</a>
    <br>
    <?php
        print str_replace("chleba", "mięsa", DOBRA_RADA);
    ?>
    <br>
    <hr>
    <h5> funkcja ' STRTOLOWER '</h5>
    <?php
        print strtolower(DOBRA_RADA);
        ?>
    <br>
    <hr>
    <h5> funkcja ' STRTOUPPER ' </h5>
    <?php
        print strtoupper(DOBRA_RADA);
        ?>
    <br>
    <hr>
    <h5> funkcja ' UCWORDS ' </h5>
    <?php
        print ucwords(DOBRA_RADA);
    ?>
    <br>
    <hr>
    <h5> funkcja ' TRIM ' </h5>
    <?php
        print trim(DOBRA_RADA);
    ?>
    <br>
    <hr>
    <h5> funkcja ' STRSTR ' </h5>
    <?php
        print strstr(DOBRA_RADA, "nie", true)
    ?>
    <br>
    <hr>
    <h5> funkcja ' SUBSTR '</h5>
    <?php
        print substr(DOBRA_RADA, "10","5");
    ?>
    <br>
    <hr>
    <h5> funkcja ' STR_PAD ' </h5>
    <?php
        print str_pad(DOBRA_RADA, "36", " -_- ");
    ?>





</body>





</body>
</html>