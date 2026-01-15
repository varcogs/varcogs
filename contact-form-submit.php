<?php
		if(isset($_POST['salutation']) && $_POST['salutation']!='')
		{
			$salutation=$_POST['salutation'];
			$first_name=$_POST['first_name'];
			$middle_name=$_POST['middle_name'];
			$last_name=$_POST['last_name'];
			
			$email_id=$_POST['email_id'];
			$country_code=$_POST['country_code'];
			$phone_number=$_POST['phone_number'];
			$country=$_POST['country'];
			
			$organization=$_POST['organization'];
			$role=$_POST['role'];
			$type_of_service=$_POST['type_of_service'];
			$subject=$_POST['subject'];
			
			$enquiry=$_POST['enquiry'];
			
			$url="http://" . $_SERVER['SERVER_NAME'];
			
			$to="sales@varcogs.com, business@varcogs.com, shriwe@gmail.com, pavankumarsharma05@gmail.com";
			$subject="Varco Contact Us Enquiry";
			$message="submit form successful";
			$message_body1='';
			$message_body1 .= '
					<html><body>
					<table width="800" border="0" align="center" cellpadding="0"  cellspacing="0">
						  <tr>
							<td height="10" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  valign="top"><img src="'.$url.'/img/logo.png" /></td>
								<td width="10" align="left" valign="top">&nbsp;</td>
								<td align="left" valign="top"><table width="700" border="0" align="right" cellpadding="0"  cellspacing="0">
								  
								</table></td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="10" align="left" valign="top"></td>
						  </tr>
						 <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Name</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$salutation.' '.$first_name.' '.$middle_name.' '.$last_name.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Email Address</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$email_id.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Phone Number</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$country_code.' '.$phone_number.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Country</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$country.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Organization</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$organization.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Role</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$role.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Type Of Service</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$type_of_service.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Subject</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$subject.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Enquiry</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$enquiry.'</td>
							  </tr>
							</table></td>
						  </tr>
						   
						  <tr>
							<td height="10" align="left" valign="top"></td>
						  </tr>
						</table>
						</body></html>
					';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: pradipsonakar@gmail.com' . "\r\n";
				$mail=mail($to, $subject, $message_body1, $headers);	
				echo $mail;
		}
?>