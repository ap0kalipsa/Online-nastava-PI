<?php
    include_once 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>31.3.2020. - Ispis podataka iz i u bazu podataka</title>
</head>
<body>
<b>ISPIS PODATAKA</b>
<br>
Prodavaonica:
<br><br>

<?php
    $prodavaonica = "SELECT * FROM prodavaonica;";
    $result = mysqli_query($connection, $prodavaonica);
    $result_check = mysqli_num_rows($result);


    if ($result_check > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "ID: " . $row['ID'] . "<br>";
            echo "Ime artikla: " . $row['ime_artikla'] . "<br>";
            echo "Cijena artikla: " . $row['cijena_artikla'] . "<br>";
            echo "Velicina artikla: " . $row['velicina_artikla'] . "<br>";
            echo "<br>";
        }
    }
?>

<br><br>
<hr>
<br><br>

<b>UPIS PODATAKA</b>
<br>

<form action="dbupis.php" method="POST">
    <br>
    <input type="text" name="ime" placeholder="Ime artikla">
    <br>
    <input type="text" name="cijena" placeholder="Cijena artikla">
    <br>
    <input type="text" name="velicina" placeholder="Velicina artikla">
    <br>
    <button type="submit" name="upis"> UPIS </button>
</form>


</body>
</html>