<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zadanie2</title>
    <link rel="stylesheet" href="dlapodsumowania.css">
</head>
<body>
<form method="post">
    <fieldset>
        <legend> Roczniki</legend>
        <?php
        for ($rok = 2010; $rok < 2026; $rok++) {
        ?>
            <label> <input type="radio" name="rok"> <?php echo $rok ?> </label> <br>
        <?php } ?>
    </fieldset>
</form>


</body>
</html>
