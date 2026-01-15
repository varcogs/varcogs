<?php
		if(isset($_POST['salutation']) && $_POST['salutation']!='')
		{
			$salutation=$_POST['salutation'];
			$first_name=$_POST['first_name'];
			$middle_name=$_POST['middle_name'];
			$last_name=$_POST['last_name'];
			
			$dob=$_POST['dob'];
			$prof_experience=$_POST['prof_experience'];
			
			$designation=$_POST['designation'];			
			$company_name=$_POST['company_name'];
			
			$website_link=$_POST['website_link'];
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
			
			$area_expertise=$_POST['area_expertise'];
			$subject_of_expertise=$_POST['subject_of_expertise'];
			$year=$_POST['year'];
			$key_sectors_delivered=$_POST['key_sectors_delivered'];
			$level_delivered_to=$_POST['level_delivered_to'];
			
			$fee_charged_by=$_POST['fee_charged_by'];
			$currency_mid=$_POST['currency_mid'];
			$time=$_POST['time'];
			
			$sample_clients1=$_POST['sample_clients1'];
			$sample_clients2=$_POST['sample_clients2'];
			$sample_clients3=$_POST['sample_clients3'];
			$sample_clients4=$_POST['sample_clients4'];
			
			$prof_qualifications_name=$_POST['prof_qualifications_name'];
			$prof_qualifications_year=$_POST['prof_qualifications_year'];
			$prof_qualifications_level=$_POST['prof_qualifications_level'];
			$prof_qualifications_inst=$_POST['prof_qualifications_inst'];
			
			$certification_name=$_POST['certification_name'];
			$certification_year=$_POST['certification_year'];
			
			$award_name=$_POST['award_name'];
			$award_year=$_POST['award_year'];
			
			$recom_name=$_POST['recom_name'];
			$recom_designation=$_POST['recom_designation'];
			$recom_company=$_POST['recom_company'];
			
			$inlineRadio1=$_POST['inlineRadio1'];
			$inlineRadio2=$_POST['inlineRadio2'];
			$inlineRadio3=$_POST['inlineRadio3'];			
			$inlineRadio4=$_POST['inlineRadio4'];
			
			
			$url="http://" . $_SERVER['SERVER_NAME'];
			
			$to="sales@varcogs.com, business@varcogs.com, shriwe@gmail.com, pavankumarsharma05@gmail.com";
			$subject="Varco Career Enquiry";
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
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>DOB</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$dob.'</td>
							  </tr>
							</table></td>
						  </tr>
						   <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Professional Experience</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$prof_experience.' </td>
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
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$designation.'</td>
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
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Website/Publication Link</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$website_link.'</td>
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
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Area Expertise</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$area_expertise.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Subject of Expertise</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$subject_of_expertise.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Year</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$year.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Keys Sectors delivered to</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$key_sectors_delivered.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Level Delivered to</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$level_delivered_to.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Fee charged by</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$fee_charged_by.' '.$currency_mid.' '.$time.'</td>
							  </tr>
							</table></td>
						  </tr><tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Key/sample Clients</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$sample_clients1.' '.$sample_clients2.''.$sample_clients3.''.$sample_clients4.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Professional qualifications</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$prof_qualifications_name.' '.$prof_qualifications_year.' '.$prof_qualifications_level.' '.$prof_qualifications_inst.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Certifications</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$certification_name.''.$certification_year.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Awards & Recognitions</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$award_name.''.$award_year.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Recomendations</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$recom_name.' '.$recom_designation.''.$recom_company.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Agree to travel(Domestic)</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;">'.$inlineRadio1.' '.$inlineRadio2.' '.$inlineRadio3.' '.$inlineRadio4.'</td>
							  </tr>
							</table></td>
						  </tr>
						  <tr>
							<td height="5" align="left" valign="top"></td>
						  </tr>
						  <tr>
							<td align="left" valign="top"><table width="800" border="0" align="left" cellpadding="0"  cellspacing="0">
							  <tr>
								<td  width="200" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:5px;"><strong>Agree to travel(International)</strong></td>
								<td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#464646; padding:5px; border-bottom:#cecece dotted 1px;"> '.$inlineRadio3.' '.$inlineRadio4.'</td>
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