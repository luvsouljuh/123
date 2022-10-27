<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zadanie3</title>
    <link rel="stylesheet" href="dlapodsumowania.css">
</head>
<body>
<?php
$liczbadni = date("t")
for($i=1; $i<=31; $i++ ){
    echo "<td>" .$i "</td>";
    if ($i%7==0){
        echo "<tr> </tr>"
    }
}
?>
<table>
    <caption> <?php echo $liczbadni ?> </caption>
<td style="border: solid 2px black"> </td>
</table>

</body>
</html>