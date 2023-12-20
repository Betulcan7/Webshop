<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retour</title>
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

<div class="body">
<h1>Kan ik mijn product retourneren?</h1> <br>
<h3>Je hebt het recht om je product binnen 30 dagen na ontvangst te retourneren, op <br>voorwaarde dat: <br><br>
Het moet compleet zijn met alle accessoires. <br>
Het moet er nog als nieuw uitzien. <br>
Als het kan, moet het in de originele doos zitten.
</h3>
<br><br><br>
<h1>Hoe stuur ik mijn product terug?</h1> <br>
<h3>
1. Terugbrengen naar de winkel: <br>
Als je je product terugbrengt naar de winkel en het voldoet aan de voorwaarden, <br>
betalen we je meteen het aankoopbedrag terug, inclusief eventuele bezorgkosten. <br><br>
2. Opsturen per post: <br>
Je kan ze ook terugsturen via de post. Kom langs in een van onze winkels, <br>
waar onze klantenservicemedewerkers je product controleren. Als het <br>
aan de voorwaarden voldoet, betalen we je het aankoopbedrag terug.
</h3>
</div>


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
  


<style>

*{
  list-style-type: none;
}

.body{
  margin-top: 6rem;
  margin-left: 1rem;
}

.footer{
  position: absolute; 
  bottom: -250px; left: 0; right: 0;
}

</style>