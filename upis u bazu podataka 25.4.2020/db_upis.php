<?php
include_once 'db_connection.php';

$ime = $_POST['ime'];
$autor = $_POST['autor'];
$zanr = $_POST['zanr'];
$stranice = $_POST['stranice'];


$insertion = "INSERT INTO knjige (ime_knjige, autor, zanr, broj_stranica)
                    VALUES ('$ime', '$autor', '$zanr', '$stranice');";
mysqli_query($connection, $insertion);


echo "<b>Upis uspjesan.</b><br><br>";
echo "<a href='db_knjige_mainpage.php'>Povratak na stranicu upisa.</a>";