<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 0px;
        }
        h1{
            background-color: aliceblue;
        }
        #magic{
            padding: 10px;
            background-color: #A7C7E7;
            border-radius: 5px;
            border-style: hidden;
        }
    </style>
    <script>
        function myFunction() {
            document.getElementById("first").innerHTML = "This button can change text because of JavaScript."
        }
    </script>
</head>
<body>
    <p>one line skdjfksbj</p>
    <h1 id="first">Hello World! Added something !!!!  Welcome to my <i>simple website.</i> </h1>
    <button type="button" onclick="myFunction()" id="magic">Click me</button>
    <br>
    <br>
    <?php 
    echo "This is a code in PHP. Hello World!";
    ?>
</body>
</html>