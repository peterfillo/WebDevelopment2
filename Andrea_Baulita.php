<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bbt.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>The Big Bang Theory Mini Wiki</title>
</head>
<body style="background-color: #B1D7B4;">
    <div style="height: 100vh; width: 100%;">
        <header class="headerstyle">
            <h1 class="headertxt">The Big Bang Theory Mini Wiki</h1>
        </header> 
        <img src="shelly.jpeg" alt="Sheldon Cooper" class="profilepic"/>
        <h1 class="txthead">Sheldon Cooper</h1>
        <div class="infotxt">
            <p>Dr. Sheldon Lee Cooper, B.Sc., M.Sc., M.A., Ph.D., Sc.D., is a Caltech theoretical physicist. Next to his best friend Leonard Hofstadter, he’s the main protagonist of The Big Bang Theory and the titular protagonist of Young Sheldon.</p>
        </div>
        <div class="infotxt" style="margin-top: 2em; width: 35%; margin-left: 4em; margin-bottom: 4.5em; text-align: left;">
            <h3>General Information:</h3>
                <ul>
                    <li>Birthday: February 26, 1980</li>
                    <li>Gender: Male</li>
                    <li>IQ: 187</li>
                    <li>Nicknames: "Shelly", "Moonpie", "Sheldor"</li>
                    <li>Nationality: American</li>
                    <li>Origin: Galveston, Texas</li>
                    <li>Occupation: Theoretical Physicist</li>
                </ul>
        </div>
        <div style="float:right">
            <button id="disp" onclick="generateQuote()" type="button">Generate a Sheldon quote</button>
        </div>
    </div>
    <script src="bbt.js"></script>
</body>
</html>