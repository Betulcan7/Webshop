<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord vergeten</title>
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

    <div class="ww">
        <h2>Wachtwoord vergeten</h2>
        <br><br>
        <p>
            &ensp;&ensp; Voer het e-mailadres in waarmee je <br><br>
            &emsp;&emsp;&emsp;&emsp; je hebt geregistreerd.
        </p>
        <br><br>
        <input type="text" name="E-mail" placeholder="E-mail">
        <br><br>
        <button>WACHTWOORD RESETTEN</button>
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
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    list-style-type: none;
}

.ww h2{
    margin-left: 43rem;
    margin-top: 4rem;
}

.ww p{
    margin-left: 40rem;
    font-size: 20px;
    color: gray;
}

.ww input{
    font-size: 20px;
    margin-left: 43rem;
}

.ww button{
    width: 300px;
    height: 30px;
    margin-left: 42rem;
}

.footer{
    position: absolute; 
    bottom: 0; left: 0; right: 0;
}
</style>

