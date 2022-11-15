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
<?php
$servername = "localhost";
$username = "biblioteka";
$password = "biblioteka";
$database = "biblioteka";
$e = "błąd";
$mysqliConnection = mysqli_connect($servername, $username, $password);

if (!$mysqliConnection) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd:" . mysqli_connect_error());

    mysqli_close($mysqliConnection);
}
echo "Połączono z bazą danych."
?>
<br>
<br>
<?php
$query = "select ksiazki.Sygnatura, ksiazki.Tytul, ksiazki.Imie, ksiazki.Nazwisko, ksiazki.Objetosc_ks, dzialy.Nazwa from ksiazki inner join dzialy on ksiazki.Id_dzial = dzialy.Id_dzial where ksiazki.Objetosc_ks > 500;";
$conn = mysqli_connect($servername, $username, $password, $database);
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<table class="tabela">';
    echo '<tr> <th> Sygnatura </th> <th> Tytuł </th> <th> Autor </th> <th> Ilość stron </th> </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Sygnatura'] . '</td><td>' . $row['Tytul'] . '</td> <td>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td><td>' . $row['Objetosc_ks'] . '</td>';
    }
    echo '</table>';
} else {
    echo 'Brak danych';
}
?>

<?php
$query2 = "select pracownicy.Imie, pracownicy.Nazwisko, pracownicy.wynagrodzenie, stanowiska.Nazwa from pracownicy inner join stanowiska on pracownicy.Id_stanowisko = stanowiska.Id_stanowisko where pracownicy.wynagrodzenie > 2800;";

if (mysqli_num_rows($result) > 0) {
    echo '<table class="tabela">';
    echo '<tr> <th> Pracownik </th> <th> Stanowisko </th> <th> Data zatrudnienia </th> <th> Wynagrodzenie </th>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr> <td>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td><td>'
    }
}
?>


</body>
</html>