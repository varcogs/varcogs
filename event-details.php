<?php
include('inc/constants.inc');
include("inc/class.db.inc");
include("inc/connectData.inc");
include('inc/functions.inc');
if(!isset($_GET['eventid']))
{
	header("Location:events.php");
	exit();
}
$eid=intval($_GET['eventid']);
if($eid<=0)
{
	header("Location:events.php");
	exit();
}
$eventsSql = $db->query("select * from varco_events where id=".$eid);
$numEvents = $db->num_rows($eventsSql);
if($numEvents>0)
{
	$eventData=$db->fetch_array($eventsSql);
}
else
{
	header("Location:events.php?errmsg=event not found");
	exit();
}

?> <!DOCTYPE html>

<html lang="en">



<head>

    <title><?php print stripslashes($eventData['title']); ?> | VARCO </title>

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

	

	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<style>

		.about_sec{background: #eef3f3;padding:15px;font-size:14px;}

		.moreContent { display:none; }
.event-data { font-size:16px; }
.btn-primary { background:rgba(78,138,0,1.00);border:1px solid rgba(62,110,0,1.00) }
.btn-primary:hover { background:rgba(96,170,0,1.00);border:1px solid rgba(62,110,0,1.00) }
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

                        <!-- events data -->	
                            
                            <p class="about_heading ">
                       <span><a href="events.php" title="Back to events" data-toggle="tooltip"><em><i class="glyphicon glyphicon-chevron-left"></i> Back </em></a></span>
                       </p>
                       
                       	<div class="row">
                        <div class="col-md-10"> <h3 class=""><?php print stripslashes($eventData['title']); ?></h3></div>
                        <div class="col-md-2"> <?php if(strlen($eventData['flyer'])>3)
							{
								?>
								<a href="<?php print $eventData['flyer']; ?>" target="_blank"><i class="glyphicon glyphicon-file"></i> Event Flyer</a>
								<?php
							} ?></div>
                        </div>
                            
                            <div class="event-data">
                            <?php print stripslashes($eventData['leadtext']); ?>
                            
                            <?php print stripslashes($eventData['description']); ?>
                           
                            </div>
                            
                           <?php
						   if($eventData['id']==1)
						   {
						   ?>
                           <div style="margin:12px auto">
                           <iframe width="100%" height="540" src="https://www.youtube.com/embed/d8kGKb4F4fs" frameborder="0" allowfullscreen></iframe>
						   </div>
						   <?php } ?>
                           

                            <h4>Venues Details:</h4>
                            
                            <?php
							$eveExtSql=$db->query("select * from varco_events_details where event_id=".$eventData['id']);
							if($db->num_rows($eveExtSql)>0)
							{
								?>
                                <table class="table table-responsive table-striped table-bordered">
                                <tr>
                                <th>Venue</th>
                                <th>Start Date/time</th>
                                <th>End Date/time</th>
                                <th></th>
                                </tr>
                                <?php
								while($eveExtData=$db->fetch_array($eveExtSql))
								{
									?>
                                    <tr>
                                    <td valign="middle"><?php print stripslashes($eveExtData['venue']) ?></td>
                                    <td valign="middle"><?php print date('l, d M, Y',strtotime($eveExtData['e_start'])) ?> from  <?php print stripslashes($eveExtData['time_from']) ?></td>
                                    <td valign="middle"><?php print date('l, d M, Y',strtotime($eveExtData['e_end'])) ?> to <?php print stripslashes($eveExtData['time_to']) ?></td>
                                    <td valign="middle">
                                    <?php
									if(strtotime(date("Y-m-d")) > strtotime($eveExtData['e_start']) )
									{
										print 'Registration Closed.';
									}else
									{
									?>
                                    <a href="register-user.php?event_venue_id=<?php print $eventData['id']."_".$eveExtData['id']; ?>" class="btn btn-sm btn-primary">Register Now <i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <?php } ?>
                                    </td>
                                    </tr>
                                    <?php
								}
								?>
                                </table>
                                <?php
								
							}
							else
							{
								print 'Coming soon!';
							}
							?>
                            
                        <!--//events data ends -->					
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
<script>
$(function(){
	$('[ data-toggle="tooltip"]').tooltip();
	
	
	
	
	
	
	})
</script>
  </body>

	

	

</html>