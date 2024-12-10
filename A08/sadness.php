<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sadness Island</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" href="images/icon.png" type="image/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #e0f7fa;
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
      color: #0277bd;
    }

    .container .image-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
      color: #0288d1;
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
      background-color: #0277bd;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .back-btn:hover {
      background-color: #01579b;
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
      background-color: #fff;
      margin: 10% auto;
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

<div class="container">
  <h1>Sadness Island</h1>

  <img src="images/s1.jpg" alt="Sadness Image 1" onclick="openModal('sadnessModal1')">
  <p class="image-title">Remembering My Tatay</p>
  <p>January 20, 2020, is a day which I will never forget that is the saddest time in my life. As on that day, our Tatay
     passed away with which a huge emptiness is left in my heart and still hurts. That time, I miss my Tatay so much thinking 
     of him every day as he was not only my dad but also our defender, provider, and all those things which he taught. I will 
     always remember that he cared for us immensely, making sure that nothing was lacking in our household. Among my favorites 
     memories is when he used to give me money daily on school days, even if things were tough at hand. It wasn't money, it was 
     how his way of showing care in wanting to support us while ensuring we never ran short. He was my hero to me. My "Kurnel Tatay." 
     It is really hard that he's gone. But although he is gone, he's in my heart. The love, care, and sacrifices that he showed to me 
     are always within me. I will forever be part of Tatay. His memory helps me each day. </p>

  <img src="images/s2.jpg" alt="Sadness Image 2" onclick="openModal('sadnessModal2')">
  <p class="image-title">Feeling Incomplete Even When We’re Together</p>
  <p>Every old family photo will surely raise many emotions in one. In fact, sometimes, while reminiscing those times, we really miss 
    being all together at a time—when we truly enjoyed being around one another and were truly happy to see the bright side, where 
    nothing can stop or destroy our oneness, which was real to feel like we formed an integral whole. Everything is not that complicated 
    since then because emotions hidden and never told cannot arise. This was a time when all of us were indeed really joyful and every 
    moment special. However, now, with all those pictures, it feels bad to me. I do feel that something is lacking though we are physically 
    present. The happiness has kind of reduced. And now even with all those people, there is an empty space, like all the connections that 
    we had, and we don't anymore. I miss when we were a complete family, when we laughed naturally, and life was straightforward. Now, it 
    is as if we're just in a routine and no matter how hard we try to feel the same way. The smiles in those pictures feel so distant from 
    the reality we live today. I really wish we could get back to that time we were really together, when it was easy to be happy and 
    everything was just right.</p>

  <img src="images/s3.jpg" alt="Sadness Image 3">
  <p class="image-title">Missing the Little Me</p>
  <p>When I see some old photographs of me from when I was a kid, I cannot help but feel pretty sad. I miss the little me without 
    worries and heavy thoughts. Life seemed so easy when I was young. I would cry whenever I would fall down, but there were no worried 
    thoughts about how stressful a situation would be or whatever problem would bother me then. Now that I am older, I can see that I 
    have been treating myself as a neglected entity. I have been pushing hard without taking care of my health, forgetting to appreciate 
    what's good, and just losing how to take care of myself while being consumed by so much responsibility and feelings. Gazing at those 
    childhood photos brings me back to when everything was good. A time full of innocence and laughter, when I wasn't burdened with the 
    world. I miss when my smile was real and when tears were only from falling on my face, not because life was giving me a bad hand. 
    I miss that little boy who didn't have to be so tough and not carry so much weight. It makes me sad when I think about all the changes.</p>

  <a href="index.php" class="back-btn">Back to Home</a>
</div>

<!-- Modals -->
<div id="sadnessModal1" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('sadnessModal1')">&times;</span>
    <img src="images/s8.jpg" alt="Image 1">
    <img src="images/s9.jpg" alt="Image 2">
    <img src="images/s10.jpg" alt="Image 3">
    <img src="images/s11.jpg" alt="Image 4">
  </div>
</div>

<div id="sadnessModal2" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('sadnessModal2')">&times;</span>
    <img src="images/s4.jpg" alt="Image 1">
    <img src="images/s5.jpg" alt="Image 2">
    <img src="images/s6.jpg" alt="Image 3">
    <img src="images/s7.jpg" alt="Image 4">
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
