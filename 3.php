<?php get_header(); ?>	
        <div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<style>
	@import "compass/css3";
	@import url(https://fonts.googleapis.com/css?family=Pacifico);
body {
/*  padding: 0 100px 100px;*/
/*   background-color: #CDE !important; */
  text-align:center;
}
					</style>
			
<!-- 			<style>
				faculty {color:Blue;
		 display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 25px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:center;
		  float: center;
	     
	    
	  }
				</style> -->
			<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;
		margin:0 auto;
		  right:-200px;
		
	
       }
    </style>
<style>
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 18px;
  line-height: 1.5;
  font-weight: 300;
  color: #333;
  font-family: "Nunito Sans", sans-serif;
}

body {
  margin: 0;
  padding: 0;
  height: 100vh;
/*   background-color: #ecf0f9; */
  background-attachment: fixed;
}

.content {
  display: flex;
  margin: 0 auto;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1000px;
}

.heading {
  width: 100%;
  margin-left: 1rem;
  font-weight: 900;
  font-size: 1.618rem;
  text-transform: uppercase;
  letter-spacing: .1ch;
  line-height: 1;
  padding-bottom: .5em;
  margin-bottom: 1rem;
  position: relative;
}
.heading:after {
  display: block;
  content: '';
  position: absolute;
  width: 60px;
  height: 4px;
  background: linear-gradient(135deg, #1a9be6, #1a57e6);
  bottom: 0;
}

.description {
  width: 100%;
  margin-top: 0;
  margin-left: 1rem;
  margin-bottom: 3rem;
}

.card {
  color: inherit;
  cursor: pointer;
  width: 1164px;
  min-width: 1164px;
  height: 250px;
  min-height: 250px;
  perspective: 2000px;
  margin: 0 auto;
  position: relative;
  padding: 0 0 0 155px;
}
@media screen and (max-width: 800px) {
  .card {
    width: calc(50% - 2rem);
  }
}
@media screen and (max-width: 500px) {
  .card {
    width: 100%;
  }
}

.front,
.back {
  display: flex;
  border-radius: 6px;
  background-position: center;
  background-size: cover;
  text-align: center;
  justify-content: center;
  align-items: center;
  position: absolute;
  height: 100%;
  width: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transform-style: preserve-3d;
  transition: ease-in-out 600ms;
}

.front {
  background-size: cover;
  padding: 2rem;
  font-size: 1.618rem;
  font-weight: 600;
  color: #fff;
  overflow: hidden;
  font-family: Poppins, sans-serif;
}
.front:before {
  position: absolute;
  display: block;
  content: '';
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, #1a9be6, #1a57e6);
  opacity: .25;
  z-index: -1;
}
.card:hover .front {
  transform: rotateY(180deg);
}
.card:nth-child(even):hover .front {
  transform: rotateY(-180deg);
}

.back {
  background: #fff;
  transform: rotateY(-180deg);
  padding: 0 2em;
}
.back .button {
  background: linear-gradient(135deg, #1a9be6, #1a57e6);
}
.back .button:before {
  box-shadow: 0 0 10px 10px rgba(26, 87, 230, 0.25);
  background-color: rgba(26, 87, 230, 0.25);
}
.card:hover .back {
  transform: rotateY(0deg);
}
.card:nth-child(even) .back {
  transform: rotateY(180deg);
}
.card:nth-child(even) .back .button {
  background: linear-gradient(135deg, #e61a80, #e61a3c);
}
.card:nth-child(even) .back .button:before {
  box-shadow: 0 0 10px 10px rgba(230, 26, 60, 0.25);
  background-color: rgba(230, 26, 60, 0.25);
}
.card:nth-child(even):hover .back {
  transform: rotateY(0deg);
}

.button {
  transform: translateZ(40px);
  cursor: pointer;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  font-weight: bold;
  color: #fff;
  padding: .5em 1em;
  border-radius: 100px;
  font: inherit;
  border: none;
  position: relative;
  transform-style: preserve-3d;
  transition: 300ms ease;
}
.button:before {
  transition: 300ms ease;
  position: absolute;
  display: block;
  content: '';
  transform: translateZ(-40px);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  height: calc(100% - 20px);
  width: calc(100% - 20px);
  border-radius: 100px;
  left: 10px;
  top: 16px;
}
.button:hover {
  transform: translateZ(55px);
}
.button:hover:before {
  transform: translateZ(-55px);
}
.button:active {
  transform: translateZ(20px);
}
.button:active:before {
  transform: translateZ(-20px);
  top: 12px;
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
	background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
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
		display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 40px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:center;
		 margin:0 auto;
	     color: White;
	}

	</style>	
			<style>
.btnStack {
  font-family: Oswald;
  background-color: #3a1c71;
  color: white;
  text-decoration: none;
  display: inline-block;
  padding: 4px 10px;
  margin-bottom:0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.428571429;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

a.btnStack:hover {
  background-color: #11998e;
  color: white;
}




				</style>
			
<html>
	
			
			<div id="header" >
    <br><br><br><br><br><br><br><br><br><br><br><br>
<div  class ="faculty" >		
			<?php echo strtoupper($_GET['commonc'])?>
		
	</div>	
</div>
			
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
			  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>


<p>
	<a href="javascript:history.go(-1)" title="Return to the previous page" style="float:left; font-family:Georgia; Font-size:20px; Font-weight:bold; color:IndianRed;">&laquo; Go back</a>
	<br> <br><br><br> <br><br><br> <br><br><br> <br><br><br><br>
</p>
		<br> <br><br><br> <br><br><br> <br><br><br> <br><br>
	<div align="center" style = "display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 40px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:center;
		 margin:0 auto;
	     color: indigo;
		float:left;
		white-space:nowrap;">	
			&emsp;&emsp;&emsp;LIST OF UNIVERSITIES PROVIDING THIS COURSE
	</div>	<br><br><br><br>
	

<?php
	global $wpdb;
	$course= $wpdb->get_results("SELECT distinct Longitude, Latitude,course,University,Region,CommonCourses,AURanking,links FROM courses_occupation_vacancies_trend WHERE CommonCourses='".$_GET['commonc']."'"); 
	
	foreach($course as $cou)
	{
		
		
		
		$name = $cou->University;
        
        $longitude = $cou->Longitude;           
        
        $latitude = $cou->Latitude;
		
        
        
        
        /* Each row is added as a new array */
        
        $locations[]=array( 'name'=>$name, 'lat'=>$latitude, 'lng'=>$longitude);
		
		
		echo'<br><br>
  <div class="wrap" style="padding:0 0 0 300px;width:950px;">
    <div class="panel panel-default" float= "right"  >
	<div class="panel-heading" style = "font-family: Georgian; color: lavender	; font-size:30px; font-weight:bold; text-align:left; background: linear-gradient(to left, #eea849, #f15f79);">'.$cou->University.' <a href="'.$cou->links.'" class="btnStack" style="float:right; font-family: Georgian; font-size:20px;">Find More</a></div>
	<div class="panel-body" style = "background-color: #DAE2F8;">
	<h3 style = "font-family: Georgian; font-weight:bold; text-align:left;"> Ranking: '.$cou->AURanking.'</h3>
  <h3 style = "font-family: Georgian; font-weight:bold; text-align:left;">Location: '.$cou->Region.'</h3>
  
  
  </div>
  </div>
 

 



 
</div> ';
		
		
	}
		
			?>

			
	</html>
	 
	
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
			  '<p><?php echo $locations[$i]['name'];?></p>',
               
            <?php echo $locations[$i]['lat'];?>,
            <?php echo $locations[$i]['lng'];?>,
            
        ]<?php if($j!=sizeof($locations))echo ","; }?>
    ];
    var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);
    function initialize() {
      var mapOptions = {
        zoom: 6,
        center: origin
      };
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
        infowindow = new google.maps.InfoWindow();
        for(i=0; i<locations.length; i++) {
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
			<div id="j"></div>	
			<br><br><br><br>
			<div align="center" style = "display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 40px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:right;
		 margin:0 auto;
	     color: indigo;
		float:center;
		white-space:nowrap;
		padding:0 0 0 200px;" > 
				LOCATION OF DIFFERENT UNIVERSITIES
				<br><br>
			</div>
    <div id="map">
	
	</div>
			
		

    
       
			


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
