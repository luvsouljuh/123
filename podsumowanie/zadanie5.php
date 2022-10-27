<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> zadanie5 </title>
    <link rel="stylesheet" href="dlapodsumowania.css">
</head>
<body>
<?php
$miesiace1 = array('styczen' => 'Styczeń', 'luty' => 'Luty', 'marzec' => 'Marzec', 'kwiecien' => 'Kwiecień', 'maj' => 'Maj', 'czerwiec' => 'Czerwiec', 'lipiec' => 'Lipiec', 'sierpien' => 'Sierpień', 'wrzesien' => 'Wrzesień', 'pazdziernik' => 'Październik', 'listopad' => 'Listopad', 'grudzien' => 'Grudzień');
$miesiace2 = array_keys($miesiace1);
?>
<select>
    <?php
    for($i=0; $i < count($miesiace1); $i++) {
        if($i + 1 == date("m")) {
            $selected = 'selected';
        }
        else {
            $selected = '';
        }
        ?>
        <option <?=$selected?> value="<?=$miesiace2[$i]?>"><?=$miesiace1[$miesiace2[$i]]?></option>
        <?php
    }
    ?>
</select>
</body>
</html>