<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actie games</title>
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

<div class="all">

<div class="div1">
  <div>
    <h2 class="gta">GTA V</h2> <br>
    <img src=".//gta.png" alt="GTA V">
    <p>Prijs: € 39,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp
    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <form action="winkelwagen.php" method="post">
      <input type="hidden" name="product_id" value="9">
      <button type="submit" name="add_to_cart">IN WINKELWAGEN</button>
    </form>
  </div>
<br><br><br><br><br><br><br><br>
  <div>
    <h2 class="call">Call Of Duty</h2> <br>
    <img src=".//callofduty.jpg" alt="Call Of Duty">
    <p>Prijs: € 69,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp
    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <form action="winkelwagen.php" method="post">
      <input type="hidden" name="product_id" value="14">
      <button type="submit" name="add_to_cart">IN WINKELWAGEN</button>
    </form> 
  </div>
</div>

<div class="div2">
<div>
    <h2>The Crew Motorfest</h2> <br>
    <img src=".//thecrew.jpg" alt="The Crew Motorfest">
    <p>Prijs: € 79,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp
    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <form action="winkelwagen.php" method="post">
      <input type="hidden" name="product_id" value="7">
      <button type="submit" name="add_to_cart">IN WINKELWAGEN</button>
    </form> 
  </div>
  <br><br><br><br><br><br><br><br>
  <div>
    <h2>Red Dead Redemption 2</h2> <br>
    <img src=".//rdr2.jpeg" alt="Red Dead Redemption 2">
    <p>Prijs: € 29,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp
    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <form action="winkelwagen.php" method="post">
      <input type="hidden" name="product_id" value="2">
      <button type="submit" name="add_to_cart">IN WINKELWAGEN</button>
    </form> 
  </div>
</div>

<div class="div3">
<div>
    <h2>Marvel’s Spider-Man 2</h2> <br>
    <img src=".//spiderman2.jpg" alt="Marvel's Spider-man 2">
    <p>Prijs: € 65,99</p> <br>
    <input type="radio" id="xbox" name="platform" value="xbox">
      <label for="xbox">Xbox</label> &nbsp&nbsp
    <input type="radio" id="ps5" name="platform" value="ps5">
      <label for="ps5">PS5</label> <br>
    <form action="winkelwagen.php" method="post">
      <input type="hidden" name="product_id" value="3">
      <button type="submit" name="add_to_cart">IN WINKELWAGEN</button>
    </form>
  </div>
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

*{
  list-style-type: none;
}

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

.gta{
  margin-left: 45px;
}

.call{
  margin-left: 15px;
}

</style>
  