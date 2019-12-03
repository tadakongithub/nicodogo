<?php
session_start();

if (!empty($POST)){
    $_SESSION['mail'] = $_POST;
    header('Location: send_email.php');
}
?>


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
<main class="main-review">
    <div id="reviews">
    <h2>What They Say</h2><hr>
    <section>
        <h4 class="customer">Abril M.</h4>
        <p>Amazing. I'm so happy I found you because I always struggle when out of town. Thank you for the great service and extra care. Finally someone I can trust with my home and my pets.</p>
    </section>
    <section>
        <h4 class="customer">Kathleen R.</h4>
        <p>Nicole was terrific with my two English bulldogs. She kept them entertained with walks and playing outside. With a good balance of napping and downtimes thrown in. She was very responsible, prompt and left my house very clean. Would definitely recommend her and use her for future dog sitting.</p>
    </section>
    <section>
        <h4 class="customer">Andrew W.</h4>
        <p>Nicole was great! She kept me very up to date on the status of my animals and took my dog on a number of adventures. She truly went above and beyond and left the house cleaner than she found it. She is worth every penny and I will definitely use her again in the future.</p>
    </section>
    </div>

    <div class="your-thought">
        <h2>Your Reviews</h2><hr>
        <p>Let us know what you have thought of our service. We think everyone's voice is important
        to improve the quality of our service.</p>
        
        <form action="send_email.php" method="post"> 
            <b>Name  </b><input name="name" class="review-name" required><br><br>
            <b>Evaluation  </b><select name="evaluation" required>
                <option value=5 class="star">⭐️⭐️⭐️⭐️⭐️</option>
                <option value=4>⭐️⭐️⭐️⭐️</option>
                <option value=3>⭐️⭐️⭐️</option>
                <option value=2>⭐️⭐️</option>
                <option value=1>⭐️</option>
            </select>
            <br><br>
            <b>Comments</b><br>
            <textarea name="comments" required></textarea>
            <button type="submit" name="submit" class="send">SEND</button>
        </form>
    </div>
</main>
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