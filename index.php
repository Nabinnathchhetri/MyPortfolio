<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- this link is the css bootstrap -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

	<!-- this link is  the java script -->





	<title>this is a my protofili website </title>
	<style type="text/css">
		.hight{
			background-image: url(background.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
		img:hover{
			left:40px;
			
			

		}
	</style>

	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		h2 {
			
	animation: nabin 2s linear infinite;
	border-radius: 40px;
	


}
@keyframes nabin{
	10%{
		color:lime;
	
	}
	20%{
		color:red;
		font-size: 30px;

		
	
	
	
}

20%{
	color:white;


}
30%{
	color: red;
	font-size: 70px;
}
40%{
	color:blue;
	font-size: 50px;
}
50%{
	color:cyan;
	font-size: 20px;
	text-align: left;
}




		}
		@media screen and (max-width:600rem)
		{
			

			h1{
				font-size: 5rem;

			}
			h2{
				font-size: 5rem;
			}
			.logo{
				height: 5%;
				width: 5%;
			}
		}





	</style>
</head>
<body>
	<div class="hight">
		<div class="navbar">

			<img src="images.png" class="logo">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="about1.php">ABOUT</a></li>
				<li ><a href="test.php">SKILLS</a></li>
				<li><a href="#">PROJECT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
			
		</div>
		<br>
		<div style="float: right; width:47%; ">
			<img src="dbn.jpeg" style="height: auto; width:65%; right:50px; box-shadow: 0 0 10px #999999; float:right; border-radius:90%; position: relative; 	transform: translate(-40%);transition:left 3s ease;


" >
			<br><br> 
			
		</div>
		
		<div class="info">

			<h2>Hi, i'm <span>Nabin</span>,</h2>
			<h1><span>W</span>EB <span>D</span>EVELOPER   <span>AND</span></h1>
		
			
			
			<h1><span>G</span>RAP<span>H</span>ICS <span>D</span>ESI<span>G</span>NER</h1>
			<h3> Graphics Designer web designer and developer <br>from dang nepal.I create better website  and design</h3>
			<br><br>
			<a href="cv.docs" class="button" style="border:5px solid yellow; border-radius:40px; font-size: 40px;
			padding-left: 10px ; padding-right: 10px; color:red; box-shadow: 0px 5px 10px; ">Hire me</a>
			
		</div>
		<br><br>
<!-- 		<div style="float: right;">
			<img src="dbn.jpeg" style="height: auto; width:50%; right:188px; box-shadow: 0 0 10px #999999; float:right; border-radius:90%; position: relative;
" >
			<br><br>
			
		</div> -->
		<br><br>
		<h1 class="h3">FOLLOW ME</h1>      

		<div class="icons" style="margin:6%; margin-bottom: 10%;" >
			<a href="https://www.facebook.com/profile.php?id=100066004683829"><ion-icon name="logo-facebook"></ion-icon></a>
			<a href="http://tiktok.com/@n.n772"><ion-icon name="logo-tiktok"></ion-icon></a>
			
			<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
			<a href="#"><ion-icon name="logo-twiter"></ion-icon></a>

			
		</div>
		
	
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<br>
<br><br><br>

	
 
 
 <?php 
include"footer.php";

  ?></div>

 
</body>
</html>