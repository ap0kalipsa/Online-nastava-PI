<?php
include_once 'dbconnection.php';

$ime = $_POST['ime'];
$cijena = $_POST['cijena'];
$velicina = $_POST['velicina'];


$insertion = "INSERT INTO prodavaonica (ime_artikla, cijena_artikla, velicina_artikla)
                    VALUES ('$ime', '$cijena', '$velicina');";
mysqli_query($connection, $insertion);

//header("Location: db_html.php?upis=sucess");

echo "Upis uspjesan.";

