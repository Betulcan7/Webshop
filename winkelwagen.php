<?php
session_start();  // Sessie wordt gestart

$producten = array(     // Elke zin in de array is een unieke product, heeft een speciale ID
    1 => array('naam' => 'EA SPORTS FC 24', 'afbeelding' => 'EA.png', 'prijs' => '€ 49,99'),
    2 => array('naam' => 'Red Dead Redemption 2', 'afbeelding' => 'rdr2.jpeg', 'prijs' => '€ 29,99'),
    3 => array('naam' => "Marvel's Spider-Man 2", 'afbeelding' => 'spiderman2.jpg', 'prijs' => '€ 65,99'),
    4 => array('naam' => "The Last of Us", 'afbeelding' => 'tlou.jpg', 'prijs' => '€ 79,99'),
    5 => array('naam' => "RIDE 5", 'afbeelding' => 'RIDE5.jpeg', 'prijs' => '€ 44'),
    6 => array('naam' => "Flight Simulator", 'afbeelding' => 'flightsim.png', 'prijs' => '€ 69,99'),
    7 => array('naam' => "The Crew Motorfest", 'afbeelding' => 'thecrew.jpg', 'prijs' => '€ 79,99'),
    8 => array('naam' => "Euro Truck Simulator", 'afbeelding' => 'eurotruck.jpg', 'prijs' => '€ 19,99'),
    9 => array('naam' => "GTA V", 'afbeelding' => 'gta.png', 'prijs' => '€ 39,99'),
    10 => array('naam' => "F1 23", 'afbeelding' => 'f1.jpg', 'prijs' => '€ 44'),
    11 => array('naam' => "Farming Simulator 22", 'afbeelding' => 'farmsim.jpg', 'prijs' => '€ 37,92'),
    12 => array('naam' => "PGA Tour 2K23", 'afbeelding' => 'pga.jpg', 'prijs' => '€ 25,99'),
    13 => array('naam' => "Uncharted 4", 'afbeelding' => 'unch4.jpg', 'prijs' => '€ 49,99'),
    14 => array('naam' => "Call of Duty", 'afbeelding' => 'callofduty.jpg', 'prijs' => '€ 69,99'),
    15 => array('naam' => "NBA 2K24", 'afbeelding' => 'nba.jpg', 'prijs' => '€ 34,99'),
    16 => array('naam' => "EA SPORTS UFC 5", 'afbeelding' => 'UFC.webp', 'prijs' => '€ 55'),
);

if (isset($_POST['add_to_cart'])) {       // Controleert of er op de knop is gedrukt
  $product_id = $_POST['product_id'];     // Hier wordt het product ID dat is ingediend via het formulier, opgehaald uit de POST-variabele

  if (!isset($_SESSION['winkelwagen'])) {   // Zorgt ervoor dat een lege lijst wordt aangemaakt, zodat je producten kan toevoegen
      $_SESSION['winkelwagen'] = array();  
  }

  if (!in_array($product_id, $_SESSION['winkelwagen'])) {    // Kijkt of het gekozen product nog niet is toegevoegd aan de winkelwagen
      $_SESSION['winkelwagen'][] = $product_id;
  }
}

if (isset($_POST['verwijder'])) {     // Dit controleert of het formulier is ingediend en of de knop verwijder is ingedrukt
  $verwijder_product_id = $_POST['verwijder'];  // Hier wordt het product ID dat is ingediend via het formulier opgehaald uit de POST variabele

  if (($key = array_search($verwijder_product_id, $_SESSION['winkelwagen'])) !== false) {
      unset($_SESSION['winkelwagen'][$key]);
  }     // Hier wordt gezocht naar het product ID in de array. Als het wordt gevonden, wordt het product verwijderd uit de winkelwagen.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Winkelwagen</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<div class="navbar">
  <a href="homepage.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Games 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content"> 
      <a href="games.php">Alles</a>
      <a href="sport.php">Sport</a>
      <a href="actie.php">Actie</a>
      <a href="simulatie.php">Simulatie</a>
      <a href="avontuur.php">Avontuur</a>
    </div>
  </div>
  <li style="float:right"><a href="contact.php">Contact</a></li>
  <li style="float:right"><a href="inloggen.php">Inloggen</a></li>
  <li style="float:right"><a href="winkelwagen.php">Winkelwagen</a></li>
</div>

<section>
  <div class="cart">
<?php
  if (!empty($_SESSION['winkelwagen'])) {     // Controleert of de winkelwagen niet leeg is
    foreach ($_SESSION['winkelwagen'] as $product_id) {
  if (array_key_exists($product_id, $producten)) {    // Controleert of het product bestaat in de producten array
    $product = $producten[$product_id];
      echo "<div class='cart-item'>";     // Toont een cart-item voor elk product
      echo "<img src='{$product['afbeelding']}' alt='{$product['naam']}' style='max-width: 100px; max-height: 100px;'>";
      echo "<div>";
      echo "<span>{$product['naam']}</span>";
      echo "</div>";
      echo "<span>{$product['prijs']}</span>";
      echo "<form action='' method='post'>";     // Voegt een formulier toe om producten te verwijderen
      echo "<input type='hidden' name='verwijder' value='{$product_id}'>";
      echo "<button type='submit'>Verwijder</button>";
      echo "</form>";
      echo "</div>";
      }
    }
      echo "<button class='checkout-btn'>Afrekenen</button>";     // Voegt een knop toe om af te rekenen
    } else {
      echo "Winkelwagen is leeg.";      // Toont een bericht als de winkelwagen leeg is
    }
?>
  </div>
</section>


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>KLANTENSERVICE</h4>
        <ul>
          <li><a href="overons.php">Over Ons</a></li> <br>
          <li><a href="retour.php">Retour</a></li> <br>
          <li><a href="voorwaarden.php">Voorwaarden</a></li> <br>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>NIEUWSBRIEF</h4>
        <ul>
          <p>Op de hoogte blijven <br>
             van onze acties? <br>
             Meld je dan hier aan voor<br>
             de nieuwsbrief.
          </p> <br>
          <button><a href="nieuwsbrief.php">Aanmelden</a></button>
        </ul>
      </div>
      <div class="footer-col">
        <h4>SOCIAL MEDIA</h4>
        <div class="social-links"></div>
          <p>Volg ons op Social Media. <br>
             En maak regelmatig kans <br>
             op leuke prijzen en blijf op de <br>
             hoogte van onze acties.
          </p> <br>
          <a href="#"><i class="fab fa-facebook-f"></i></a> &nbsp&nbsp&nbsp
          <a href="#"><i class="fab fa-twitter"></i></a>&nbsp&nbsp&nbsp
          <a href="#"><i class="fab fa-instagram"></i></a> <br><br>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>

<style>

*{
  list-style-type: none;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 1em;
}

section {
  margin: 20px;
}

.cart {
  display: flex;
  flex-direction: column;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.cart-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #ddd;
  padding: 10px 0;
}

.cart-item img {
  max-width: 50px;
  max-height: 50px;
  margin-right: 10px;
}

.checkout-btn {
  background-color: #4caf50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
