<?php
		if(isset($_POST['salutation']) && $_POST['salutation']!='')
		{
			$salutation=$_POST['salutation'];
			$first_name=$_POST['first_name'];
			$middle_name=$_POST['middle_name'];
			$last_name=$_POST['last_name'];
			
			$age=$_POST['age'];
			$designation=$_POST['designation'];
			$company_name=$_POST['company_name'];
			
			$website_publication_link=$_POST['website_publication_link'];		
			$linkedin_profile=$_POST['linkedin_profile'];
			
			$insert_photo=$_POST['insert_photo'];
			$country_code=$_POST['country_code'];
			$phone_number=$_POST['phone_number'];			
			$al_phone_number=$_POST['al_phone_number'];
			
			$country=$_POST['country'];
			$state=$_POST['state'];
			$city=$_POST['city'];
			$zip_code=$_POST['zip_code'];
			
			$email_id=$_POST['email_id'];
			$al_email_id=$_POST['al_email_id'];
			
			$business=$_POST['business'];
			$services=$_POST['services'];
			$sector_served=$_POST['sector_served'];
			
			$partnership_sought=$_POST['partnership_sought'];
			
			
			$url="http://" . $_SERVER['SERVER_NAME'];
			
			$to="sales@varcogs.com, business@varcogs.com, shriwe@gmail.com, pavankumarsharma05@gmail.com";
			$subject="Varco Partner  Enquiry";
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
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Age</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$age.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Designation</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$designation.' </td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Company Name</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$company_name.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Website Publication Link</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$website_publication_link.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Linkedin Profile</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$linkedin_profile.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Insert Photo</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$insert_photo.'</td>
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
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Alternate Phone Number</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$al_phone_number.'</td>
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
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$country.' '.$state.' '.$city.' '.$zip_code.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>State</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;"> '.$state.' </td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>City</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;"> '.$city.' </td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Zip Code</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;"> '.$zip_code.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Email Id</strong></td>
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
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Alternate Email Id</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$al_email_id.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Business</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$business.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Services</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$services.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Sector Served</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$sector_served.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Partnership Sought</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$partnership_sought.'</td>
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
				$headers .= 'From: pavankumarsharma05@gmail.com' . "\r\n";
				$mail=mail($to, $subject, $message_body1, $headers);	
				echo $mail;
		}
?>