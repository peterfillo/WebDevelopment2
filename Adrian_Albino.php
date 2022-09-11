
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", intial-scale=1">
		<title>Simple Webpage: Task 1 Revision</title>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<style>
			html {
				margin: 0;
				padding: 0;
			}
			h2 {
				color: black;
				font-size: 50pt;
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;
				text-align: center;
			}
			p {
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;				
				font-size: 20px;
				color: black;
				text-align: center;
			}
			button.learnmore {
				display: block;
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;	
			}
		</style>
		<script>
			function myRevision() {
				alert("This is my revision to practice HTML, CSS and JavaScript.");
			}
		</script>
	</head>
	<body>
		<section class="text">
			<h2>Simple Webpage!</h2>
			<p>This is Task 1 - Revision.</p>
		</section>
		<center><button class="learnmore" onclick ="myRevision()">What is this?</button></center>
	</body>
</html>
