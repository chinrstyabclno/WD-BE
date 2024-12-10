<?php
  $page_title = "Family Island";
  $image_folder = "images"; 
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $page_title; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" href="<?php echo $image_folder; ?>/icon.png" type="image/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(255, 255, 204); 
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
      color: yellow; 
    }

    .container .image-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
      color: rgb(255, 223, 102); 
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
      background-color: rgb(255, 223, 102); 
      color: black;
      text-decoration: none;
      border-radius: 5px;
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.7);
    }

    .modal-content {
      background-color: #fff;
      margin: 15% auto;
      padding: 20px;
      border-radius: 10px;
      width: 80%;
      text-align: center;
    }

    .modal-content img {
      width: 80%;
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

<!-- Main content -->
<div class="container">
  <h1><?php echo $page_title; ?></h1>
  
  <img src="<?php echo $image_folder; ?>/f1.jpg" alt="Family Image 1" onclick="openModal('modal1')">
  <p class="image-title"> Our First Photo Booth Experience Together</p>
  <p>That was our first family photo booth adventure ever, and truly amazing. It was special for us as a family, which we will remember forever. 
    We had never done this before—gathered without any plan on a spur of the moment to have our pictures taken in that colorful, fun booth. When 
    we all crammed inside, excitement and a little chaos burst in, and that made it even more wonderful. From our awkward first attempts to fits 
    of laughter, every picture showed a real moment of happiness. We tried out different poses, made silly faces, and cheered each other on to be 
    creative—laughing at the funny results. Those pictures now represent the joy and togetherness that make our family unique. More than taking 
    photographs, this meant making memories, enjoying the excitement of having something new with each other, and living in this love that brings 
    so much pleasure in us. Such an experience reminded me about not being too engrossed to take fun moments that could close us further.</p>

  <img src="<?php echo $image_folder; ?>/f2.jpg" alt="Family Image 2" onclick="openModal('modal2')">
  <p class="image-title">Dining Out Together Without a Special Occasion</p>
  <p>Sometimes, the best times with family happen when there is nothing special going on. Going out to eat together, even when it is not a 
    holiday or birthday, is one of our favorite things to do. We make ordinary days feel special by having fun together. We do not wait for 
    big events to sit down at a restaurant, we find our own reasons to enjoy a meal together. Whether we are exploring a new place or going back 
    to a favorite spot, the real fun comes from our conversations, laughter, and the bond we share while eating. These outings have become a 
    special part of our lives, showing us that spending time with family doesn't always need a big reason—sometimes, the little, unexpected moments
    are the ones we cherish the most.</p>

  <img src="<?php echo $image_folder; ?>/f3.jpg" alt="Family Image 3" onclick="openModal('modal3')">
  <p class="image-title">A Complete Family Gathering</p>
  <p>There is something really special when the whole family comes together parents, siblings, cousins, tita, and tito. When we all gather, 
    it's full of love, laughter, and moments that we never want to forget. It isn't just about the close family, it's more about the extended 
    family-the uncles, the aunts, and cousins that make everything funnier and more exciting. There is that feeling of togetherness and happiness 
    when everyone is present, whether it is a simple Sunday dinner or the grand feast in celebrating special holidays. The older ones share funny 
    stories of yesteryears, while the younger lot catch up on the new happenings, and kids bring the right amount of energy in atmosphere. Every 
    moment has been more complete as it was shared with everyone; family never defines those who live together; it defines the entire cycle that 
    contains love and support. Family get-together gatherings have more to celebrate than to just be a gathering. Here, every laugh, hug, and every 
    chat makes our bond with the family stronger.</p>
  
  <a href="index.php" class="back-btn">Back to Home</a>
</div>

<!-- Modals -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('modal1')">&times;</span>
    <img src="<?php echo $image_folder; ?>/f1.jpg" alt="Family Image 1">
    <img src="<?php echo $image_folder; ?>/f4.jpg" alt="Family Image 4">
    <img src="<?php echo $image_folder; ?>/f5.jpg" alt="Family Image 5">
    <img src="<?php echo $image_folder; ?>/f6.jpg" alt="Family Image 6">
    <img src="<?php echo $image_folder; ?>/f7.jpg" alt="Family Image 7">
  </div>
</div>

<div id="modal2" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('modal2')">&times;</span>
    <img src="<?php echo $image_folder; ?>/f8.jpg" alt="Family Image 8">
    <img src="<?php echo $image_folder; ?>/f9.jpg" alt="Family Image 9">
    <img src="<?php echo $image_folder; ?>/f10.jpg" alt="Family Image 10">
    <img src="<?php echo $image_folder; ?>/f11.jpg" alt="Family Image 11">
  </div>
</div>

<div id="modal3" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('modal3')">&times;</span>
    <img src="<?php echo $image_folder; ?>/f12.jpg" alt="Family Image 12">
    <img src="<?php echo $image_folder; ?>/f13.jpg" alt="Family Image 13">
    <img src="<?php echo $image_folder; ?>/f14.jpg" alt="Family Image 14">
    <img src="<?php echo $image_folder; ?>/f15.jpg" alt="Family Image 15">
  </div>
</div>

<script>
  function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
  }

  function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
  }
</script>

</body>
</html>
