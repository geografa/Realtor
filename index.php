<?php

	$page = $_GET['page'];
	
	if (!$page) {
		$page = "Home";
	}
	include("header.php");
	
	include("content/".$page.".php");
		
	include("footer.php");
?>