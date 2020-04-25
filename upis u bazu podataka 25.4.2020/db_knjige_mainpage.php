<?php
include_once 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>25.4.2020. - Programiranje za internet : ispis iz baze te upis u bazu podataka</title>
</head>
<body>
<b>ISPIS PODATAKA</b>
<br><br>
Knjige:
<br><br>

<?php
$prodavaonica = "SELECT * FROM knjige;";
$result = mysqli_query($connection, $prodavaonica);
$result_check = mysqli_num_rows($result);


if ($result_check > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "ID: " . $row['ID'] . "<br>";
        echo "Ime knjige: " . $row['ime_knjige'] . "<br>";
        echo "Autor: " . $row['autor'] . "<br>";
        echo "Zanr: " . $row['zanr'] . "<br>";
        echo "Broj stranica: " . $row['broj_stranica'] . "<br>";
        echo "<br>";
    }
}
?>

<br><br>
<hr>
<br><br>

<b>UPIS PODATAKA</b>
<br>

<form action="db_upis.php" method="POST">
    <br>
    <input type="text" name="ime" placeholder="Ime knjige">
    <br><br>
    <input type="text" name="autor" placeholder="Autor">
    <br><br>
    <input type="text" name="zanr" placeholder="Zanr">
    <br><br>
    <input type="text" name="stranice" placeholder="Broj stranica">
    <br><br>
    <button type="submit" name="upis"> UPIS </button>
</form>


</body>
</html>
