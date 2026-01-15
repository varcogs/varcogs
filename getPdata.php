<?php
include('inc/constants.inc');
include("inc/class.db.inc");
include("inc/connectData.inc");
include('inc/functions.inc');

$sqlPmode = $db->query('select * from 	varco_payment_modes where id= '.intval($_POST['pid']));
if($db->num_rows($sqlPmode)>0)
{
	$pdata = $db->fetch_array($sqlPmode);
	if($pdata['id']==1)
	{
		print stripslashes($pdata['description']);
		//
		
	}
	else
	{
		print stripslashes($pdata['description']);
	}
	
}
?>