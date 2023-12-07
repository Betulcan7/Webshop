<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Games</title>
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
      <a href="#">Alles</a>
      <a href="#">Sport</a>
      <a href="#">Actie</a>
      <a href="#">Simulatie</a>
      <a href="#">Avontuur</a>
    </div>
  </div>
  <li style="float:right"><a href="contact.php">Contact</a></li>
  <li style="float:right"><a href="inloggen.php">Inloggen</a></li>
  <li style="float:right"><a href="winkelwagen.php">Winkelwagen</a></li>
</div>


<div class="all">

<div class="div1">
  <div>
    <h2>EA Sports FC 24</h2> <br>
    <img src=".//EA.png" alt="EA SPORTS FC 24">
    <p>Prijs: € 49,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
<br><br><br><br><br><br><br><br>
  <div>
    <h2 class="fifa">EA SPORTS UFC 5</h2> <br>
    <img src=".//UFC.webp" alt="EA SPORTS UFC 5">
    <p>Prijs: € 55,-</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
<br><br><br><br><br><br><br><br>
  <div>
    <h2>F1 23</h2> <br>
    <img src=".//f1.jpg" alt="F1 23">
    <p>Prijs: € 44,-</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
</div>

<div class="div2">
<div>
    <h2 class="ride5">RIDE 5</h2> <br>
    <img src=".//RIDE5.jpeg" alt="RIDE 5">
    <p>Prijs: € 44,-</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
<br><br><br><br><br><br><br><br>
  <div>
    <h2>PGA Tour 2K23</h2> <br>
    <img src=".//pga.jpg" alt="PGA Tour 2K23">
    <p>Prijs: € 25,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
</div>

<div class="div3">

<div>
    <h2 class="nba">NBA 2K24</h2> <br>
    <img src=".//nba.jpg" alt="NBA 2K24">
    <p>Prijs: € 34,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp

    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <button>IN WINKELWAGEN</button>
  </div>
<br><br><br><br><br><br><br><br>
</div>

</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>KLANTENSERVICE</h4>
        <ul>
          <li><a href="#">Over Ons</a></li> <br>
          <li><a href="#">Retour</a></li> <br>
          <li><a href="#">Voorwaarden</a></li> <br>
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

.all{
    display: flex;
    justify-content: space-evenly;
    flex-direction: row;
    margin-top: 5rem;
}

.div1{
    display: flex; 
    flex-direction: column;
}

.div2{
    display: flex;
    flex-direction: column;
}

.div3{
    display: flex;
    flex-direction: column;
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
  bottom: -600px; left: 0; right: 0;
}


.ride5{
  margin-left: 40px;
}

.nba{
  margin-left: 25px;
}


</style>