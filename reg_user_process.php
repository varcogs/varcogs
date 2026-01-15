<?php
include('inc/constants.inc');
include("inc/class.db.inc");
include("inc/connectData.inc");
include('inc/functions.inc');
include("inc/imglibfunc.inc");
$ds= DIRECTORY_SEPARATOR;  
//IMAGETYPE_GIF=1;
 //IMAGETYPE_JPEG=2;
 //IMAGETYPE_PNG = 3
 //IMAGETYPE_BMP = 6
$storeFolder = 'formdocs';
if(isset($_POST['botCheck']))
{
	if($_POST['botCheck']=='http://atelierdigital')
	{
	//	print_r($_POST);
		//print_r($_FILES);
		
		$title = prepSQL($_POST['title']);
		$fname = prepSQL($_POST['fname']);
		$lname = prepSQL($_POST['lname']);
		$dob = prepSQL($_POST['dob']);
		$fathername = prepSQL($_POST['fathername']);
		$mothername = prepSQL($_POST['mothername']);
		$gender = prepSQL($_POST['gender']);
		$category = prepSQL($_POST['category']);
		$nationality = prepSQL($_POST['nationality']);
		$phone = prepSQL($_POST['phone']);
		$edu_qualification = prepSQL($_POST['edu_qualification']);
		$identity_type = prepSQL($_POST['identity_type']);
		$address = prepSQL($_POST['address']);
		$email = prepSQL($_POST['email']);
		$user_objective = prepSQL($_POST['user_objective']);
		$payment_id = prepSQL($_POST['payment_id']);
		$payment_details = prepSQL($_POST['payment_details']);
		$event_id = prepSQL($_POST['event_id']);
		$venue_id = prepSQL($_POST['venue_id']);
		$user_ip = prepSQL(get_ip());
		
		$uid = (uniqid());
		
		$sqlInsert = "insert into varco_users set uid = ".prepSQL($uid).", title = $title, fname = $fname, lname = $lname, dob = $dob, fathername = $fathername, mothername = $mothername, gender = $gender, category = $category, nationality = $nationality, phone = $phone, edu_qualification = $edu_qualification, identity_type = $identity_type, address = $address, email = $email, user_objective = $user_objective, payment_id = $payment_id, payment_details = $payment_details, event_id = $event_id, venue_id = $venue_id, user_ip = $user_ip";
		
		//print $sqlInsert;
		
		if($db->query($sqlInsert))
		{
			$new_id =  $db->last_id();	
			
			
			//email to admin
			
			$fullname = substr($title, 1, -1) ." ". substr($fname, 1, -1) ." ". substr($lname, 1, -1);
			$email = substr($email, 1, -1);
			
				$msg = '<table width="600" cellpadding="5" cellspacing="0"><tr>
							<td valign="top" colspan="2"> Hello Admin!, New user has been registerd with following details: </td>
						</tr>
						<tr>
							<td width="143" valign="top">Full Name: </td>
							<td width="435" valign="top"> <strong>'.$fullname.'</strong></td>
						</tr>
						<tr>
							<td valign="top">Email: </td>
							<td valign="top"> <strong>'.$email.'</strong></td>
						</tr>
						</table>';
			$to="edpt.niesbud@gmail.com";
			// mail headers			
			$headers = "From: ".SITE_NAME." <".FROM_MAIL.">\r\n";
			$headers .= "Reply-To: ".SITE_NAME." <".FROM_MAIL.">\r\n";
			$headers .= "CC: shriwe@gmail.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$headers1 = "From: ".SITE_NAME." <".FROM_MAIL.">\r\n";
			$headers1 .= "Reply-To: ".SITE_NAME." <".FROM_MAIL.">\r\n";
			$headers1 .= "BCC: shriwe@gmail.com, iam4simple@gmail.com\r\n";
			$headers1 .= "MIME-Version: 1.0\r\n";
			$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			// mail headers ends
			
			// send mail to site admin
			mail($to,"Varcogs Info - New User Registered.",$msg,$headers,"-f".FROM_MAIL."");
			sleep(1);
			mail($_POST['email'],"Varcogs Info - Thank you for your registeration.",'Hi, Thankyou for your registration.<br><br>Please note your Registration ID as mentioned below for any further enquiry.<br><br>Reg ID:<strong> '.strtoupper($uid).'</strong><br><br><br>Thanks<br><em>Team Varcogs</em>',$headers1,"-f".FROM_MAIL."");
			
			//email to admin ends
					
			//save identity file
			if (!empty($_FILES['identity_img'])) 
			{
	 
				$tempFile = $_FILES['identity_img']['tmp_name']; 
				$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds; 
				$filename=cleanStr('userID-'.time()."-".$_FILES['identity_img']['name']);		
				$targetFile =  $targetPath. $filename; 
				$uploadFile = move_uploaded_file($tempFile,$targetFile);
				
				if (exif_imagetype($targetFile) == IMAGETYPE_JPEG or exif_imagetype($targetFile) == IMAGETYPE_PNG or exif_imagetype($targetFile) == IMAGETYPE_BMP or exif_imagetype($targetFile) == IMAGETYPE_GIF) 
				{
					
						$width = getWidth($targetFile);
						$height = getHeight($targetFile);
						//Scale the image if it is greater than the width set above
						if ($width > 990){
							$scale = 990/$width;
							$uploaded = resizeImage($targetFile,$width,$height,$scale);
						}else{
							$scale = 1;
							$uploaded = resizeImage($targetFile,$width,$height,$scale);
						}
					if($uploadFile)
					{
						 $sqlUpdate = "update varco_users set identity_img = ".prepSQL($filename)." where id = ".$new_id;
						$db->query( $sqlUpdate);
					}
				 }
				 else
				 {
					 ///delete unknown file
					 unlink($targetFile);
				 }
			}
			//save identity file ends
			
			//save photo file
			if (!empty($_FILES['profile_photo'])) 
			{
	 
				$tempFile = $_FILES['profile_photo']['tmp_name']; 
				$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds; 
				$filename=cleanStr('userPHOTO-'.time()."-".$_FILES['profile_photo']['name']);		
				$targetFile =  $targetPath. $filename; 
				$uploadFile = move_uploaded_file($tempFile,$targetFile);
				
				if (exif_imagetype($targetFile) == IMAGETYPE_JPEG or exif_imagetype($targetFile) == IMAGETYPE_PNG or exif_imagetype($targetFile) == IMAGETYPE_BMP or exif_imagetype($targetFile) == IMAGETYPE_GIF) 
				{
					
						$width = getWidth($targetFile);
						$height = getHeight($targetFile);
						//Scale the image if it is greater than the width set above
						if ($width > 990){
							$scale = 990/$width;
							$uploaded = resizeImage($targetFile,$width,$height,$scale);
						}else{
							$scale = 1;
							$uploaded = resizeImage($targetFile,$width,$height,$scale);
						}
					if($uploadFile)
					{
						 $sqlUpdate = "update varco_users set profile_photo = ".prepSQL($filename)." where id = ".$new_id;
						$db->query( $sqlUpdate);
					}
				 }
				 else
				 {
					 ///delete unknown file
					 unlink($targetFile);
				 }
			}
			//save photo file ends
			
			
			
			header("Location:register-success.php?success=1&uid=".$uid);
			exit();
		}

	}
	else
	{
		header("Location:register-user.php?botAttack=1");
		exit();
	}
}
else
{
	header("Location:register-user.php");
	exit();
}


?>