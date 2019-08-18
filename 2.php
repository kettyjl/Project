		<?php

get_header();

?>
        <div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<html>

<body>
	<script>
	
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            } 
        };
        xmlhttp.open("GET","?page_id=3023.php&Faculty=<?php echo $_GET['Faculty']?>&q="+str,true);
        xmlhttp.send();
    }
}
</script>
	</body>
	
		
<head>
		<meta charset="utf-8">
		<title>CSS Ribbon</title>
		<style>




			.ribbon {
				display:inline-flex;
				float:center;
				margin: 0 auto;
							
				
			}

			.ribbon:after, .ribbon:before {
				margin-top:0.5em;
				content: "";
				float:left;
				border:1.5em solid #D0E2F5;
				
			}

			.ribbon:after {
				border-right-color:transparent;
				
			}

			.ribbon:before {
				border-left-color:transparent;
			}

			.ribbon a:link, .ribbon a:visited { 
				color:blue;
				text-decoration:none;
			    float:left;
			    height:3.5em;
				overflow:hidden;
				font-family: Georgia,Georgia;
			}

			.ribbon span {
				background:#D0E2F5;
				display:inline-block;
				line-height:3em;
				padding:0 1em;
				margin-top:0.5em;
				position:relative;
				
				

				-webkit-transition: background, margin 0.2s;  /* Saf3.2+, Chrome */
				-moz-transition: background, margin 0.2s;  /* FF4+ */
				-ms-transition: background, margin 0.2s;  /* IE10 */
				-o-transition: background-color, margin-top 0.2s;  /* Opera 10.5+ */
				transition: background, margin 0.2s;
				
			}

			.ribbon a:hover span {
				background:#FFD204;
				margin-top:0;
			}

			.ribbon span:before {
				content: "";
				position:absolute;
				top:3em;
				left:0;
				border-right:0.5em solid #9B8651;
				border-bottom:0.5em solid #fff;
				
				
			}

			.ribbon span:after {
				content: "";
				position:absolute;
				top:3em;
				right:0;
				border-left:0.5em solid #9B8651;
				border-bottom:0.5em solid blue;
				
				
			}
		.styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: blue;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: rgba(255, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}	

.faculty {
		 display: inline-block;
	  	 font-family: georgian;
	  	 font-size: 40px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 text-align:center;
		 margin:0 auto;
	     color: White;
	     
	    
	  }
.b {
  border: 1px solid LightSteelBlue;
  background-color:lightblue;
  padding: 0 100px 0 100px;
  width: 800px;
  height: 100%;
  overflow:auto;
  box-shadow: 5px 5px #888888;
  float:center;
  margin: 0 auto;

}
.a {
  border: 1px solid LightSteelBlue;
  background: linear-gradient(#D7DDE8,#757F9A);
/*   padding: 0 20px 0 0; */
  width: 1110px;
  height:650px;
  overflow:auto;
  box-shadow: 5px 5px #5D4157;
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
h1 {
    color: white;
    font-family: Arial;
    text-align: center;
}


</style>
	</head>
	<div id="header" >
    <br><br><br><br><br><br><br><br>
<div  class ="faculty"  style="padding: 0 0 0 220px;margin:0 auto;overflow:auto;">		
			WELCOME 
	TO THE FACULTY OF <?php echo strtoupper($_GET['Faculty'])?>
		
	</div>	
</div>
	<body>
		<div  style="text-align:center;">
			
		

		<p><a href="javascript:history.go(-1)" title="Return to previous page" style="float:left; font-family:Georgia; Font-size:20px; Font-weight:bold;">&laquo; Go Back</a><br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			</p>
	<div style = "display: inline-flex;
	  	 font-family: georgian;
	  	 font-size: 30px;
	  	 font-weight: bold;
	  	 word-spacing: 0px;
		 margin:0 auto;
	     color: indigo;
		padding:0 0 0 100px;
		white-space:nowrap;">		
			EXPLORE YOUR OPTIONS OF COURSES IN <?php echo strtoupper($_GET['Faculty'])?>
		
	</div>	

<!-- Styling for heading of faculty	 -->
 	
		
	
	<?php
               global $wpdb;
                   $result = $wpdb->get_results("SELECT distinct Description FROM courses_occupation_vacancies_trend WHERE CommonFaculty='".$_GET['Faculty']."'");
                                         foreach($result as $res)
                                         {
                                echo "<div style='font-size:20px; font-family: Georgia,Georgia;float:center;text-align:center;padding:0 0 0 300px;white-space:normal;overflow:auto;' ><p>".$res->Description."<p></div>";
                                         }
                                         ?>

   <div id="j">
	</div>
	<br>
	<br>

<div class = "ribbon" style="margin:0 auto;padding:0 0 0 280px" >
		
		<a href="#j" name="users" onclick="showUser('Undergraduate')" ><span style="color:MidnightBlue; font-family: Georgia,Georgia; font-weight: bold; ">Undergraduate</span></a>
	         <a href="#j" name="users" onclick="showUser('Postgraduate')"><span style="color:MidnightBlue; font-family: Georgia,Georgia; font-weight: bold;">Postgraduate</span></a>
	         <a href="#j" name="users" onclick="showUser('Research')"><span style="color:MidnightBlue; font-family: Georgia,Georgia; font-weight: bold;">Research</span></a>
		</div>
<br><br><br>

		<div id="txtHint" style="color:MidnightBlue; font-family: Georgia,Georgia; font-size:20px;font-weight: bold;white-space:nowrap; padding:0 0 0 280px">		
			</div>
		
		
		
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
		


			
		
		.