<!DOCTYPE html>
<html>
  <head>
    <style>
      button {
        background-color: black;
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        font-size: 15px;
        cursor: pointer;
        border-radius: 12px;
      }
      p{
        color: #27186b;
      }
    </style>
  </head>
  
  <body style="text-align: center;margin-top: 10%;">
    <h1><?php echo 'Welcome Visitor!'; ?></h1>
    Enter a number : <input id="number" /><br><br>
    <button onclick="addNumbers()">Print Multiplication table</button>
    <div id="result">
  </body>

	<script>
      function addNumbers() {
        var number;
        var result = "";

        number = Number(document.getElementById("number").value);

        for(var i = 1; i <= 12; i++){
          result = result + "<p>"+number + "*" + i + "=" + number * i+"</p>";
        }

        document.getElementById("result").innerHTML = result;
      }
    </script>
</html>