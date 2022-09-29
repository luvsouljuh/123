<!doctype html>
<html lang="en">
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
<h3><a href="index.php"> <?php echo "$title"; ?> </a></h3>

<h5> Tablice indeksowalne: </h5>
<?php
    $modele_merc = array("Klasa G", "Klasa C", "Klasa A");
    $modele_ford = array("Fiesta", "Focus", "Kuga");

    echo "<p> Przykładowe modele fordów: "
        . $modele_ford[0] . ", "
        . $modele_ford[1] . ", "
        . $modele_ford[2] . "</p>";
    echo "<p> Przykładowe serie mercedesa: "
        . $modele_merc[0] . ", "
        . $modele_merc[1] . ", "
        . $modele_merc[2] . "</p>"
?>
<hr>
<h5> Pętla wyświetlająca elementy tablicy: </h5>
<a> Serie mercedesa wypisane w tablicy: </a> <br>
<?php
    $size = count($modele_merc);

    for ($x = 0; $x < $size ; $x++)
    {
        echo $modele_merc[$x] . "<br>";
    }
?>
<hr>
<h5> Tablice asocjacyjne: </h5>
<?php
    $klub21 = array("x"=>2018, "juice"=>2019, "peep"=>2017);

    echo "<p> peep umarł w wieku 21 lat w roku: "
    . $klub21["peep"] . " ";
    echo "<p> x umarł w wieku 21 lat w roku: "
    . $klub21["x"] . "</p>";
    echo "<p> juice umarł w wieku 21 lat w roku: "
    . $klub21["juice"] . "</p>";
?>
<img style="height: 150px; width: 400px" src="https://i1.sndcdn.com/artworks-Ws4DoClJFrY01GOs-85621A-t500x500.jpg">
<hr>

<h5> Wyświetlanie wszystkich elementów tablicy za pomocą pętli ' foreach '  </h5>
<a> Przykładowe serie mercedesa: </a>
<?php
    foreach($modele_merc as $marka => $model)
    {
        echo "Marka: " . $marka . ", model: " . $model . "<br>";
    }
?>
<hr>
<h5> Wyświetlanie tablicy za pomocą " print_r "</h5>
<pre>
    <?php
        print_r($modele_merc);
        print_r($modele_ford);
    ?>
</pre>
<h5> Tworzenie tablicy i wypełnianie jej przy pomocy funkcji " array_fill " </h5>
<pre>
<?php
    $owoce = array_fill(8,5,"mango");
    print_r ($owoce);
    ?>
</pre>
<h5> Tworzenie tablicy za pomocą funkcji " range " i wypełnianie na różne sposoby:  </h5>
<a> Tablica wypełniona liczbami parzystymi od 0 do 12 : <br> <br></a>
<pre>
<?php
    $parzyste = range(0, 12, 2);
    print_r($parzyste);
?>
</pre>
<hr>
<a> Tablica wypełniona liczbami od -10 do 100 z krokiem 10: <br><br></a>
<pre>
<?php
    $dziesiatki = range(-10,100,10);
    print_r($parzyste)
?>
</pre>
<hr>
<a> Tablica wypełniona liczbami od -5,5 do 5,5 z krokiem 0,5 <br><br></a>
<pre>
<?php
    $połowki = range(-5.5,5.5,0.5);
    print_r($połowki)
?>
</pre>
<hr>
<a> Tablica wypełniona literami od " m " do " u "<br><br> </a>
<pre>
<?php
    $litery_od_em = range("m","u");
    print_r($litery_od_em)
?>
</pre>
<hr>
<a> Tablica wypełniona literami od " X " do " E " <br><br></a>
<pre>
<?php
    $litery_wstecz = range("X", "E");
    print_r($litery_wstecz)
?>
</pre>













</body>
</html>