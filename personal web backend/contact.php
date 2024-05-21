<?php
include "database.php";

if (isset($_POST["register"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];

  $stmt = $db->prepare("INSERT INTO message (name, email, mymessage) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $pesan);

  if ($stmt->execute() === TRUE) {
    echo "OKAY TERIMA KASIH";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

$db;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar">
    <div class="container-navbar">
      <ul class="ul-navbar">
        <li class="li-navbar">
          <a href="index.html">Home</a>
        </li>
        <li class="li-navbar">
          <a href="gallery.html">Gallery</a>
        </li>
        <li class="li-navbar">
          <a href="blog.php">Blog</a>
        </li>
        <li class="li-navbar">
          <a href="contact.php">Contact</a>
        </li>
        <li class="li-navbar">
          <a href="about.html">About</a>
        </li>
      </ul>
  </nav>
  <!-- Navbar End -->
  <h1 style="color: rgb(250, 250, 175)"> Contact Me</h1>
  <div class="container-row">
    <div class="row">
      <div class="social-icon">
        <img src="image/Instagram_logo.jpg" width="25px" height="25px">
      </div>
      <div class="social-link">
        <a id="instagram-link" href="https://www.instagram.com/gifriendt_/">See me on Instagram</a>
      </div>
    </div>
    <div class="row">
      <div class="social-icon">
        <img src="image/linkedin.png" width="25px" height="25px">
      </div>
      <div class="social-link">
        <a id="linkedind-link" href="https://www.linkedin.com/in/gifriend-yedija-talumingan-737274305">My Linkedin</a>
      </div>
    </div>
    <div class="row">
      <div class="social-icon">
        <img src="image/facebook.jpg" width="25px" height="25px">
      </div>
      <div class="social-link">
        <a id="facebook-link" href="https://www.facebook.com/gifriend?locale=id_ID">Facebook</a>
      </div>
    </div>
  </div>
  <div id="contact-form-container">
    <h3 style="color:  rgb(250, 250, 175);">Send Your Message Here</h3>
    <form method="POST" action="" style="max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <input type="text" name="name" placeholder="Name" style="width: 80%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;"><br>
        <input type="email" name="email" placeholder="Email" style="width: 80%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;"><br>
        <textarea name="pesan" placeholder="Message" style="width: 80%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; height: 150px; resize: vertical;"></textarea><br>
        <input type="submit" name="register" value="Submit" style="width: 100%; padding: 10px; background-color: #4CAF50; border: none; border-radius: 5px; color: white; font-size: 18px; cursor: pointer;">
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>