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


<div class="contactgegevens">
<h1>CONTACTGEGEVENS</h1>
<br><br>
<p><strong>E-mail:</strong>
<br> @gmail.com
</p>
<br><br>
<p><strong>Telefoon-nummer:</strong> 
<br> 06-1965076
</p>
<br><br>
<p><strong>Adres:</strong>
<br>
    Rotterdam <br>
    3013AJ Rotterdam
</p>
<br><br>
<p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.5299370271473!2d4.467451376576626!3d51.924286771911056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a5bc629449%3A0xb4834251ce273735!2sRotterdam!5e0!3m2!1snl!2snl!4v1699534053696!5m2!1snl!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>



<div class="contactform">
<h1>CONTACTFORMULIER</h1>
<br><br>
<div class="form">

  <form action="/action_page.php">
    <label for="fname">Naam</label>
    <input type="text" id="fname" name="firstname">

    <label for="lname">Achternaam</label>
    <input type="text" id="lname" name="lastname" >

    <label for="lname">E-mail</label>
    <input type="text" id="lname" name="E-mail" >

    <label for="lname">Telefoon-nummer</label>
    <input type="text" id="lname" name="Tel" >

    <label for="subject">Klacht</label>
    <textarea id="subject" name="subject" style="height:200px"></textarea>

    <input type="submit" value="Verzenden">
  </form>
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

.contactform{
    margin-left: 50rem;
    margin-top: -38rem;
}

.contactgegevens{
    margin-top: 5rem;
    margin-left: 5rem
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


.footer{
    position: absolute; 
    bottom: -500px; left: 0; right: 0;
}

</style>