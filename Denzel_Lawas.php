<html>
    <head>
        <title> Denzel's Online Swimming Lesson</title>
        <link rel="stylesheet" href="">
</head>

    <body>
	<style>	
	*{
    		margin: 0;
    		padding: 0;
    		font-family: Arial, Helvetica, sans-serif;
	}

	.text-center{
    		text-align: center; 
	}

	
	/* Buttons */
	.btn-primary{
    		background-color: #1e90ff;
    		padding: 1%;
    		color: white;
    		text-decoration: none;
   		font-weight: bold;
	}

	.btn-primary:hover{
   		 background-color: #3742fa;
	}

	.btn-secondary{
   		background-color: #34495e;
    		padding: 1%;
  		color: white;
    		text-decoration: none;
    		font-weight: bold;
	}

	.btn-secondary:hover{
    		background-color: #2c3e50;
	}

	.btn-danger{
    		background-color: #95a5a6;
    		padding: 1%;
   		color: white;
   		text-decoration: none;
    		font-weight: bold;
	}

	.btn-danger:hover{
    		background-color: #7f8c8d;
	}
	
	/*CSS for Login */
	.login{
    		width: 20%;
   		border: 1px solid grey;
    		margin: 10% auto;
   		padding: 2%;
		background: #2FFFFF;
	}

	</style>

        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <br> <br>

            <!--Login Form Start-->
            <form action=""method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br><br>

            Password:<br>
            <input type="password" name="password" placeholder="Enter Password"><br><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            <!--Login Form End-->


            <p class="text-center">Denzel's Online Swimming Lesson </p>
        </div>

    </body>

    
</html>