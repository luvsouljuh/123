<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="others.css">
</head>
<body>
<form method="get" action="login.php">
    <fieldset>
        <legend> Formularz prosty</legend>

        <label> Login </label>
        <input type="text" name="Login" id="login" placeholder="Login required">
        <br>
        <label> Hasło </label>
        <input type="password" name="password" id="passwd" placeholder="Hasło required">
        <br>
        <label> E-mail </label>
        <input type="email" name="email" id="email" placeholder="E-mail required">
        <br>
        <label> Data urodzenia </label>
        <input type="date" name="date" id="date" placeholder="Data urodzenia required">
        <br>
        <input type="submit" name="submit" value="Wyślij">
    </fieldset>
</form>
<br>
<br>
<form method="post" action="login.php">
    <fieldset>
        <legend> Formularz do ogarnięcia</legend>

        <label for="Wybierz samochód"> Wybierz samochód </label>
        <select name="Wybierz samochód" id="wybierz">
            <option value=""> ---Wybierz samochód---</option>
            <option value="Audi"> Audi</option>
            <option value="Nissan"> Nissan</option>
            <option value="Fiat"> Fiat</option>
        </select>
        <br>
        <br>
        <label for="Rok i miesiąc produkcji"> Rok i miesiąc produkcji </label>
        <input type="month" name="month" id="month">
        <br>
        <br>
        <label for="Typ auta"> </label>
            <input type="radio" name="Sedan" id="Sedan"> Sedan <br>
            <input type="radio" name="Kombi" id="Kombi"> Kombi <br>
            <input type="radio" name="SUV" id="SUV"> SUV <br>

    </fieldset>
</form>
</body>
</html>