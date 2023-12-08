<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmelden</title>
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
    <a href="simulatie.php">Simulatie</a>
    <a href="avontuur.php">Avontuur</a>
  </div>
  </div>
  <li style="float:right"><a href="contact.php">Contact</a></li>
  <li style="float:right"><a href="inloggen.php">Inloggen</a></li>
  <li style="float:right"><a href="winkelwagen.php">Winkelwagen</a></li>
</div>

    <div class="aanmelden">
        <h1>AANMELDEN</h1>
        <br><br>
        <input type="text" name="naam" placeholder="Naam">
        <br><br>
        <input type="text" name="achternaam" placeholder="achternaam">
        <br><br>
        <input type="text" name="email" placeholder="E-mail">
        <br><br>
        <input type="text" name="tel" placeholder="Telefoon Nummer">
        <br><br>
        <input type="text" name="ww" placeholder="Wachtwoord">
        <br><br>
        <input type="text" name="ww" placeholder="Herhaal Wachtwoord">
        <br><br>
        <button>AANMELDEN</button>
        <br><br>
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
          </p><br>
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

body{
    background-color: #6495ED; 
    background-size: cover;
}

.aanmelden{
    top: 50%;
    transform: translate(-0%, -50%);
    position: absolute;
    color: #fff;
}

.aanmelden h1{
    margin-left: 40rem;
    color: white;
    margin-top: 1rem;
    font-size: 40px;
}

.aanmelden input{
    margin-left: 40rem;
    width: 250px;
    height: 40px;
    border-radius: 5px;
}

.aanmelden button{
    margin-left: 43rem;
    border-radius: 5px;
    width: 100px;
    height: 40px;
}
