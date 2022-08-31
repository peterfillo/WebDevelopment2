<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>

<body>

<title>Dre</title>
    <style>
      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 20px 34px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <center><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="button">Surprise</a></center>

<h1>Peek Into My Life</h1>

<?php
echo "<p>Get to know me : D
<br>
My Name is Andrea Kaye A. Chiang.<br>
I am 3/4 Chinese and 1/4 Filipino.<br>
I have a mixed breed dog named Bob.<br>
His pictures take up half of my phone's storage space.</p>";
?>
<hr>
<br>
<div class="gallery">
  <a target="_blank" href="dog/baby.jpg">
    <img src="dog/baby.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">When I first got him, he was around 2 months old</div>
</div>

<div class="gallery">
  <a target="_blank" href="dog/bob2.jpg">
    <img src="dog/bob2.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">He turned 2 years old!</div>
</div>

<div class="gallery">
  <a target="_blank" href="dog/bob3.jpg">
    <img src="dog/bob3.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">He loves eating water like this but hates baths</div>
</div>

<div class="gallery">
  <a target="_blank" href="dog/bob5.jpg">
    <img src="dog/bob5.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">He loves walks and venturing out on his own</div>
</div>
<div class="gallery">
  <a target="_blank" href="dog/bob8.jpg">
    <img src="dog/bob8.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">He is 6 months old here!</div>
</div>
<div class="gallery">
  <a target="_blank" href="dog/bob4.jpg">
    <img src="dog/bob4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">He loves to make new friends</div>
</div>
<div class="gallery">
  <a target="_blank" href="dog/bob7.jpg">
    <img src="dog/bob7.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">His first haircut</div>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
<p>Games That I Play</p>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://media.npr.org/assets/img/2020/11/25/genshin_wide-59ae4e3c66176e7b048f5c7dbf2abd4b136cbe00.jpg" style="width:100%">
  <div class="text">Genshin Impact</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://www.gameinformer.com/sites/default/files/styles/thumbnail/public/2020/10/06/b8f0ce5e/overwatch_battle.jpg" style="width:100%">
  <div class="text">Overwatch</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/413150/ss_4ff3fe6e9555052aaa076866407b0ba68fe73132.1920x1080.jpg?t=1608624324" style="width:100%">
  <div class="text">Stardew Valley</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br><br>


<hr>



<p>My All Time Favorite Songs</p>
<iframe style="border-radius:12px" 
src="https://open.spotify.com/embed/playlist/2o1T1ROwpyXRjXMsZmIcyk?utm_source=generator" 
width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; 
encrypted-media; fullscreen; picture-in-picture">
</iframe>

<br><br>
<hr>
<p>My Socials</p>
<br><br>

<div class="middle">
      <a class="btn" href="https://www.facebook.com/profile.php?id=100005489655656">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="btn" href="https://twitter.com/oatsarelife">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="btn" href="https://www.instagram.com/dreislaughing/">
        <i class="fab fa-instagram"></i>
      </a>
    </div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



<style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
  text-align: justify;
  text-justify: inter-word;
}

.dark-mode {
  background-color: black;
  color: white;
}
</style>
</head>
<body>


<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

</body>

<div class="footer">
  <button onclick="myFunction()">Toggle Dark/Light Mode</button>
</div>
<style>
h1 {
	text-align: center;
	font-family: Monaco;
}

p {
	text-align: center;
	font-family: Monaco;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}

div.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 100%;
}

div.desc {
  padding: 15px;
  text-align: center;
  font-family: Monaco;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-family: Monaco;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.middle{
  position: absolute;
  transform: translateY(-50%);
  width: 100%;
  text-align: center;
}
.btn{
  display: inline-block;
  width: 90px;
  height: 90px;
  background: #f1f1f1;
  margin: 10px;
  border-radius: 30%;
  box-shadow: 0 5px 15px -5px #00000070;
  color: #3498db;
  overflow: hidden;
  position: relative;
}
.btn i{
  line-height: 90px;
  font-size: 26px;
  transition: 0.2s linear;
}
.btn:hover i{
  transform: scale(1.3);
  color: #f1f1f1;
}
.btn::before{
  content: "";
  position: absolute;
  width: 120%;
  height: 120%;
  background: #3498db;
  transform: rotate(45deg);
  left: -110%;
  top: 90%;
}
.btn:hover::before{
  animation: aaa 0.7s 1;
  top: -10%;
  left: -10%;
}
@keyframes aaa {
  0%{
    left: -110%;
    top: 90%;
  }50%{
    left: 10%;
    top: -30%;
  }100%{
    top: -10%;
    left: -10%;
  }
}
</style>

</html>