<html>
  <head>
    <style>
      .square {
        height: 100px;
        width: 100px;
        margin-bottom: 10px;
      }

      a.click {
        display: block;
        height: 100px;
        width: 100px;
      }
    </style>
  </head>

  <h1 id="lic" onclick="myFunction()">Click to recieve a reward</h1>
  <div style="width: 210px">
    <div onclick="" class="square" style="background-color: red; float: left">
      <a href="" class="click"></a>
    </div>
    <div class="square" style="background-color: blue; float: right">
      <a href="" class="click"></a>
    </div>
    <br />
  </div>

  <body>
    <h2>A Simple "Odd or Even Loop" using PHP</h2>
    <?php 
      for($i = 0; $i <= 100; $i++){ 
        echo $i;
	if($i % 2 == 0)
	{
		echo " Even";
	}else{
		echo " Odd";
	}
	echo "<br>"; } ?>
    <h1 id="end">ENDING USING JAVASCRIPT TO CHANGE COLOR</h1>
    <script>
      document.getElementById("end").style.color = "red";
      function myFunction() {
      document.getElementById("lic").innerHTML = "Got me Nice 1";
    }
    </script>
  </body>
</html>
