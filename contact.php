<?php
$name = $company = $email = $phone = $message = $error = ""; // Ik definieer enkele lege variabelen.

if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Ik controleer of er iets verzonden is geweest.

  if(isset($_POST['name'])){ // Ik controleer of de naam goed is doorgestuurd.
    if(!empty($_POST['name'])){ // Ik controleer of de gebruiker wel degelijk een naam heeft opgegeven.
      $name = $_POST['name']; // Ik schrijf de opgegeven naam over naar de variabele naam.
    }
    else {
    $error += "Please enter a name <br>";
  }
  } else {
    $error += "Something went wrong with the details <br>";
  }

  if(isset($_POST['company'])){ // Ik controleer of de voornaam goed is doorgestuurd.
    if(!empty($_POST['company'])){ // Ik controleer of de gebruiker wel degelijk een voornaam heeft opgegeven.
      $company = $_POST['company']; // Ik schrijf de opgegeven voornaam over naar de variabele voornaam.
    }
    else {
    $error += "Please enter the name of your company <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(isset($_POST['email'])){ // Ik controleer of het email-adres goed is doorgestuurd.
    if(!empty($_POST['email'])){ // Ik controleer of de gebruiker wel degelijk een email-adres heeft opgegeven.
      $email = $_POST['email']; // Ik schrijf het opgegeven email-adres over naar de variabele email.
    }
    else {
    $error += "Please enter a valid email address. <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(isset($_POST['phone'])){ // Ik controleer of het email-adres goed is doorgestuurd.
    if(!empty($_POST['phone'])){ // Ik controleer of de gebruiker wel degelijk een email-adres heeft opgegeven.
      $phone = $_POST['phone']; // Ik schrijf het opgegeven email-adres over naar de variabele email.
    }
    else {
    $error += "Please enter a valid phone number. <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(isset($_POST['message'])){ // Ik controleer of het bericht goed is doorgestuurd.
    if(!empty($_POST['message'])){ // Ik controleer of de gebruiker wel degelijk een bericht heeft opgegeven.
      $message = $_POST['message']; // Ik schrijf het opgegeven bericht over naar de variabele email.
    }
    else {
    $error += "Please enter your message <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(empty($error)){

  $bericht = "Following person, <br><br> $name, from $company, provided phone number; $phone, and said.. <br> <b>Message:</b> <br> $message <br><br> You can contact this person by using the email: $email";
  $ontvanger = "Sinthaesia@gmail.com"; //Geef hier het e-mailadres van de ontvanger op.
  $onderwerp = "Sinthaesia.com - Contact form";
  $headers = "From: info@sinthaesia.com" . "\r\n"; //Geef hier je eigen e-mailadres op dat waaruit de mail verzonden moet worden.
  $headers .= "Reply-To: info@sinthaesia.com" . "\r\n"; //Geef hier je eigen e-mailadres op.
  $headers .= "CC: \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  mail($ontvanger, $onderwerp, $bericht, $headers) or die ("The mail failed to send."); //Hier wordt de mail verzonden.
  echo "Your message has been submitted succesfully!";
  } else {
  echo $error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Sinthaesia">
  <meta name="description" content="Contact Sinthaesia">
  <meta name="keywords" content="webdesign, webdevelopment, design, development, graphic, graphical, hosting">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="Sinthaesia">
  <title>Contact Sinthaesia</title>
  <link rel="stylesheet" type="text/css" title="main-style" href="stylesheets/screen.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/navigation_test.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/contact.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/footer.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/hamburger.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="icon" href="images/atom.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="images/atom.png" type="image/x-icon"/>
</head>
<body>
  <header id="desktop-icons">
    <nav id="icons">
      <ul>
      <a class="logo">
        <h1><i class="fas fa-users"></i> Sinthaesia</h1>
        <p>Webdesign & development — Graphics</p>
      </a>
        <li>
          <a href="index.html">
            <div class="icon">
              <i class="fas fa-home"></i>
              <i class="fas fa-home"></i>
            </div>
            <div class="name"><span data-text="Home">Home</span></div>
          </a>
        </li>
        <li>
          <a href="contact.php">
            <div class="icon">
              <i class="fas fa-smile-wink"></i>
              <i class="fas fa-smile-wink"></i>
            </div>
            <div class="name"><span data-text="Contact">Contact</span></div>
          </a>
        </li>
        <li>
          <a href="affiliates.html">
            <div class="icon">
              <i class="fas fa-handshake"></i>
              <i class="fas fa-handshake"></i>
            </div>
            <div class="name"><span data-text="Affiliates">Affiliates</span></div>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <header id="icon-header">
    <a class="logo" href="index.html"><i class="fas fa-users"></i> Sinthaesia</a>
    <nav>
      <ul>
        <li>
          <a href="index.html">
            <i class="fas fa-home"></i>
            <h1>Home</h1>
          </a>
        </li>
        <li>
          <a href="contact.php">
            <i class="fas fa-smile-wink"></i>
            <h1>Contact</h1>
          </a>
        </li>
        <li>
          <a href="affiliates.html">
            <i class="fas fa-handshake"></i>
            <h1>Affiliates</h1>
          </a>
        </li>
      </ul>
    </nav>
    <button class="hamburger hamburger--emphatic" tabindex="0" aria-controls="nav" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </header>
<div class="contact-container">
  <div class="contact-wrapper">
    <div class="company-info">
      <h3>Contact us!</h3>
      <ul>
        <li><i class="fas fa-link"></i><a href="https://sinthaesia.com/">Sinthaesia.com</a></li>
        <li><i class="fas fa-mobile-alt"></i>0477 38 65 75</li>
        <li><a href="mailto:someone@example.com?Subject=Hello%20again"><i class="far fa-envelope"></i>Contact@sinthaesia.com</a></li>
      </ul>
    </div>
    <div class="contact-form">
      <form action="contact.php" method="POST">
        <p>
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="John Doe">
        </p>
        <p>
          <label for="company">Company</label>
          <input type="text" name="company" placeholder="Sinthaesia">
        </p>
        <p>
          <label for="email">Email address</label>
          <input type="email" name="email" placeholder="johndoe@gmail.com">
        </p>
        <p>
          <label for="phone">Phone number</label>
          <input type="text" name="phone" placeholder="+** 0123456789">
        </p>
        <p class="full">
          <label for="message">Message</label>
          <textarea name="message" rows="5" placeholder="Your message here!"></textarea>
        </p>
        <p class="right-half">
          <button class="button waveywido" type="submit">Submit</button>
        </p>
      </form>
    </div>
  </div>
</div>
  <footer>
    <div class="sitemap">
      <h2>Quick navigation</h2>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="affiliates.html">Affiliates</a></li>
      </ul>
    </div>
    <div class="social-container">
      <h2>Follow us on social networks!</h2>
      <div class="social-icons">
        <a class="social-button" href="https://www.facebook.com/Sinthaesia-779240535788351">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="social-button" href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="social-button" href="https://codepen.io/tranquillia/#">
          <i class="fab fa-codepen"></i>
        </a>
        <a class="social-button" href="https://github.com/Tranquillia">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script
  			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  			  crossorigin="anonymous"></script>
          <script src="scripts/navigation.js" type="text/javascript"></script>
          <script src="scripts/main.js" type="text/javascript"></script>
</body>
</html>
