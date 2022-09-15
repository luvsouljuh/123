<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Syntax </title>
</head>
<body>
    <?php
    $title = 'Powrót do strony głównej';
    ?>
    <h3> <a href="index.php"> <?php echo "$title";?> </a> </h3>

    <h5> echo</h5>
    <?php
    echo 'dowolny tekst' , 'zlaczenie';
    ?>
    <br>
    <?php
    echo ('dowolny tekst') . ('zlaczenie');
    ?>
    <br>
    <hr>
    <h5> print</h5>
    <?php
    print 'dowolny tekst' . 'zlaczenie';
    ?>
    <br>
    <?php
    print ('dowolny tekst') . ('zlaczenie');
    ?>
    <br>
    <hr>




</body>
</html>