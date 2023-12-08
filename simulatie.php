<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulatie games</title>
    <link rel="stylesheet" href="menu.css">
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
      <a href="simultie.php">Simulatie</a>
      <a href="avontuur.php">Avontuur</a>
    </div>
  </div>
  <li style="float:right"><a href="contact.php">Contact</a></li>
  <li style="float:right"><a href="inloggen.php">Inloggen</a></li>
  <li style="float:right"><a href="winkelwagen.php">Winkelwagen</a></li>
</div>



<div class="div1">
  <div>
    <h2>Euro Truck Simulator 2</h2> <br>
    <img src=".//eurotruck.jpg" alt="Euro Truck Simulator">
    <p>Prijs: € 19,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
<br><br><br><br><br><br><br><br>
  <div>
    <h2>Flight Simulator</h2> <br>
    <img src=".//flightsim.png" alt="Flight Simulator">
    <p>Prijs: € 69,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
  <br><br><br><br><br><br><br><br>
  <div>
    <h2>Farming Simulator 22</h2> <br>
    <img src=".//farmsim.jpg" alt="Farming Simulator 22">
    <p>Prijs: € 37,92</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
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

.div1{
    display: flex;
    justify-content: space-evenly;
    flex-direction: row;
    margin-top: 5rem;
}

div h2{
  text-align: center;
}

img{
  height: 190px;
  width: 160px
}

button{
  height: 30px;
  width: 160px;
  background-color: green;
}

footer{
  position: absolute; 
  bottom: -200px; left: 0; right: 0;
}
  
</style>