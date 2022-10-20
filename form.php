<!doctype html>
<html lang="pl">
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
<form method="post" action="samochod.php">
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
        <label for="Typ auta"> Element radio nie wysyła się, jeśli żaden nie jest zaznaczony </label> <br>
            <input type="radio" name="Sedan" id="Sedan" value="Sedan"> Sedan <br>
            <input type="radio" name="Kombi" id="Kombi" value="Kombi"> Kombi <br>
            <input type="radio" name="SUV" id="SUV" value="SUV"> SUV <br><br>
        <label for="Mam"> Element checkbox jest tablicą i również nie wysyła się, jeśli żaden nie jest zaznaczony </label> <br>
            <input type="checkbox" name="nocar" id="niemam" value="Nie mam samochodu"> Nie mam samochodu <br>
            <input type="checkbox" name="onecar" id="mam1" value="Mam 1 samochod"> Mam 1 samochód <br>
            <input type="checkbox" name="twocars id="mam2" value="Mam 2 samochody"> Mam 2 samochody <br>
        <br>
        <br>
        <label for="Opis samochodu"> Opis samochodu </label> <br>
            <textarea id="opis" name="opis" rows="4" cols="25"> </textarea>

        <br>
        <button type="submit"> Wyślij </button>
    </fieldset>
</form>
    <br>
    <br>
    <form method="post" action="trudniejszy.php">
        <fieldset>
            <legend> Formularz odrobinę trudniejszy </legend> Element select+multiple też jest tablicą i również nie wysyła się, jeśli żaden nie jest zaznaczony <br>
            <label for="marki"> Wybierz samochód/samochody: </label>
            <select name="cars[]" id="cars"multiple>
                <option value="Audi"> Audi </option>
                <option value="Volvo"> Volvo </option>
                <option value="Saab"> Saab </option>
                <option value="Fiat"> Fiat </option>
            </select>
            <br>
            <br>
            <label for="tydzien"> Wybierz tydzień: </label>
                <input type="week" name="week" id="week">
            <br>
            <br>
            <label for="godzina"> Wybierz godzinę: </label>
                <input type="time" name="hour" id="hour">
            <br>
            <br>
            <label for="quality"> Oceń jakość (od 1 do 6): </label>
                <input type="text" min="1" max="6" name="quality" id="quality">
            <br>
            <br>
            <label for="ilosc"> Wybierz ilość (pomiędzy 0 i 50) </label>
                <input type="range" value="0" id="ilosc" name="ilosc" min="0" max="50" oninput="this.nextElementSibling.value = this.value">
                <output> 0 </output>
            <br>
            <button type="submit" value="Wyślij"> Wyślij </button>
        </fieldset>
    </form>
</body>
</html>