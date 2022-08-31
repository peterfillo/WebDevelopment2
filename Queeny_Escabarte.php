<!D0CTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Activity 1</title>
		<style>
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
			body {
				width: 100vw;
				height: 100vh;
				display: inline-block;
				justify-content: center;
				align-items: center;
				background: #f3f0f1;
				position:absolute;
			}

			@keyframes fadein{
				0%{opacity:0;}
				100%{opacity:1;}
			}

			.container {
				display:flex;
				padding:20px;
				position: relative;
			}
			.content{
				width:97%;
				position: absolute;
				animation: 3s fadein;
				
			}

			a{
				text-decoration:none;
				color: #6C6C6E;
				line-height: 100px;
				font-size: 32px;
			}

			.button{
				width: 400px;
				height: 100px;
				background: #f3f0f1;
				position: relative;
				background: #f3f0f1;
				margin-bottom: 25px;
				border-radius: 32px;
				text-align: center;
				cursor: pointer;
				transition: all 0.1s ease-in-out;
				box-shadow: -6px -6px 10px rgba(255, 255, 255, 0.8), 6px 6px 10px rgba(0, 0, 0, 0.2);
				margin-right:50px;
				
			}

			.button:hover{
				opacity: 0.5;
				box-shadow: -6px -6px 10px rgba(255, 255, 255, 0.8), 6px 6px 10px rgba(0, 0, 0, 0.2);
			}

			.button:active{
				opacity: 1;
				box-shadow: inset -10px -4px 20px rgba(255, 255, 255, 0.5), inset 16px 16px 32px rgba(0, 0, 0, 0.5);
				color: #79e3b6;
			}

			.hover2{
				width: 400px;
				height: 100px;
				background: #f3f0f1;
				border-radius: 32px;
				text-align: center;
				cursor: pointer;
				transition: all 0.1s ease-in-out;
				box-shadow: -6px -6px 10px rgba(255, 255, 255, 0.8), 6px 6px 10px rgba(0, 0, 0, 0.2);
				margin-right:50px;
			}
			.hover2:hover{
				opacity: 0.5;
				box-shadow: -6px -6px 10px rgba(255, 255, 255, 0.8), 6px 6px 10px rgba(0, 0, 0, 0.2);
			}
			.hover2:active{
				opacity: 1;
				box-shadow: inset -10px -4px 20px rgba(255, 255, 255, 0.5), inset 16px 16px 32px rgba(0, 0, 0, 0.5);
				color: #79e3b6;
			}
			img{
				height:100%;
				width:100%;
			}

			.col1{
				float:left;
				width:23%;
				padding:50px;
			}

			.col2{
				float:left;
				width:50%;
				padding:50px;
			}
			.col3{
				float:left;
				width:20%;
				padding:50px;
				font-size:30px;
			}
			h1{
				font-size:100px;
			}
			p{
				font-size:30px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		  $("#showhide").click(function(){
			$("img").toggle();
		  });
		  $("#fadeInOut").click(function(){
			$("img").fadeToggle("slow");
		  });
		  $("#slide").click(function(){
			$("img").slideToggle();
		  });
		  $("#anim").click(function(){
			var div = $("img");
		  div.animate({height: '300px', opacity: '0.4'}, "slow");
		  div.animate({width: '300px', opacity: '0.8'}, "slow");
		  div.animate({height: '100px', opacity: '0.4'}, "slow");
		  div.animate({width: '100px', opacity: '0.8'}, "slow");
		  });
		});

		</script>
		</head>
	<body>
		<div class="container">
			<a href="#"><div class="hover2" href="home.php">Me</div></a>
			<a href="#"><div class="hover2" href="home.php">Favorites</div></a>
			<a href="#"><div class="hover2" href="home.php">Form</div></a>
			<a href="#"><div class="hover2" style="background:#B6D4C7;" href="home.php">Home</div></a>
		</div>
		<div class="content">
			<div class="col1">
				<button id="showhide">Show/Hide</button>
				<button id="fadeInOut">FadeIn/FadeOut</button>
				<button id="slide">Slide</button>
				<button id="anim">Animation</button>
				<img src="axolotl.jpg"/>
			</div>
			<div class="col2">
			<h1>Queeny Mae Escabarte</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col3">
				<?php
				echo date("l") . "<br>";
				echo "Today is " . date("Y-m-d") . "<br>";
				echo date("h:i:sa");
				?>
			</div>
		</div>
	</body>
</html>