<!doctype html>
<html lang="pl">
<head>
    <title></title>
    <link rel="stylesheet" href="others.css">
</head>
<body>
<a href="index.php">Strona główna</a>
<hr>

<ol type="i">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        ?>
        <li>To jest <?= $i ?>. element liczby</li>
        <?php
    }
    ?>
</ol>
<hr>
<br>
<table style="border: 1px solid blueviolet; border-collapse: collapse;padding: 15px;">
    <tr>
        <?php
        $arr = str_split('Witaj swiecie!');
        foreach($arr as $value) {
            ?>
            <td style="border: 1px solid blueviolet; border-collapse: collapse;padding: 15px;"><?= $value ?></td>
            <?php
        }
        ?>
    </tr>
</table>
<br>
<hr>
<br>
<table style="border: 1px solid gray; border-collapse: collapse;">
    <?php
    $i = 0;
    while ($i < 5) {
        $i++;
        ?>
        <tr>
            <td style="border: 1px solid gray; background-color: lightgray; padding: 10px;">To jest wiersz numer <?= $i ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<br>
<hr>
<br>
<table style="border: 2px solid lawngreen; border-collapse: collapse">
    <tr>
        <?php
        $u = 0;
        do {
            $u++;
        ?>
        <td style="border: 2px solid lawngreen; background-color: greenyellow; padding: 10px"> To jest kolumna numer <?= $u ?> </td>
    <?php
    } while ($u < 5);
        ?>
    </tr>
</table>
<br>
<hr>

</body>
</html>