<?php
		$host = "localhost";
		$user = "root";
		$pass = "1234";
		$db = "e-library";
								
		$con = mysqli_connect($host,$user,$pass,$db);

		$title = $_POST['title'];
		$author = $_POST['author'];
		$location = $_POST['location'];

		if(isset($_POST['update']))
		{
			$id = $_POST['bookId'];
			$query = "INSERT into books(title, author, location) VALUES('$title', '$author', '$location')";
			$query_run = mysqli_query($con, $query);

		}
		header("location:librarian.php");
?>