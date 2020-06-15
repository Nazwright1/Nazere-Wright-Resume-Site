<?php 
/**
 * Template Name: Dashbnoard Resume Template
 * @author Nazere Wright
 */





?>

<!DOCTYPE html>
<html>
<head>

	<!-- include the css file -->
	<link rel="stylesheet" type="text/css" href="/Users/midorismith/Sites/wordpress/resumesite/resumesites/wp-content/themes/Nazere-Wright-Resume-Site/css/frontpage.css">
	
	<title>My Resume Dashboard</title>
	<style type="text/css">
		
ul.resMenu{		

color: blue; 

/* centered the list both horizontally and vertically */
padding: 70px 0; 
	text-align: center;
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
<div class="page-container">
<div>

	
		<ul class="resMenu" id="demo">
			<li>
				<a href="">Work Experience</a>
			</li>
			<li>
				<a href="">Skills</a>
			</li>
			<li>
				<a href="">Education</a>
			</li>
			<li>
				<a href="">Projects</a>
			</li>
			<li>
				<a href="">Certifications</a>
			</li>

		</ul>
		</div>



<div></div>

<script type="text/javascript">
	
	document.getElementById('demo').innerHTML = "Testing if this javascript statement was executed correctly"; 


</script>
</body>
</html>