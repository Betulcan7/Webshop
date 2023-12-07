<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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


<div class="nieuws">
    <h1>Meld je aan voor onze nieuwsbrief!</h1> <br><br>
    <input type="text" name="Name" placeholder="Naam"> <br><br>
    <input type="text" name="E-mail" placeholder="E-mail"> <br><br>
    <button>AANMELDEN</button>
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
          <button><a href="nieuwsbief.php">Aanmelden</a></button>
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

    input{
        height: 30px;
        width: 400px;
    }

    .nieuws button{
        background-color: cyan;
        color: black;
        border-color: cyan;
        height: 30px;
        width: 100px;
    }

    .nieuws{
        margin-top: 100px;
        margin-left: 35%;
    }

    .footer{
    position: absolute; 
    bottom: 0; left: 0; right: 0;
}

</style>