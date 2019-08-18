<?php
/**
 * Template name:comparison 
 * The template for displaying all pages.
*   *
*    * This is the template that displays all pages by default.
*     * Please note that this is the WordPress construct of pages
*      * and that other 'pages' on your WordPress site will use a
*       * different template.
*        *
*         * @package Sydney
*          */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
<html>
	<head>
			<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%; 
		margin:0 auto;
		right:-200px;/* The width is the width of the web page */
       }
    </style>
<script>
	function myfun()
	{
		window.scrollTo(0,1555);
	}
	</script>
<style>
[type=radio] { 
  position: absolute;
  opacity: 0;
  
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}



	</style>


		<style>

// The code is a bit of a mess at the moment! Sorry about that.

body {
  padding: 1rem;
  color: hsla(215, 5%, 50%, 1);
}
h1 {
  color: hsla(215, 5%, 10%, 1);
  margin-bottom: 2rem;
}
section {
  display: flex;
  flex-flow: row wrap;
}
section > div {
  flex: 1;
  padding: 0.5rem;
}
input[type="radio"] {
  display: none;
  &:not(:disabled) ~ label {
    cursor: pointer;
  }
  &:disabled ~ label {
    color: hsla(150, 5%, 75%, 1);
    border-color: hsla(150, 5%, 75%, 1);
    box-shadow: none;
    cursor: not-allowed;
  }
}
label {
  height: 100%;
  font-family: georgian;
  font-size:20px;
  display: block;
  background: white;
/*   border: 2px solid indigo; */
  border-radius: 10px;
  padding: 0.5rem;
  width: 80%;
  margin-bottom: 1rem;
  //margin: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px hsla(150, 5%, 65%, 0.5);
  position: relative;
}
input[type="radio"]:checked + label {
  background: #f80759;
  color: hsla(215, 0%, 100%, 1);
  box-shadow: 0px 0px 20px #f80759;
  &::after {
    color: hsla(215, 5%, 25%, 1);
    font-family: FontAwesome;
    border: 2px solid hsla(150, 75%, 45%, 1);
    content: "\f00c";
    font-size: 24px;
    position: absolute;
    top: -25px;
    left: 50%;
    transform: translateX(-50%);
    height: 50px;
    width: 50px;
    line-height: 50px;
    text-align: center;
    border-radius: 50%;
    background: white;
    box-shadow: 0px 2px 5px -2px hsla(0, 0%, 0%, 0.25);
  }
}
input[type="radio"]#control_05:checked + label {
  background: red;
  border-color: red;
}
p {
  font-weight: 900;
}


@media only screen and (max-width: 700px) {
  section {
    flex-direction: column;
  }
}

#header{
/* 	setting alpha = 0.1; */
    background: url(https://cdn.pixabay.com/photo/2017/03/25/17/55/color-2174045_1280.png) repeat-x 0 0;
	background-blend-mode: lighten;
/* 	opacity:0.7; */
	min-width: 1024px;
    height: 500px;
	z-index: 10;
	padding: 0;
/*     padding: 100px 20px 20px; */
	width: 1407px;
	background-size: cover;
	margin-bottom: 0;
	float: left;
	align-content:left;
	margin-top: -80px;
	margin-left: -120px;
	margin-right: 120px;
	background-size: cover;
	
}




			</style>
		<style>
			.img__container {
  border: 5px outset #1C6EA4;
  max-width: 40%;
  margin: 2rem auto;
  height:30%;
}

/* Default size for image box (Mobile) */
.aspect__container {
  display: block;
  background: gainsboro;
  height: 0;
  overflow: hidden;
  padding-top: calc(800 / 640 * 100%);
  position: relative;
}

/* Size of image box on Desktop/Tablet */
@media screen and (min-width: 767px) {
  .aspect__container {
    padding-top: calc(600 / 1160 * 100%);
  }
}

/* Styles for the actual image itself */
.img {
  display: block;
  height: auto;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}




/* ==================================================== */
/* Generic Styling for Pen (Can Ignore) */
/* ==================================================== */
.container {
  font-family: Arial;
}

