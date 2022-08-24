<html>

	<head>
		<link rel="stylesheet" href="style.css">
		<title>Hello World!</title>
	</head>	
	
	<body>
		<!--CSS-->
		<p class="cstyled">Hello World!<p>
		
		<!--JS-->
		<input type="button" onclick ="helloWorld()" value="Click">
		<script>
			function helloWorld(){
				alert ( "HELLO WORLD! w/ js");
			}
		</script>
		
		<!--PHP-->
		<?php
			include("hello.php");
		?>
	</body>
	
</html>