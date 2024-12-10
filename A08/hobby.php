<?php
  $title = "Hobby Island";
  $image1 = "images/h1.jpg";
  $image2 = "images/h2.jpg";
  $image3 = "images/h3.jpg";
  $image4 = "images/h4.jpg";
  $image5 = "images/h5.jpg";
  $image6 = "images/h6.jpg";
  $image7 = "images/h7.jpg";
  $icon = "images/icon.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" href="<?php echo $icon; ?>" type="image/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #e0f7e3; 
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      text-align: center;
    }

    .container img {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      cursor: pointer;
    }

    .container h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #2e7d32; 
    }

    .container .image-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
      color: #2e7d32; 
    }

    .container p {
      font-size: 16px;
      margin-bottom: 30px;
      line-height: 1.5;
      color: black; 
    }

    .back-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #2e7d32; 
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
      background-color: white;
      margin: 10% auto;
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      text-align: center;
    }

    .modal-content img {
      width: 90%;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    .close-btn {
      color: black;
      float: right;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.php" class="w3-bar-item w3-button">Home</a>
    <a href="family.php" class="w3-bar-item w3-button">Family Island</a>
    <a href="sadness.php" class="w3-bar-item w3-button">Sadness Island</a>
    <a href="hobby.php" class="w3-bar-item w3-button">Hobby Island</a>
    <a href="friendship.php" class="w3-bar-item w3-button">Friendship Island</a>
  </div>
</div>

<div class="container">
  <h1><?php echo $title; ?></h1>

  <img src="<?php echo $image1; ?>" alt="Hobby Image 1">
  <p class="image-title">Playing CODM in My Free Time</p>
  <p>So my favorite thing to do is get Call of Duty Mobile out with some free time that pops up. It's a getaway, really. That I can dive 
    into such a fun action-strategy-based game. Whether it's lone games or teaming with some friends, each one still creates a new challenge 
    every game. The thrill of fighting, the joy of teamwork, and the excitement of winning-it's really super fun. To me, it's not just a game, 
    it's how I chill out, escape from all kinds of everyday stress, and have a good time. CODM has become my favorite hobby when I need something 
    taken off, and every game gives me a feeling of achievement, helping me recharge for whatever comes next.</p>

  <img src="<?php echo $image2; ?>" alt="Hobby Image 2" onclick="openModal()">
  <p class="image-title">Capturing the Beauty of Sunsets and Delicious Moments</p>
  <p>One of the things I really enjoy is taking photos, especially during sunset. There's something really special about the colors 
    in the sky, the gentle light, and the calm feeling that comes when you watch the sun go down. I love to capture those moments, 
    trying to hold onto the beauty of nature in just one picture. It is not just sunsets that inspire me, I also get excited about 
    photographing food. Whenever I see a dish that looks amazing, I just have to snap a photo. Whether it's a stunning sunset or a 
    beautifully arranged meal, I love to capture the beauty in the little things around me. Those are always reminding me of the life 
    and helping me notice the minuest details that are usually unseen. Taking pictures is somehow my way of slowing life down and 
    enjoying the view around me, whether the scenes are nature or my desired foods.</p>

  <img src="<?php echo $image3; ?>" alt="Hobby Image 3">
  <p class="image-title">Watching Movies to Unwind</p>
  <p>In general, watching movies is my most favorite thing to do for a break or relaxation when am feeling stressed. 
    It becomes a form of mini-break in the middle of all those bustle and frenzy that life makes daily. The most enjoyable 
    use of my free time happens to be viewing a superb movie—whether an action piece, drama, or even comedy. Movies transport 
    me to a world away from my own; it helps me forget the issues of my life, making it all about enjoying that one moment. 
    It provides me with a chance to rejuvenate and clear my mind. To me, it's not just a hobby but rather an exercise in relaxing 
    and having fun while, sometimes, being inspired. Movies have been my best comforter when things get really tough, but it leaves 
    me satisfied in being fresh and ready for whatever life will be dishing out to me.</p>

  <a href="index.php" class="back-btn">Back to Home</a>
</div>

<!-- Modal -->
<div id="hobbyModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()">&times;</span>
    <img src="<?php echo $image4; ?>" alt="Hobby Image 4">
    <img src="<?php echo $image5; ?>" alt="Hobby Image 5">
    <img src="<?php echo $image6; ?>" alt="Hobby Image 6">
    <img src="<?php echo $image7; ?>" alt="Hobby Image 7">
  </div>
</div>

<script>
  function openModal() {
    document.getElementById('hobbyModal').style.display = 'block';
  }

  function closeModal() {
    document.getElementById('hobbyModal').style.display = 'none';
  }
</script>

</body>
</html>
