<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>this content is the contact us page of phome protofily website </title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
	height: 100%;
	padding: 0;
	margin: 0;
	font-family: 'Sniglet', cursive;
}
h1{
	font-weight: normal;
	font-size: 4em;
	font-family: 'Raleway', sans-serif;
	margin: 0 auto;
	margin-top: 30px;
	width: 500px;
	color: #F90;
	text-align: center;
	margin-top: 5%;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
	0% {

		margin-left: -235px
	}
	90% {
		margin-left: 100%;
	}
	100% {
		margin-left: 100%;
	}
}

/* Animation */
@keyframes myfirst
{
	0% {margin-left: -235px}
	70% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

.fish{
background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
	width: 235px;
	height: 104px;
	margin-left: -235px;

	position: absolute;	
	animation: myfirst 24s;
	-webkit-animation: myfirst 24s;
	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
	animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
}

#fish{
	top: 120px;
	button:40%;
	
}
#fish4{
	top: 300px;
	buttom:70%;
}

#fish2{
	top: 260px;
	animation-delay: 12s;
	-webkit-animation-delay: 10s;

}
#fish3{
	top: 400px;
	animation-delay: 5s;
	-webkit-animation-delay: 12s;


}
#fish5{
	top: 900px;
	animation-delay: 5s;
	-webkit-animation-delay: 15s;

}
#fish6{
	buttom:400px;

	animation-delay: 5s;
	-webkit-animation-delay: 5s;
}


header{
	height: 160px;
	background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom ;
}

#form{
	height: 100%;	
	background-color: #98d4f3;
	overflow: hidden;
	position: relative;

	
}

img{
	border: none;
	border-radius: 50%;
	height: 7%;
	width: 5%;
}
.nabin{
	margin:10%;

}
h4{
	display: flex;
}
.split{
	height:90%;
	width: 50%;
	position: fixed;
	background-attachment: fixed;
	z-index: 1;
	top:0px;
	overflow-x:hidden ;
	padding-top: 20px;

}
.left{
	left: 0px;

}
.right{
	right: 0;

}
.contered{

	position:absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align:center;
}


</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	 <!-- this is bootstrap cdn link -->

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<header>
<h1 class="top" style="color:#000; ">Contact Me</h1>

</header>

<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>
<div class="fish" id="fish3"></div>

<div class="fish" id="fish4"></div>

<div class="fish" id="fish5"></div>

<div class="fish" id="fish6"></div>




<form id="waterform" method="post">
	<div class="col-sm-6">
	<selection class="nabin" >
		<div style="margin-top: 20%; margin-left: 5%;">
		<div class="split left">
		<div class="location" style="margin-left: 10%;">
		<img src="location.png" style="margin-top:20%; ">
		<h3>ADDRESS:</h3>
		<p>Banfikot2 pipal rukum west</p>

	</div>
	<br>

	<div class="email"style="margin-left: 10%;">
		<img src="email.jpeg" >
		<h3>Email:</h3>
		<p>nathnabin45@gmail.com, xettribabu@icloud.com</p>

		<br>
		<!-- <div class="phone"style="margin-left: 5%;"> -->
		<img src="phone.png" >
		<h3>Phone</h3>
		<p>9821983048, 9861252240 ,9746466466</p>
		<br>
		<div class="whatapp">
		<img src="what.jpeg" >
		<h3>Whatapp</h3>
		<p>9861252240</p>
		<br>
<!-- 		<div class="imo">
		<img src="imo.png" >
		<h3>imo</h3>
		<p>9821983048</p>
 -->

	</div>
	</div>
		
</selection> 
</div>
<div class="col-sm-6">
	

		
        </div>
	
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<br>
<br><br><br>
 



</div>
<br>


<!-- <a href="phome.php" class="button" style="border:3px solid yellow; border-radius:40px; font-size: 20px;
			padding-left: 10px ; padding-right: 10px; color:red; box-shadow: 0px 5px 10px; ">Back to home</a> -->
			<?php





			 ?>

</body>
</html>