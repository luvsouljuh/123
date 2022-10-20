<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend> Elementy tablicy SERVER</legend>
    <ul>
        <?php
        foreach ($_SERVER as $key => $value) {
            echo '<li>' . $key . ' &rArr; ';
            print_r($value);
            echo '</li>';
        }
        ?>
    </ul>
</fieldset
</body>
</html>