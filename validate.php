<?php 
function isJson($string)
{
   json_decode($string);
if (json_last_error() !== 0)
{
	echo "Something went wrong. Please contact us.";
	exit();
}
}
?>