.title {
  border: solid black;
  display: inline-flex;
  font-size: 1.5rem;
  padding: 0.25rem 1.5rem;
  margin: 1rem 0 0;
}

.subtitle {
  font-size: 0.8rem;
  font-weight: 400;
  margin: 1.5rem 0;
  font-style: italic;
  color: lightslategrey;
}

			</style>
		<style>
		body{
/*   background: linear-gradient(#FEAC5E,#C779D0);  */
}


.wrap{
  margin-left:20px;
	
}

.box{
  width: 900px;
  height: 180px;
  float:right;
  background-color:white; 
  margin:25px 15px;
  border-radius:5px;

  
}
	
#trigger {
  display: none;
}
.box h4{
  font-family: 'Georgia', Georgia Header;
  font-size:100px;
  font-weight:normal;
  text-align:center;
  padding-top:20px;
  color:#fff;
}
.box1{
	
/*     background: linear-gradient(#FEAC5E,#C779D0);  */
	 background: linear-gradient(to right, #8DC26F, #ff9472);
	font-size:17px;
	color:black;
	line-height:1.5;
	top:50%;
    left:30%;
}
.box2{
  background-color: #EDE89A;
}
.box3{
  background-color: #9EEBA1;
}
.box4{
  background-color: #9EEBBF;
}
.box5{
  background-color: #9ED9EB;
}
.box6{
  background-color: #9EB3EB;
}
.box7{
  background-color: #DB9EEB;
}
.box8{
  background-color: #C49EEB;
}
.shadow1, .shadow2, .shadow3,.shadow4,.shadow5,.shadow6,.shadow7,.shadow8{
  position:relative;
}
.shadow1,.shadow2,.shadow3,.shadow4,.shadow5,.shadow6,.shadow7,.shadow8{
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.1) inset;
}
/*****************************************************************dashed border
****************************************************************/
.shadow1 h4, .shadow2 h4, .shadow3 h4, .shadow4 h4, .shadow5 h4, .shadow6 h4, .shadow7 h4, .shadow8 h4{
  width:87%;
  height:100px;
  margin-left:6%;
  border:2px dashed #F7EEEE;
  border-radius:5px;
}
/****************************************************************
*styling shadows
****************************************************************/
.shadow1:before, .shadow1:after{
  position:absolute;
  content:"";
  bottom:12px;left:15px;top:80%;
  width:40%;
  background:#9B7468;
  z-index:-1;
  -webkit-box-shadow: 0 20px 15px #9B7468;
  -moz-box-shadow: 0 20px 15px #9B7468;
  box-shadow: 0 20px 15px #9B7468;
  -webkit-transform: rotate(-6deg);
  -moz-transform: rotate(-6deg);
  transform: rotate(-6deg);
}
.shadow1:after{
  -webkit-transform: rotate(6deg);
  -moz-transform: rotate(6deg);
  transform: rotate(6deg);
  right: 15px;left: 10px;
}
.shadow2:before{
  position:absolute;
  content:"";
  width:80%;
  top:140px;bottom:15px;left:30px;
  background-color:#9F8641;
  z-index:-1;
  -webkit-box-shadow:0 23px 17px 0 #9F8641;
  -moz-box-shadow:0 23px 17px 0 #9F8641;
  box-shadow: 0 23px 17px 0 #9F8641;
  -webkit-transform:rotate(-4deg);
  -moz-transform:rotate(-4deg);
  transform:rotate(-4deg);
}
.shadow3:before, .shadow3:after{
  content:"";
  position:absolute;
  bottom:0;top:2px;left:15px;right:15px;
  z-index:-1;
  border-radius:100px/30px;
 -webkit-box-shadow:0 0 30px 2px #479F41;
  -moz-box-shadow:0 0 30px 2px #479F41;
  box-shadow: 0 0 30px 2px #479F41;
}
.shadow4:before, .shadow4:after{
  position:absolute;
  content:"";
  top:14px;bottom:14px;left:0;right:0;
  box-shadow:0 0 25px 3px #548E7F;
  border-radius:100px/10px;
  z-index:-1;
}
.shadow5:before, .shadow5:after{
  position:absolute;
  content:"";
  box-shadow:0 10px 25px 20px #518C96;
  top:40px;left:10px;bottom:50px;
  width:15%;
  z-index:-1;
  -webkit-transform: rotate(-8deg);
  -moz-transform: rotate(-8deg);
  transform: rotate(-8deg);
}
.shadow5:after{
  -webkit-transform: rotate(8deg);
  -moz-transform: rotate(8deg);
  transform: rotate(8deg);
  right: 10px;left: auto;
}
.shadow6:before, .shadow6:after{
  position:absolute;
  content:"";
  top:100px;bottom:5px;left:30px;right:30px;
  z-index:-1;
  box-shadow:0 0 40px 13px #486685;
  border-radius:100px/20px; 
}
.shadow7:before, .shadow7:after{
  position:absolute;
  content:"1";
  top:25px;left:20px;bottom:150px;
  width:80%;
  z-index:-1;
  -webkit-transform: rotate(-6deg);
  -moz-transform: rotate(-6deg);
  transform: rotate(-6deg);
}
.shadow7:before{
  box-shadow:10px -10px 30px 15px #984D8E;
}
.shadow7:after{
  -webkit-transform: rotate(7deg);
  -moz-transform: rotate(7deg);
  transform: rotate(7deg);
  bottom: 25px;top: auto;
  box-shadow:10px 10px 30px 15px #984D8E;
}
.shadow8{
  box-shadow:
 -6px -6px 8px -4px rgba(250,254,118,0.75),
  6px -6px 8px -4px rgba(254,159,50,0.75),
  6px 6px 8px -4px rgba(255,255,0,0.75),
  6px 6px 8px -4px rgba(0,0,255,2.75);
}
	.faculty{
		float: right;
		margin:0 auto; 
	    font-size:40px; 
		font-weight: bold; 
		font-family: Georgia; 
		text-align:right;
		white-space: nowrap;"
	}

	</style>	
		<style>
			
			</style>
	</head>
			</html>
			
