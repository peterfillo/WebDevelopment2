<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Home</title>
    <style>
        body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
  }
  
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(50, 50, 50);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	box-sizing: border-box;
  }
  
  .sidenav a, .dropdown-btn {
    padding: 15px 8px 15px 32px;
    text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
	box-sizing: border-box;
	cursor: pointer;
	outline: none;
	background: none;
	border: none;
}  
  .sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
  }
  
 .sidenav .active {
	color: #f1f1f1;
	background-color: rgb(80, 80, 80);
}
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    margin-left: 50px;
}
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 16px;}
  }
    </style>
    </head>
<body>
        <div id="mySidenav" class="sidenav" style="width: 250px;">
          <!--
          Sizes:
          tiny: 1rem
          small: 2rem
          medium: 4rem
          large: 6rem
          -->
			<div class="navbar">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a class="active" href="main.html"><i class="tiny material-icons">pie_chart</i>  Main</a>
				<button class="dropdown-btn"><i class="tiny material-icons">view_compact</i> Tables
				<i class="tiny material-icons">arrow_drop_down</i>
				</button>
				<div class="dropdown-container">
					<a href="product.html">Product</a>
					<a href="productdesc.html">Product Desc</a>
					<a href="orderline.html">Order Line</a>
					<a href="order.html">Order</a>
					<a href="orderdetails.html">Order Details</a>
					<a href="customer.html">Customer</a>
					<a href="payment.html">Payment</a>
				</div>
				<a href="contacts.html"><i class="tiny material-icons">people_outline</i>  Contacts</a>
				<a href="employees.html"><i class="tiny material-icons">person_outline</i>  Employees</a>
				<a href="articles.html"><i class="tiny material-icons">description</i>  Articles</a>
				<br><br>
				<a href="settings.html"><i class="tiny material-icons">settings</i>  Settings</a>
				<a href="account.html"><i class="tiny material-icons">account_box</i>  Account</a>
			</div>
          </div>
          <div id="main" style="margin-left: 250px;">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; DLC ADVERTS</span>
			<h2>Welcome Fellow Adverts!</h2>
          </div>
          <?php 
            echo "Welcome Fellow Adverts, Today is " . date("1");
            ?>
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
          }
		  
		  var dropdown = document.getElementsByClassName("dropdown-btn");
		  var i;

		 for (i = 0; i < dropdown.length; i++) {
		 dropdown[i].addEventListener("click", function() {
		 this.classList.toggle("active");
		 var dropdownContent = this.nextElementSibling;
		 if (dropdownContent.style.display === "block") {
		 dropdownContent.style.display = "none";
		 } else {
		 dropdownContent.style.display = "block";
		 }
  });
}
          </script>
    </body>
</html>