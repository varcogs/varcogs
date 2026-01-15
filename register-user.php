<?php
include('inc/constants.inc');
include("inc/class.db.inc");
include("inc/connectData.inc");
include('inc/functions.inc');

if(!isset($_GET['event_venue_id']))
{
	header("Location:events.php");
	exit();
}
$event_venue_id = ($_GET['event_venue_id']);
$id_det=explode("_",$event_venue_id);
$event_id = intval($id_det[0]);
$venue_id = intval($id_det[1]);

if($event_id<=0)
{
	header("Location:events.php");
	exit();
}

//get event detail
$compSql = 'select e.title, e.id as eventid, ex.venue, ex.e_start, ex.e_end, ex.id as venueid, ex.time_from, ex.time_to from varco_events e, varco_events_details ex where e.id = '.$event_id.' and ex.id='.$venue_id;

//
//exit;
$eventSql=$db->query($compSql);

if($db->num_rows($eventSql)<=0){ header("Location:events.php"); 	exit(); } else {

$eventData=	$db->fetch_array($eventSql);
}


?> <!DOCTYPE html>

<html lang="en">



<head>

    <title>Register for <?php print stripslashes($eventData['title']); ?> | VARCO </title>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

			<link href="img/favicon.png" rel="icon">

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/template.css" rel="stylesheet">

	   <link href="css/jquery.bxslider.css" rel="stylesheet" />

	   <link href="css/clientlibs1.min.css" rel="stylesheet" />

	   <link href="css/clientlibs.min.css" rel="stylesheet" />

	   

	   <link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

	   <link href="//fonts.googleapis.com/css?family=Shadows+Into+Light"  rel="stylesheet" type="text/css">

		<link href="//fonts.googleapis.com/css?family=Lato:400,700,300"  rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<style>

		.about_sec{background: #eef3f3;padding:15px;font-size:14px;}

		

		</style>

  </head>

  <body>

    

<div id="wrap">

	<!--Head Wrap Start-->    
		<div class="container-fluid" style="padding:0px !important">
		<div class="row" >

		<div id="header" >

		<div id="head_wrap">

			<div class="col-sm-3">

			<div class="logo">

			<img src="img/logo.png" alt="varcogs">

			</div>

			</div>

			<div class="col-sm-9" >

			

				<div class="top">

				

				<span>

					<a href="#"><img src="img/facebook.png" alt="facebook page "></a> 

					<a href="#"><img src="img/linkedin.png" alt="Linkedin page "></a></span>

				</div>

				

				

				<nav class="navbar navbar-inverse">

					<div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>

      

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">

						<li><a href="index.html" >Home</a></li>

						<li><a href="About-us.html" >About us</a></li>

						

                         <li class="dropdown "><a href="#" class="dropbtn ">Services<span class="caret"></span></a>

                            <div class="dropdown-content">

                                  <a href="bc.html">Business Consulting</a>

                                  <a href="me.html">Market Entry Services</a>

                                  <a href="hsc.html">Human Capital Solutions</a>

                                </div>

                                

                            

                            </li>

                        <li><a href="sectors.html" >Sectors</a></li>

                            <li class="dropdown "><a  class="dropbtn" href="#">Join Us<span class="caret"></span></a>

                            <div class="dropdown-content">

                                  <a href="partners-form.php"> Partners</a>

                                  <a href="experts-form.php"> Consultants & Trainers </a>

                                  <a href="career-form.php">Careers</a>

                            </div>

						</li>

	  

						<li ><a href="contact.html">Contact us</a></li>

        

      </ul>

     

    </div>

  </div>

</nav>

				

				

			

			</div>

		</div>

		</div>

		</div>	

		</div>
	<!--//Head Wrap End-->

		<div class="clearfix"></div>

         <div class="container">

			<div class="col-sm-12 topcommon">			

						<div class="col-sm-12 about-test padding-zero">

						<div class="border"></div>

						 <!-- <h3 class="abut-head about">Register for Event</h3>-->

						<p class="about_heading ">
                       <span><a href="events.php" title="Back to events" data-toggle="tooltip"><em><i class="glyphicon glyphicon-chevron-left"></i> Back </em></a></span>
                       </p>
                       
                            <?php
					  if(isset($_GET['botAttack']))
					  {
						  if($_GET['botAttack']==1)
						  {
							  ?>
                              <div name="messageBox">
                              <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sorry!</strong> We are unable to serve you.
</div>
                              </div>
                              <?php
						  }
					  }
					  ?>
                      
                          <!-- user form -->
                      
                  <form action="reg_user_process.php" method="post" name="frmReg" id="frmReg" class="form-horizontal"  enctype="multipart/form-data">
                      
                        <div class="text-center">
                        <img src="img/niesbud-logo.jpg" alt="THE NATIONAL INSTITUTE FOR ENTREPRENEURSHIP AND SMALL BUSINESS DEVELOPMENT (NIESBUD)">
                        <h4 style="font-family:Arial, Gotham, 'Helvetica Neue', Helvetica,  sans-serif">THE NATIONAL INSTITUTE FOR ENTREPRENEURSHIP AND <br>SMALL BUSINESS DEVELOPMENT (NIESBUD)</h4>
                        <p>A-23, SECTOR 62, Institutional Area, NOIDA- 201309 (U.P.) </p>
                        
                        <strong style="color:rgba(233,0,3,1.00);text-decoration:underline">Application / Registration Form</strong>
                        <h3 align="center"><?php print stripslashes($eventData['title']); ?></h3>
                        <h4 align="center">  &nbsp;<small> Date/time: <em><?php  print stripslashes($eventData['time_from']); ?>, <?php  print (date('l, d M Y',strtotime($eventData['e_start']))); ?>
                        
                        <?php 
                        if($eventData['e_end'] > $eventData['e_start'])
                        {
                        ?><?php  print ' &nbsp; &nbsp; to   &nbsp; &nbsp;'.stripslashes($eventData['time_to']).", ". (date('l, d M Y',strtotime($eventData['e_end']))); ?><?php
                        }
                        ?></em>   <br>   Venue: &nbsp;<?php  print stripslashes($eventData['venue']); ?></small>
                        </h4>
                      </div>
                     
                       
                      
                   
                      <input type="hidden" name="event_id" value="<?php print $eventData['eventid']; ?>">
                       <input type="hidden" name="venue_id" value="<?php print $eventData['venueid']; ?>">
                      
                    <!-- bgcolor -->    <div style="background:rgba(215,215,215,0.50);padding:12px 0px;border:1px solid #BFBFBF">
                        <div class="row">
                        
                        	<div class="col-sm-2">
                            Name:*
                            <select  name="title" class="form-control" data-validation="required">
                            	<option value="">-Select Title-</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss">Miss</option>
                                
                            </select>	
                            </div>
                            
                            <div class="col-sm-7">
                            <br>
                           <input type="text" class="form-control" placeholder="Full Name" name="fname" data-validation="required">
                            <input type="hidden" class="form-control" placeholder="Last Name" name="lname" data-validation="">
                            </div>
                           
                           
                            
                            <div class="col-sm-3">
                           Date of Birth*
                           <input type="text" class="form-control" placeholder="i.e. 1980-27-06" name="dob" id="dob" data-validation="birthdate" 
		 data-validation-help="yyyy-mm-dd">
                            </div>
                        </div>
                        
                        <br>

                        <div class="row">
                        	<div class="col-sm-6">
                            Father/Husband Name:
                             <input type="text" class="form-control" placeholder="Father/Husband Name" name="fathername" >
                            </div>
                           
                           
                            <div class="col-sm-6">
                            Mother Name:
                             <input type="text" class="form-control" placeholder="Mother Name" name="mothername" >
                            </div>
                        </div>
                        <br>

                        <div class="row">
                        	<div class="col-sm-2">
                            Gender:<br>
                            <label style="font-weight:normal"> <input type="radio"  name="gender" value="Male"> Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label style="font-weight:normal"> <input type="radio"  name="gender" value="Female"> Female</label>
                            </div>
                           
                           <div class="col-sm-4">
                            Category:
                             <select class="form-control" name="category">
                             	<option value="" >-Select category-</option>
                                <option value="General" >General</option>
                                <option value="SC" >SC</option>
                                <option value="ST" >ST</option>
                                <option value="OBC" >OBC</option>
                                <option value="Minority" >Minority</option>
                                <option value="Others" >Others</option>
                             </select>
                            </div>
                            
                            <div class="col-sm-3">
                            Nationality:
                             <input type="text" class="form-control" placeholder="e.g. Indian" name="nationality" id="nationality" >
                            </div>
                             <div class="col-sm-3">
                            Phone/Mobile No:
                             <input type="text" class="form-control" placeholder="e.g. xx-xxx-xxxxxxx" name="phone" >
                            </div>
                        </div>
                        <br>

                        
                         <div class="row">
                        	<div class="col-sm-6">
                            Educational Qualification:
                             <input type="text" class="form-control" placeholder="e.g. Graduate, Post Graduate etc." name="edu_qualification" id="edu_qualification" >
                            </div>
                           
                           <div class="col-sm-3">
                            Identity Type*:
                            <select class="form-control" name="identity_type" data-validation="required" id="identity_type">
                             	<option value="" >-Select Type-</option>
                                <option value="Voter ID Card" >Voter ID Card</option>
                                <option value="Ration Card" >Ration Card</option>
                                <option value="Passport" >Passport </option>
                                <option value="Driving License" >Driving License</option>
                                <option value="Pan Card" >Pan Card</option>
                                <option value="Bank Account No" >Bank Account No</option>
                                
                                <option value="BPL Card" >BPL Card</option>
                                <option value="UID" >UID</option>
                                <option value="Similar Document" >Similar Document</option>
                             </select>
                            
                            
                            </div>
                            <div class="col-sm-3">
                            Upload Identity*:
                             <input type="file"  name="identity_img"  id="identity_img">
                            </div>
                        </div>
                        <br>
						 <div class="row">
                        	<div class="col-sm-6">
                            Address:
                             <input type="text" class="form-control" placeholder="Complete Address" name="address" >
                            </div>
                           
                           <div class="col-sm-3">
                            Email: 
                             <input type="text" class="form-control" placeholder="e.g. user@domain.com" name="email" >
                        
                        
                            
                            </div>
                           
                           <div class="col-sm-3">
                            Upload Photo*:
                             <input type="file"  name="profile_photo" id="profile_photo" >
                        
                            
                            </div>
                           
                        </div>
                        
                         <br>
						 <div class="row">
                        	<div class="col-sm-6">
                            Trainee's Objective: 
                            
                             <select class="form-control" name="user_objective">
                             	<option value="" >-Select category-</option>
                                <option value="Self Employment" >Self Employment</option>
                                <option value="Wage Employment" >Wage Employment</option>
                                <option value="Knowledege" >Knowledege</option>
                             </select>
                            
                            
                            
                            </div>
                            
                            <div class="col-sm-3">
                           Payment Mode*:
                           
                           <?php
						   $sqlPmode = $db->query('select * from varco_payment_modes');
						   if($db->num_rows($sqlPmode)>0)
						   {
							   ?>
                               <select class="form-control" name="payment_id" data-validation="required">
                               	<option value="">-Select-</option>
                                <?php
								while($pMode = $db->fetch_array($sqlPmode))
								{
									?>
                                    <option value="<?php print $pMode['id'] ?>"><?php print $pMode['title'] ?></option>
                                    <?php
								}
								?>
                               </select>
                               <?php
						   }
						   ?>
                            <div class="payment_data"></div>
                            </div>
                            <div class="col-sm-3">
                            Payment Details:
                            <textarea name="payment_details" placeholder="i.e. DD Number, Transaction No. etc." class="form-control"></textarea>
                           
                           		
                            
                            </div>
                           
                        </div>
                         <div class="row"><div class="col-sm-6 text-center"></div>
                        <div class="col-sm-6 ">
                        <strong>Based on Seat Availability:</strong><br>
                        <strong>Cash</strong> :  Can be paid at the venue at 9am on the <?php print (date('d M, Y',strtotime($eventData['e_start']))); ?>

                        
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-12 text-center"><br>

                        <div style="display:none">
                       	 <input  type="text" value="http://atelierdigital" name="botCheck">
                        </div>
                        *marked fields are mandatory&nbsp;&nbsp;<button type="submit" class="btn btn-primary"> SUBMIT </button>
                        </div>
                        </div>
                        
                        </div> <!-- //bgcolor -->
                      
                      </form>
                      
                       <!--//user form -->
                       
                       
                        </p>

						</div>

				

			</div>

			<div class="spcae-width-clear-fix"></div>


			</div>

		

		<br/>

	<br/>




	<div class="row" >

 	<div class="col-sm-12 endcontainer">

	<div class="container">

		<div class="col-sm-6 test we "  ><p>We'd like to hear from you about </p></div>

		<div class="col-sm-6 " >

			

		<a href="experts-form.php"><button type="button" class="btn btn-danger">Consultants & Trainers</button> </a> 

			<a href="partners-form.php"><button type="button" class="btn btn-danger">Partnerships</button></a>

		<a href="contact.html"> <button type="button" class="btn btn-danger"> Your Needs </button></a></div>

			

			

			</div> 

	</div>

		

		</div>

	

	</div>

	

		 <div class="clear"></div>

    <!--Above Footer End-->

     <div class="clear"></div>

    <!--Above Footer Start-->

		<div id="footer">

			<div class="container" >

			<div id="foot_wrap">

				

				<div id="foot_top"></div>

				

				

				<div class="footmenu">	

			

				<div class="row">

					<div class="col-sm-2 padding_zero" id="align_for_mobile">

						

						<div class="heading"><a href="index.html">Home</a></div>

						

						</div>

					<div class="col-sm-2 padding_zero  footer_width" id="align_for_mobile">

						

						<div class="heading"><a href="About-us.html">About us</a></div>

						<ul>

						<li><a href="goal.html">Goals</a></li>

						<li><a href="team.html">Team</a></li>

						<li><a href="key-business.html">Key Business Areas	</a></li>

						

						<li><a href="partners.html">Partners</a></li>

						</ul>

						</div>

					

					<div class="col-sm-2 padding_zero  " id="align_for_mobile">

						<div class="heading"><a href="bc.html">Our Services</a></div>

						<ul>

						<li><a href="bc.html">Business Consulting</a></li>

						<li><a href="me.html">Market Entry Services</a></li>

						<li><a href="hsc.html">Human Capital Solutions</a></li>

						</ul>

						

						</div>

						<div class="col-sm-2 padding_zero " id="align_for_mobile">

						

						<div class="heading"><a href="sectors.html">Sector</a></div>

						<ul>

						<li><a href="sectors.html">Skills & Education</a></li>

						<li><a href="sectors.html">Healthcare</a></li>

						<li><a href="sectors.html">Hospitality & Travel Services</a></li>

					

						<li><a href="sectors.html">Manufacturing</a></li>

						<li><a href="sectors.html">Retail</a></li>

						<li><a href="sectors.html">Energy Sector</a></li>

						<li><a href="sectors.html">BFSI</a></li>

						<li><a href="sectors.html">SMB</a></li>

						</ul>

						</div>

					

					<div class="col-sm-2 padding_zero " id="align_for_mobile">

						

						<div class="heading">Contact us:</div>

						<div class="presence">

						<p>

						India Office:<br>

						H - 18,  First Floor <br>

						Greater Kailash - 2<br>

						New Delhi, India-110048

						</p>

						<p>

						<br>US Office:<br>

						Varco Global Solutions<br>

						P.O.Box 382<br>

						Westford, MA-01886

						</p>

						</div>

						</div>

					

					<div class="col-sm-2 padding_zero  " id="align_for_mobile">

						<div class="heading">Call us</div>

						<div class="callus presence">

						<p>

						India: +91 9818 922 228<br>

						       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 11 4143 7802<br>

						US: &nbsp;&nbsp;&nbsp;&nbsp;+1 978 692 6361

						</p>

						<p><br>

						<span class="heading">Email us:</span><br>

						sales@varcogs.com<br>

						business@varcogs.com

						</p>

						</div>

					<p align="right"><img src="img/the-one-design.png" /></p>

						</div>

					

					

					

					

					

					

					</div>

				

				

					

				</div>

				

				

				<div id="foot_bottom">

				<p>&#64; 2016 Varco Global Solutions. All Rights Reserved.  <a href="policies.html" >Privacy Policies</a></p> 

				</div>

			</div>

			</div>

		</div>

    <!--Above Footer End-->

</div>

<script src="js/jquery.bxslider.js"></script>

    <script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.sticky-kit.min.js"></script>

	<script src="js/clientlibs1.min.js"></script>

	<script src="js/clientlibs.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
      <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
$.validate({
	modules : 'location, date, security, file',
	  form : '#frmReg'
	});
$(function(){
	$('[ data-toggle="tooltip"]').tooltip();
	
	// $( "#dob" ).datepicker({ dateFormat:'yy-mm-dd',  changeMonth: true});
	 
	 $(document).on('change','select[name="payment_id"]',function(){
		 
		 $.post('getPdata.php',{pid:$(this).val(), eve_date:'<?php print $eventData['e_start']; ?>'},function(result){
			 
			 //alert(result)
			 
				$('.payment_data').html('<br>'+result);		 
			 });
		 
		 });
		 
	 
	});
</script>
  </body>

	

	

</html>