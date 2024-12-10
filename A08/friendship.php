<?php
  $title = "Friendship Island";
  $image1 = "images/fs1.jpg";
  $image2 = "images/fs2.jpg";
  $image3 = "images/fs4.jpg";
  $backUrl = "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" href="images/icon.png" type="image/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(255, 102, 102); 
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
    }

    .container h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: rgb(200, 16, 14); 
      font-weight: bold; 
    }

    .container .image-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
      color: rgb(200, 16, 14);
      text-align: center;
    }

    .container p {
      font-size: 16px;
      margin-bottom: 30px;
      line-height: 1.5;
      color: black;
      text-align: center; 
    }

    .center-block {
      text-align: center;
      margin-bottom: 30px;
    }

    .center-block img {
      display: block;
      margin: 0 auto;
      width: 80%; 
    }

    .back-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: rgb(200, 16, 14); 
      color: black;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <!-- Navbar (sit on top) -->
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
    
    <img src="<?php echo $image1; ?>" alt="Friendship Image 1">
    <p class="image-title">Friends Since Highschool Until Now</p>
    <p>This picture brings back so many great memories with my high school friends—friends who have been there for me since those fun-filled days.
       We were always the noisy bunch in class, laughing so hard we could hardly breathe. Those times were packed with fun, a little trouble, and 
       a friendship that felt unbreakable.  I really miss those days when we would ditch class just to grab some food together before heading home.
       One of my favorite memories is when our principal called us the "Menudo Girls" after we skipped a seminar to enjoy some tasty menudo. I'll always 
       remember the carefree vibe we had back then. We created our own little universe, and nothing could spoil the laughter and adventures we experienced. 
       Though life takes us astray in all the different things we go to school for and all, my high school memories remain precious for me, and so the 
       friendship formed through these stupid moments of life will stay with me forever.</p>

    <!-- Centered Block for fs2.jpg -->
    <div class="center-block">
      <img src="<?php echo $image2; ?>" alt="Friendship Image 2">
      <p class="image-title">The Unexpected Friendship I Found Online</p>
      <p>I never thought I was going to find somebody so dramatically through the Internet because now, I'm pretty much meeting her. I had no idea that there 
        are still people who actually pay attention and know how to treat someone right. She could show me so much love in whatever ways she can do, just a 
        little gesture might speak volumes to my well-being. She has a special place in my heart, and I’m really thankful for our friendship. It’s incredible 
        how someone you’ve never met can mean so much to you, but she shows that real friendships can grow in the most surprising ways.</p>
    </div>

    <!-- Centered Block for fs4.jpg -->
    <div class="center-block">
      <img src="<?php echo $image3; ?>" alt="Friendship Image 4">
      <p class="image-title">Friends I Met Inside the Classroom</p>
      <p>I did not know that the day I stepped on campus would be the day I met some friends who would change my life so much. My friends make me feel totally 
        at ease, allowing me to be myself without any worries. With them, I can relax and show my fun, carefree side that I didn't think I could share so easily.
        We have tons of fun, great times together, and even gotten into some little bit of trouble. They just bring out the best in me, and I feel incredibly lucky 
        to have found them. It was surprising when this friendship came along, now, it is just a massive part of my college experience and I am more than grateful for it.</p>
    </div>

    <a href="<?php echo $backUrl; ?>" class="back-btn">Back to Home</a>
  </div>

</body>
</html>