<html>
	<div id="header" >
    <br><br><br><br><br><br><br><br>
<div  style = "display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 40px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:center;
		 margin:0 auto;
	     color: White;">		
			FIND ACCOMMODATION RENTS ACCORDING TO YOUR REQUIREMENTS
		
	</div>	
</div>
<body>
  
  
  
  
<p>
	<a href="https://www.regionalbright.ml/" title="Return to the previous page" style="float:left; font-family:Georgia; Font-size:20px; Font-weight:bold; color:IndianRed;">&laquo; Go back</a>
	<br> <br><br><br> <br><br><br> <br><br><br> <br><br><br><br>
</p>
            
  


<!-- Aspect Ratio Box -->

        
      <div style = "display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 40px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:RIGHT;
		 margin:0 auto;
	     color: INDIGO;
		white-space:nowrap;
		padding:0 0 0 400px;">
		   <br>FILL IN YOUR PREFERENCES
	</div>
    	
		
			<form action="" method="post">
				 <div class="box box1 shadow1">
  <!-- Picture element to switch between desktop and mobile images -->
  

					<h3 style="font-family:georgian; color: lavender; text-align:center; font-size:40px;">Select the Type of House Required</h3>
			
  
	<section>
<div>
			 			
					<input class="radio" id="Flat"  type="radio" name="type" value="Flat" />			
<label for="Flat">Flat
				</label>
		</div>
	  
    <div>
       <input id="House" class="radio" type="radio" name="type" value="House"/>
					<label for="House"> House</label>
	  </div>
	  <div>
        <input id="Any" class="radio" type="radio" name="type" value="Any" /><label for ="Any">Any      
		 </label>
	  </div>
				
								
				
				
     </section>
				</div>
				
		<div class="box box1 shadow1">
		
					
					<h3 style="font-family:georgian; color: lavender; text-align:center; font-size:40px;">Select the Number of Bedrooms Required</h3> 
		<section>
