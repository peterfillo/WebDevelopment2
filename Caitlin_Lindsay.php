<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Good Morning!</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&family=Uchen&display=swap" rel="stylesheet">
	<style>
        body{
            background-color: #FFEE88;
            display:flex;
            justify-content: center;
            padding-top: 8vh;
        }

        div{
            background-color: white;
            width: 45vw;
            height: 80vh;
            border-radius: 50%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        button{
            background-color: transparent;
            border: none;
        }

        h1{
            font-family: Ubuntu, sans-serif;
            font-size: 5rem;
            color: #FB8B24;
            line-height: 0.5rem;
            margin-bottom: 20px;
        }

        h3{
            font-family: Uchen, serif;
            font-size: 2rem;
            color: #8DE4FF;
            line-height: 1.8rem;
        }
        
	</style>
    </head>
    <body>
        <div>
        
              <button type="button" onclick="activateTab(event)"><h1 id="GM">Good Morning!</h1></button>
              <?php
               echo "<h3>May fortune <br/> smile upon you today</h3>";
            ?>
        </div>

        <script>
            function activateTab(e) {

                let text = document.getElementById("GM");
                text.style.color = "yellow";

            }
        </script>
    </body>
</html>
