<?php 
/**
 * Template Name: Dashbnoard Resume Template
 * @author Nazere Wright
 */





?>

<!DOCTYPE html>
<html>
<head>
	<!--webpage must have so that the client can display html properly.-->
	<meta charset="UTF-8">
	<!-- sets the width to the page to follow the screen width of any device-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- include the css file -->
	<link rel="stylesheet" type="text/css" href="/Users/midorismith/Sites/wordpress/resumesite/resumesites/wp-content/themes/Nazere-Wright-Resume-Site/css/frontpage.css">
	<!--bootstrap 3 framework CDN --> 
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	
	<!--fontawesome css framework cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--W3.css css framework-->

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- fontawesome 4 icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--fontawesome 4 --> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>My Resume Dashboard</title>
	<style type="text/css">
		
ul.resMenu{		

color: blue; 

font-style:italic;
font-variant: small-caps;
font-size: large;
/* centered the list both horizontally and vertically */
margin: 0 auto;
list-style-position: outside;

}

a{
	color: black; 
}

div{
	margin: auto;
	width: 50%;
	display: block;
}
li{ 
/*	adding margin between each list item */

margin:7em 0;


 }




	</style>


</head>

<body>
<div class="container">
<div>

	
		<ul class="resMenu" id="demo">
			<li>
				<i class="fa fa-suitcase"></i>
				<a href="" class="list-group-item btn btn-success">

						
					Work Experience <span class="badge">3</span>
				</a>
			</li>
			<li>
				<a href="" class="list-group-item btn btn-info" id='second'>Skills<span class="badge">3</span></a>
			</li>
			<li>
				<a href="" class="list-group-item btn btn-warning" >Education<span class="badge">3</span></a>
			</li>
			<li>
				<a href="" class="list-group-item btn btn-danger">Projects<span class="badge">3</span></a>
			</li>
			<li>
				<a href="" class="list-group-item btn btn-primary">Certifications<span class="badge">3</span> </a>
			</li>

		</ul>
		</div>



<div></div>
<!--implementing jQuery from google CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	
	//document.getElementById('demo').innerHTML = "Testing if this javascript statement was executed correctly"; 

//get the id of the tag by this method:


</script>
</body>
</html>