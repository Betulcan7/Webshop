<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
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

   
    <div class="inlogform">
        <h1>INLOGGEN</h1>
        <form action="homepagina.php" method="post">
        <p>Email</p>
        <input type="text" name="gebruiker" placeholder="Email">
        <p>Wachtwoord</p>
        <input type="password" name="password" placeholder="Wachtwoord">
        <button type="submit">INLOGGEN</button>
        <br>
        <a href="wwvergeten.php" class="wwvergeten">Wachtwoord vergeten?</a>
        <br> <br>
        <a href="aanmelden.php" class="aanmelden">Nog geen account, klik hier!</a>
        <br><br>
        </form>
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


</body>
</html>

<style>

*{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    list-style-type: none;
}

body{
    background-color: #191970; 
    background-size: cover;
}

.inlogform{
    width: 350px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: #fff;
}

.inlogform h1{
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}

.inlogform p{
    font-size: 20px;
    margin: 15px 0;
}

.inlogform input{
    font-size: 16px;
    width: 100%;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}

.inlogform button{
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    padding: 10px 15px;
    width: 50%;
}

.wwvergeten{
    color: white;
    text-decoration: none;
}

.aanmelden{
    color: white;
    text-decoration: none;
}

</style>
