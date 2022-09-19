<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vonne Gelaga</title>
    <style media="screen">
      #top {
        background-color: red;
        width: 100%;
        height: 200px;
      }
      #left {
        background-color: green;
        width: 50%;
        height: 400px;
        float: left;
      }
      #right {
        background-color: orange;
        width: 50%;
        height: 400px;
        float: left;
      }
      #bottom {
        background-color: blue;
        width: 100%;
        height: 200px;
        float: left;
      }
    </style>
  </head>

  <body>

    <div id="top">
      <h1 id="red"></h1>
      <button type="button" onclick='document.getElementById("red").innerHTML = "Red"'>Click Me!</button>
    </div>

    <div id="left">
      <h1 id="green"></h1>
      <button type="button" onclick='document.getElementById("green").innerHTML = "Green"'>Click Me!</button>
    </div>

    <div id="right">
      <h1 id="orange"></h1>
      <button type="button" onclick='document.getElementById("orange").innerHTML = "Orange"'>Click Me!</button>
    </div>

    <div id="bottom">\
      <h1 id="blue"></h1>
      <button type="button" onclick='document.getElementById("blue").innerHTML = "Blue"'>Click Me!</button>
    </div>

  </body>
</html>
