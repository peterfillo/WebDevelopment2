<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color: #17202A;
                color: #EAECEE;
            }
        </style>
    </head>
    <body>
        <h1>My first Website!</h1>
        <p><?php echo "Hello World!" ?></p>
        <p>It has been <span id="counter"></span> seconds!</p>
        <script>
            var counter = 0;
            function update() {
                counter++;
                document.getElementById("counter").textContent = (counter / 10).toString();
            }
            setInterval(update, 100);
        </script>
    </body>
</html>