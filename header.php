<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Talk to Karim</title>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />  

<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/custom.js"></script>

<!-- Nivoslider JavaScript/CSS Files -->
<script src="javascript/nivoslider.js" type="text/javascript"></script>
<link href="css/nivoslider.css" rel="stylesheet" type="text/css" />

<!-- Cufon JavaScript Files -->
<script src="javascript/cufon.js" type="text/javascript"></script> 
<script type="text/javascript">
	Cufon.replace('h1, h2, h3, h4, h5',{ hover: 'true' });		
</script>


<!-- Map specific 
<style type="text/css" media="screen">
<!--
@import "css/tabs.css";
-->
</style>
<!-- <link rel="stylesheet" href="css/sitestyle5.css" type="text/css"> -->
</head>

<body>
	<div id="header">
		<div class="header">
			<div id="logo">
				<a href="index.php?page=Home"><img src="images/logo.png" alt="Talk to Karim Logo" /></a>
			</div>
			<div id="logo_text">
				<a href="index.php?page=Home"><img src="images/logo_text5.png" alt="Talk to Karim" /></a>
			</div><!--END logo_text-->
			<div id="smoothmenu1">
				<ul>				
				<!-- Would be nice to add a dynamic page generator here.  -->
				<!-- <li class="ddsmoothmenu"><a href="content/home.php">Home</a></li> -->
				<?php $sections = array("Home", "About", "Testimonials", "Listings", "Contact");
							foreach($sections as $row) {
								echo "<li class=\"ddsmoothmenu\"><a href=\"index.php?page=$row\"";
								if($row==$page) {
									echo "class=\"selected\"";
								}
									echo ">$row</a></li>\n";
							}?>
				</ul>
			</div><!--END jqueryslidemenu-->
		</div><!--END header class-->
	</div><!--END header id-->
<!--end header-->