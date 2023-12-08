<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "webshop";                // Gegevens om verbinding te maken met de database


$conn = new mysqli($servername, $username, $password, $dbname);         // Maakt verbinding met de database


if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);      // Controleerd of er verbinding kan worden gemaakt met de database, anders wordt het afgebroken en wordt een foutmelding weergegeven
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {         // Controleert of het formulier is ingediend met de POST-methode
    $naam = $_POST["naam"];                         // Haalt formuliergegevens op
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $telefoonnummer = $_POST["tel"];


    $sql = "INSERT INTO klant (naam, achternaam, email, telefoonnummer) VALUES ('$naam', '$achternaam', '$email', '$telefoonnummer')";      // Voegt formuliergegevens in de "klant" tabel van de database

    if ($conn->query($sql) === TRUE) {      // Controleert of de SQL-query succesvol is uitgevoerd
        echo "U bent aangemeld!";           // Als het succesvol is, wordt "U bent aangemeld" op het scherm afgedrukt
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;      // Anders wordt een foutbericht weergegeven
    }
}


$conn->close();         // Sluit de database verbinding
?>
