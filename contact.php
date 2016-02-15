<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'head.php'; ?>
</head>
<body>
<?php include 'topmenu.php' ?>
<!--Header Ends================================================ -->
<section id="mapSection"> 
<div id="myMap" style="height:400px">
<!-- please edit in (js code which is available in the foote section) longitude and longitude of your location  -->
</div>	
</section>


<section id="bodySection"> 	
	<div class="container">					
	<div class="row">
			<div class="span6" style="text-align: left">
                            		
			<h3> UNITY SECURITY GROUP CO.LTD </h3>	
				<address style="margin-bottom:15px;">
				Block no:7556, Bwiru Corner, Nyakato <br>
				Mwanza, Tanzania<br>
			</address>
			Postal Address:<i class="icon-envelope-sign"></i> &nbsp; P.O BOX 1000 <br>
			Phone: <i class="icon-phone-sign"></i> &nbsp; +255 787 447 003 <br>
                            <span>0717 447 003, 0718 877 515 </span><br>
			Email: <a href="contact.html" title="contact"><i class="icon-envelope-alt"></i>info@unitysecuritygroup.com</a><br/>
			Link: <a href="index.html" title="Business ltd"><i class="icon-globe"></i> www.unitysecuritygroup.com</a><br/><br/>
			</div>
			<div class="span4">
					
			</div>
			<div class="span4">
				<h3>  Email Us</h3>
				<form class="form-horizontal">
				<fieldset>
				  <div class="control-group">
				   
					  <input type="text" placeholder="name" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" placeholder="email" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" placeholder="subject" class="input-xlarge"/>
				  
				  </div>
				  <div class="control-group">
					  <textarea rows="4" id="textarea" class="input-xlarge"></textarea>
				   
				  </div>

                                    <button class="btn btn-large" type="button"> <i class="icon-envelope"></i> Send Message</button>

				</fieldset>
			  </form>
			</div>
		</div>

		</div>
</section>
 <!-- Footer
  ================================================== -->
<?php include 'footer.php'; ?>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="themes/js/jquery-1.8.3.min.js"></script>
	<script src="themes/js/bootstrap.min.js"></script>
	<script src="themes/js/bootstrap-tooltip.js"></script>
    <script src="themes/js/bootstrap-popover.js"></script>
	<script src="themes/js/business_ltd_1.0.js"></script>
 
	 <!-- Google map jquery files -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="themes/js/jquery.gmap.js"></script>
	<script>
		// Google map data ==============================================================================
	  $(document).ready(function(){
		$("#myMap").gMap({ controls: false,
						  scrollwheel: false,
			  draggable: true,
		  markers: [{ latitude: -2.491809,  		//your company location latitude 
					  longitude: 32.9034064,		//your company location longitude
					  icon: { image: "http://www.google.com/mapfiles/marker.png",
							  iconsize: [42, 48],
							  iconanchor: [42,48],
							  infowindowanchor: [14, 0] } },
					],
		  icon: { image: "http://www.google.com/mapfiles/marker.png", 
				  iconsize: [28, 48],
				  iconanchor: [14, 48],
				  infowindowanchor: [14, 0] },
		  latitude: -2.491809,
		  longitude: 32.9034064,
		  zoom: 16, });
	  });
	</script>
	


</body>
</html>
