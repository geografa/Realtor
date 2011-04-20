<?php  

// functions.php - useful global functions
// format MySQL DATETIME value into a more readable string

// function stripZero($date)
// {
//  str_replace("0","",$datearr[2])	
// }

// $month = str_replace("0","",$datearr[1]);

function formatDate($date)
{
	$datearr = explode("-", $date);
	return date("l, F jS, Y", mktime(0,0,0, $datearr[1], $datearr[2], $datearr[0]));	
}
?>