<div >				
          <input id="1" class="radio" type="radio" name="bedroom" value="1"/>
		<label for="1">One</label>
		</div>
		<div>
      
       <input id="2" class="radio" type="radio" name="bedroom" value="2"/>
  <label for="2">Two    
		  </label>
		</div>
		<div>

        <input id="3" class="radio" type="radio" name="bedroom" value="3" />
   <label for="3">Three  
		  </label>
		</div>
		<div>		
        <input id="4" class="radio" type="radio" name="bedroom" value="4" />
      <label for="4">Four
		  </label>
		</div>
			
		</section>
				</div>
				
	 <div class="box box1 shadow1">
<h3 style="font-family:georgian; text-align:center; color: lavender; font-size:40px;">Select Your Preference of Budget</h3>
	<section>
		<div>				
          <input id="Cheap" class="radio" type="radio" name="budget" value="Cheap" />
			
			<label for="Cheap">Cheap	
				</label>
		</div>
	<div>	
   
       <input id="Medium" class="radio"type="radio" name="budget" value="Medium"/>
      <label for="Medium">Medium   
		  </label>
		</div>
		<div>

        <input id="High" class="radio" type="radio" name="budget" value="High" />
      <label for="High">High
		  </label>
		</div>	
			</section>
				</div>
				<hr>
				<input type="submit" name="Submit" value="Submit" style="margin-left: 50%; background-color:#f80759; font-family:georgian; font-size:20px; right:-180px;"/>
						
				
	</form>	
	<br><br>
	
	 <?php
	$budget=$_POST["budget"];
	$type=$_POST["type"];
	$bedroom=$_POST["bedroom"];
	
	global $wpdb;
	$results=$wpdb->get_results("SELECT distinct Region,MedianRent,Suburbs, Longitude,Latitude FROM rents WHERE RentRange='$budget' AND HouseType='$type' AND Beds='$bedroom'");
    foreach($results as $res)
	{
		
		
		
		$name = $res->Region;
		$rent = $res->MedianRent;
        
        $longitude = $res->Longitude;           
        
        $latitude = $res->Latitude;
        
        
        /* Each row is added as a new array */
        
        $locations[]=array( 'name'=>$name,'rent'=> $rent, 'lat'=>$latitude, 'lng'=>$longitude, 'rent'=>$rent);
		
		
		
		
	}
    
   
 ?>
	</body>
	</html>
	<html>
  <head>
    <title>Place Details</title>	
	<script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBohoV-2meIxmOTNh8_2mM6jikEKJ58FnE">
    </script>
	<script type="text/javascript">
		
var map;
var Markers = {};
var infowindow;
		var locations = [
        <?php for($i=0;$i<sizeof($locations);$i++){ $j=$i+1;?>
        [
            'AMC Service',
			  
               '<p><?php echo $locations[$i]['name'];?><br>$<?php echo $locations[$i]['rent'];?></p>',
            <?php echo $locations[$i]['lat'];?>,
            <?php echo $locations[$i]['lng'];?>,
            
        ]<?php if($j!=sizeof($locations))echo ","; }?>
    ];
    var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);
    function initialize() {
      var mapOptions = {
        zoom: 5,
        center: origin
      };
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
        infowindow = new google.maps.InfoWindow();
        for(i=0; i<locations.length; i++) {
			'PRFGH'
            var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
            var marker = new google.maps.Marker({
                position: position,
                map: map,
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][1]);
                    infowindow.setOptions({maxWidth: 200});
                    infowindow.open(map, marker);
                }
            }) (marker, i));
            Markers[locations[i][4]] = marker;
        }
        locate(0);
    }
    function locate(marker_id) {
        var myMarker = Markers[marker_id];
        var markerPosition = myMarker.getPosition();
        map.setCenter(markerPosition);
        google.maps.event.trigger(myMarker, 'click');
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
	<body>
	<div id="map">
	</div>
	
		</body>
	
			</html>
				
   



				<?php
					// If comments are open or we have at least one comment, load up the comment template
 					if ( comments_open() || get_comments_number() ) :
 											comments_template();
 																endif;
 																				?>

 																							<?php endwhile; // end of the loop. ?>

 																									</main><!-- #main -->
 																										</div><!-- #primary -->

 																										<?php get_sidebar(); ?>
 																										<?php get_footer(); ?>

