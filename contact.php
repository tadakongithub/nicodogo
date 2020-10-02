

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CONTACT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/style.css">
    
<script src="jquery-3.3.1.min.js"></script>
<script src="main.js"></script>
</head>
<body>
<header>
    <div class="logo">
    <h1><a href="index.html"><img src="images/logo.png" alt="Logo for NICODOGO"></a></h1>
    </div>
    
    <nav>
      <ul>
      <li><a href="index.html"><img src="images/home.jpg" alt="pic of bone"></a></li>
      <li><a href="about.html"><img src="images/about.jpg" alt="pic of bone"></a></li>
      <li><a href="services.html"><img src="images/services.jpg" alt="pic of bone"></a></li>
      <li><a href="reviews.php"><img src="images/reviews.jpg" alt="pic of bone"></a></li>
      <li><a href="contact.php"><img src="images/contact.jpg" alt="pic of bone"></a></li>
      </ul>
      </nav>
</header>

<article id="contact">
<h1>CONTACT</h1>

<P>If you have any questions, feel free to ask in the section below. We will get back to you
  as soon as possible.
</P>

<form action="send_email_2.php" method="post"> 
<p>
<label>
Name<input type="text" name="username" placeholder="Enter your name" required>
</label>
</p>
    
<p>
<label>
E-mail<input type="email" name="usermail" placeholder="nicodoco@gmail.com" required>
</label>
</p>
    
<p class="textarea-container">
<label>QUESTIONS</label>
<textarea name="inquiry" required></textarea>
</p>
    
<p><button type="submit" class="send">SEND</button></p>
</form>

</article>

<footer>
    <ul>
      <li><a href="index.html">HOME</a></li>
      <li><a href="about.html">ABOUT</a></li>
      <li><a href="services.html">SERVICES</a></li>
      <li><a href="reviews.php">REVIEWS</a></li>
      <li><a href="contact.php">CONTACT</a></li>
    </ul>
    <small>Copyright &copy; 2018 NICO DOGO, All Rights Reserved.</small>
</footer>
</body>
</html>
