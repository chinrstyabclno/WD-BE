<?php include('header.php'); ?>

<!-- Main Content -->
<!-- Header Section -->
<header class="w3-display-container" id="home">
  <img class="w3-image" src="images/home.jpg" alt="Home Catering">
  <div class="w3-display-middle">
    <img src="images/title.png" alt="Title" style="max-width:100%; height:auto;">
  </div>
</header>

<!-- Islands Section -->
<div class="islands-section" id="island">
  <h2>Christyn’s Islands of Personality</h2>
  <div class="islands-container">
    <div class="island">
      <a href="family.php">
        <img src="images/family.jpg" alt="Family Island">
        <p class="island-title" style="color: yellow;">Family Island</p>
      </a>
    </div>
    <div class="island">
      <a href="sadness.php">
        <img src="images/sadness.jpg" alt="Sadness Island">
        <p class="island-title" style="color: blue;">Sadness Island</p>
      </a>
    </div>
    <div class="island">
      <a href="hobby.php">
        <img src="images/hobby.jpg" alt="Hobby Island">
        <p class="island-title" style="color: green;">Hobby Island</p>
      </a>
    </div>
    <div class="island">
      <a href="friendship.php">
        <img src="images/friendship.jpg" alt="Friendship Island">
        <p class="island-title" style="color: red;">Friendship Island</p>
      </a>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="w3-container w3-padding-64 w3-light-grey" id="about">
  <h2 class="w3-center">About the Islands</h2>
  <div class="w3-row-padding w3-center" style="margin-top:32px">
    <div class="w3-quarter">
      <h3>Family Island</h3>
      <p>In this section, you can describe the importance of family in your life, the bond you share, and the memories you've created 
        together. Talk about the values, traditions, and experiences that define your family dynamic. Highlight the moments that have 
        shaped your understanding of family and how they continue to impact you today.</p>
    </div>
    <div class="w3-quarter">
      <h3>Sadness Island</h3>
      <p>For this island, focus on the emotions and experiences that have brought sadness into your life. You can share stories of loss, 
        heartbreak, or difficult times that have shaped who you are. It’s a place where you can reflect on grief, longing, or moments of 
        vulnerability, and how you've grown through those experiences. Use it as a way to express emotions that may not always be easy 
        to talk about.</p>
    </div>
    <div class="w3-quarter">
      <h3>Hobby Island</h3>
      <p>Here, talk about the activities or interests that bring you joy and fulfillment. Whether it’s photography, sports, gaming, or 
        creative projects, describe how these hobbies have become a part of who you are. Share how they provide an escape from everyday 
        stresses and allow you to express yourself. This section can be a place to celebrate the things you love doing in your free time.</p>
    </div>
    <div class="w3-quarter">
      <h3>Friendship Island</h3>
      <p>In this section, you can reflect on the friends who have made an impact on your life. Talk about the bonds you’ve formed, the 
        laughter and support you’ve shared, and the importance of these connections. Whether they’re childhood friends, campus buddies, 
        or online acquaintances, describe how these friendships have shaped your world and brought joy to your life.</p>
    </div>
  </div>

  <!-- Bottom Image -->
  <div class="w3-center" style="margin-top: 50px;">
    <img src="images/bottom.png" alt="Bottom Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
  </div>
</div>

<?php include('footer.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Corememories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" href="images/icon.png" type="image/png">
  <style>
    body {font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
      font-family: "Playfair Display";
      letter-spacing: 5px;
    }

    /* Full-screen header styles */
    header {
      position: relative;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
    }

    header img.w3-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .islands-section {
      text-align: center;
      margin: 50px auto;
    }

    .islands-section h2 {
      font-size: 24px;
      margin-bottom: 20px;
      font-family: Arial, sans-serif;
    }

    .islands-container {
      display: flex;
      justify-content: center;
      gap: 15px; 
    }

    .island {
      text-align: center;
      width: 400px;
    }

    .island img {
      width: 400px;
      height: 450px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .island-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
      font-family: Arial, sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    .cards-section {
      padding: 50px 0;
      text-align: center;
    }

    .cards-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      width: 250px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      text-align: center;
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card h3 {
      font-size: 18px;
      font-family: Arial, sans-serif;
      margin: 15px 0;
    }

    .card p {
      font-size: 14px;
      padding: 0 10px 15px;
    }

    @media (max-width: 768px) {
      .islands-container,
      .cards-container {
        flex-direction: column;
        gap: 30px;
      }

      .card {
        width: 80%;
      }
    }
  </style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">
      <img src="images/logo.png" alt="Logo" style="height:40px;">
    </a>
    <div class="w3-right w3-hide-small">
      <a href="#island" class="w3-bar-item w3-button">Island</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
