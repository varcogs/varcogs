<?php
if($_SERVER['HTTP_HOST']!='localhost')
{ 	
	$rurl=$_SERVER['REQUEST_URI'];
	if(strpos($rurl,'dashboard')) 
	{	include('../inc/site_constants.inc');   }
	else
	{ include('site_constants.inc');	 }
	
	
	
}
else
{ include('site_constants.inc');   }
?>