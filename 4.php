
<html>

<body>

<?php
	global $wpdb;
    $result=$wpdb->get_results("SELECT distinct CommonCourses,Faculty,LevelOfStudy FROM courses_occupation_vacancies_trend WHERE LevelOfStudy = '".$_GET['q']."' AND CommonFaculty='".$_GET['Faculty']."'");
	if($result):
	foreach($result as $res):
	
 					
		echo "<a style='float:center;' href='?page_id=2803.php&commonc=".$res->CommonCourses."'><p>".$res->CommonCourses."</p></a>";  
	     
	     
	
?>
	<?php 
	endforeach;
	else:
	?>
	<h2><div style="float:center;">There is no related course in this level of study.</div></h2>
	<?php endif;?>
   
</body>
</html> 


