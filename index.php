<?php
	$page = $_GET['page'];
	
	if (!$page) {
		$page = "home";
	}
	include("header.php");
	
	include("content/".$page.".php");
		
	include("footer.php");
?>