<?php
include('inc/constants.inc');
include("inc/class.db.inc");
include("inc/connectData.inc");
include('inc/functions.inc');

?> <!DOCTYPE html>

<html lang="en">



<head>

    <title>Events | VARCO </title>

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

						  <h3 class="abut-head about">Upcoming Events</h3>

						<p class="about_heading events-list">
                       
                       
                       <!-- events list -->
                       
                       <?php
					   	
						$eventsSql = $db->query("select * from varco_events");
						$numEvents = $db->num_rows($eventsSql);
						if($numEvents>0)
						{
							?>
                          
                            
                            <?php
							$ind=0;
							while($events = $db->fetch_array($eventsSql))
							{
								?>
                                <div class="row">
                                	<div class="col-sm-1 col-xs-1 "><h2 class="hidden-for-small"><i class="glyphicon glyphicon-hand-right"></i></h2><p class="hidden-for-large"><br><i class="glyphicon glyphicon-hand-right"></i></p></div>
                                	<div class="col-sm-9 col-xs-10"><h4><a href="event-details.php?eventid=<?php print $events['id']; ?>"><?php  print stripslashes($events['title']); ?></a></h4>
                            
                            
                                   <p style="padding:12px 0;font-size:1.2em"><?php  print stripslashes($events['leadtext']); ?></p>
                                   
                                   <div>
                                   
                                   	<!--<a href="javascript:void(0)" class="btn btn-sm btn-info view-more">Show <i class="glyphicon glyphicon-plus"></i></a>
                                    <a href="event-details.php?eventid=<?php print $events['id']; ?>" class="btn btn-sm btn-info">Show details <i class="glyphicon glyphicon-chevron-right"></i></a>
                          -->          
                                     <a href="event-details.php?eventid=<?php print $events['id']; ?>" class="btn btn-sm btn-info">Show details <i class="glyphicon glyphicon-chevron-right"></i></a>
                                    </div>
                                   
                                    </div>
                                    
                                    <div class="col-sm-2 col-xs-1 "><!--<br>
                                    <a title="Register for this event" data-toggle="tooltip" href="register-user.php?program_id=<?php  print stripslashes($events['id']); ?>&action=register" class="btn btn-sm btn-primary">Register <i class="glyphicon glyphicon-chevron-right"></i></a>-->
                                    </div>
                                </div>
                                <hr>
                                <?php
								$ind++;
							}
							?>
                            
                            <?php
						}
											   
					   ?>
                       
                       
                       <!--//events list ends -->
                       
                       
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
<script>
$(function(){
	$('[ data-toggle="tooltip"]').tooltip();
	
	
	$(document).on('click','.view-more',function(){
	
			var indx = $('a.view-more').index(this);
			$('#moreContent'+indx).toggle('slow');
			if($(this).html() == 'Show <i class="glyphicon glyphicon-plus"></i>')
			{
				$(this).html('Hide <i class="glyphicon glyphicon-minus"></i>') 
			}
			else
			{
				$(this).html('Show <i class="glyphicon glyphicon-plus"></i>')
			}
			
			
			
		})
	
	
	})
</script>
  </body>

	

	

</html>