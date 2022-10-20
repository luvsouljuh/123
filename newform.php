<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularz z walidacją</title>
    <link rel="stylesheet" href="others.css">
</head>
<body>
<form method="post">
    <fieldset>
        <legend> Formularz z walidacją</legend>
            <label for="login"> Login: </label> <br>
            <input type="text" name="login" id="login">
        <br>
        <br>
            <label for="Email"> Email: </label> <br>
            <input type="text" name="email" id="email">
        <br>
        <br>
            <label for="Strona"> Strona internetowa: </label> <br>
            <input type="text" name="strona" id="strona">
        <br>
        <br>
            <label for="miasto-miasta"> Wybierz miasto/miasta: </label> <br>
            <select name="miasta[]" id="miasta" multiple>
                <option value="Warszawa"> Warszawa </option>
                <option value="Poznan"> Poznań </option>
                <option value="Gdansk"> Gdańsk </option>
                <option value="Szczecin"> Szczecin </option>
            </select>
        <br>
        <br>
            <label for="plec"> </label>
            <input type="checkbox" name="plec[]" value="Kobieta"> Kobieta <br>
            <input type="checkbox" name="plec[]" value="Mężczyzna"> Mężczyzna <br>
            <input type="checkbox" name="plec[]" value="Nie chcę podawać"> Nie chcę podawać
        <br>
        <br>
        <button type="submit"> Wyślij </button>
    </fieldset>
</form>
<pre>
<?php
    if ($_SERVER["REQUEST_METHOD"]=='POST'){
        print_r($_POST);
    }
?>
<?php
    if (!empty($_POST["login"])){
        echo ("Login:") . $_POST["login"];
    }
    else {
        echo ("Nie podano loginu");
    }
?>

<?php
    if (!empty($_POST["email"])){
        echo ("Email:") . $_POST["email"];
    }
    else {
        echo ("Nie podano emaila");
    }
?>

<?php
    if (!empty($_POST["strona"])){
        echo ("Strona internetowa:") . $_POST["strona"];
    }
    else {
        echo ("Nie podano strony internetowej");
    }
?>

<?php
    if (!empty($_POST["miasta"])){
        echo ("Miasto/miasta: ") . implode($_POST["miasta"]);
    }
    else {
        echo ("Nie podano miasta");
    }
?>

<?php
    if (!empty($_POST["plec"])){
        echo ("Wybrana płeć:  ") . implode($_POST["plec"]);
    }
    else {
        echo ("Nie podano płci");
    }
?>
</body>
</html>