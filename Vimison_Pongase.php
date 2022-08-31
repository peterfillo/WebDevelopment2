<!DOCTYPE html>
<html lang="en">
<head>
<title>Breaking Bad</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 80px;
  text-align: center;
  background: #1f6032;
  color: white;
}

.header h1 {
  font-size: 40px;
}



.row {  
  display: flex;
  flex-wrap: wrap;
}


.left {
  flex: 50%;
  background-color: #f1f1f1;
  padding: 20px;
}


.right {   

  flex: 50%;
  background-color: white;
  padding: 20px;
}



@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

</style>
</head>
<body>

<?php
$d=mktime(21, 20, 23, 8, 23, 2022);
echo "Website Finished at " . date("Y-m-d h:i:sa", $d);
?>


<div class="header">
  <h1>Breaking Bad Characters</h1>
  <h3>and their memorable quotes</h3>
</div>


<div class="row">
  <div class="left">
    <h2>Walter White</h2>
    <img alt="Walter White" src="https://www.indiewire.com/wp-content/uploads/2018/07/breakingbadformon_wide-22d0f0aa716956d518b391936d3bc323dd7a3848-s900-c85.jpg">
    <p id="walterQuote" style="display:none">“Who are you talking to right now? Who is it you think you see? Do you know how much I make a year? I mean, even if I told you, 
      you wouldn't believe it. Do you know what would happen if I suddenly decided to stop going into work? A business big enough that 
      it could be listed on the NASDAQ goes belly up. Disappears! It ceases to exist without me. No, you clearly don't know who you're 
      talking to, so let me clue you in. I am not in danger, Skyler. I am the danger. A guy opens his door and gets shot, and you think 
      that of me? No. I am the one who knocks!''<br><br>― Walt's speech to his wife Skyler, explaining who he is.</p>
    <button type="button" onclick="document.getElementById('walterQuote').style.display='block'">Show quote</button>
    <br>
    
    
    <h2>Jesse Pinkman</h2>
    <img alt="Jesse Pinkman" src="https://images.alphacoders.com/543/543496.jpg" width="900px" >
    <p id="jesseQuote" style="display:none">“I am not turning down the money! I'm turning down you! You get it?! I want nothing to do with you! 
      Ever since I met you, everything I ever cared about is gone! Ruined, turned to s---, dead, ever since 
      I hooked up with the great Heisenberg! I have never been more alone! I have nothing! No one! Alright 
      it's all gone! Get it? No, no no, why? Why would you get it? What do you even care, as long as you get 
      what you want, right? You don't give a shit about me! You said I was no good. I'm nothing! Why would 
      you want me, huh? You said my meth is inferior, right? Right? Hey! You said my cook was garbage! Hey, 
      screw you, man! Screw you!''<br><br>― Jesse upsettingly yelling at Walter White while in a hospital bed</p>
    <button type="button" onclick="document.getElementById('jesseQuote').style.display='block'">Show quote</button>
  </div>

  <div class="right">
    <h2>Gustavo Fring</h2>
    <img alt="Gustavo Fring" src='https://rare-gallery.com/thumbnail/1355273-Giancarlo-Esposito-Gus-FringBetter-Call-Saul-HD-Wallpaper.jpg' width="900px">
    <p id="gusQuote" style="display:none">"In the meantime, there's the matter of your brother-in-law. He is a problem you promised to resolve. 
    You have failed. Now it's left to me to deal with him. If you try to interfere, this becomes a much simpler matter. I will kill your wife. 
    I will kill your son. I will kill your infant daughter."<br><br>― Gustavo Fring threatening Walter White.</p>
    <button type="button" onclick="document.getElementById('gusQuote').style.display='block'">Show quote</button>
    <br>


    <h2>Jimmy McGill a.k.a. Saul Goodman</h2>
    <img alt="Saul Goodman" src="https://www.denofgeek.com/wp-content/uploads/2022/07/Better-Call-Saul-Season-6-Episode-10.jpg?fit=1920%2C1080" width="900px">
    <p id="saulQuote" style="display:none">"Hi. I'm Saul Goodman. Did you know that you have rights? The Constitution says you do, and so do I. 
      I believe that, until proven guilty, every man, woman, and child in this country is innocent. And 
      that's why I fight for you, Albuquerque!"<br><br>― Jimmy's famous television commercial as Saul Goodman</p>
    <button type="button" onclick="document.getElementById('saulQuote').style.display='block'">Show quote</button>
  </div>
</div>


</body>
</html>
