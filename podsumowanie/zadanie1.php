<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zadanie1</title>
    <link rel="stylesheet" href="dlapodsumowania.css">
</head>
<body>
<table style="border-collapse: collapse">
    <?php
    $dnityg = array("pon", "wto", "śro", "czw", "pią", "sob", "nie");
    foreach ($dnityg as $dzien) {
        ?>
        <td style="border: solid 2px black; border-collapse: collapse; padding: 20px"> <?php echo $dzien ?> </td>
        <?php
    }
    ?>
</table>

</body>
</html>
