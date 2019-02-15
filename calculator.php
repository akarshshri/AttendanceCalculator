
<?php
require 'meta.inc.php';
?>


<?php
if(isset($_POST['present']) && isset($_POST['days']) && $_POST['days']>= 0 && $_POST['present'] >= 0){
	$days = $_POST['days'];
	$present = $_POST['present'];
	$total = $_POST['total'];
	@$days2= $_POST['days2'];
	
	### EDIT HERE(enter details according to your college) ###
	
	$minimum_percentage_require = 75; //Minimum attendence percentage require	
	$lectures_in_a_day = 6; //Number of lectures in a day
	$number_of_working_days = 75; //Number of working days in the college. If unknown, leave it to 75 as an average
	
	
	
	### STOP HERE ###

	@$attend_percent = $_POST['attend_percent'];
	@$absent_till_date = $total - $present;
	@$should_be_present_hours = intval(($number_of_working_days * $lectures_in_a_day) * (100 - $minimum_percentage_require) / 100);
	@$allowed_absent = $should_be_present_hours - $absent_till_date;
	if(!empty($_POST['days']) && !empty($_POST['present']) && !empty($_POST['total']) ){ //If All Boxes are Filled

		$new_total = $total + $days;
		$current_Attendance = rtrim(($present/$total)*100);
		$new_Attendance = ($present/$new_total)*100;
		$difference = $current_Attendance - $new_Attendance;
		if($total>=$present){
			echo '<div  class="container-fluid text-center bg-1 top" style="background-color:black;">';
			echo '<br><br><br>';
			$current_Attendance  = sprintf('%0.2f', $current_Attendance );
			$new_Attendance = sprintf('%0.2f', $new_Attendance );
			$difference = sprintf('%0.2f', $difference  );
			$allowed_absent -= $days;
			$allowed_absent = intval($allowed_absent);
			$allowed_absent_days = $allowed_absent/$lectures_in_a_day;
			$allowed_absent_days = sprintf('%0.2f', $allowed_absent_days  );
			
			if($absent_till_date<=$should_be_present_hours){
				echo 'You can be Absent for <b>'.$allowed_absent.'</b> lectures for exact '.$minimum_percentage_require. '% attendance at the end of the year*<br />';
				echo 'Roughly around <b>'.$allowed_absent_days .' days</b>*.<br />';
			}elseif($absent_till_date>$should_be_present_hours){
				echo 'Attendance can\'t reach '.$minimum_percentage_require. '%. Apply Medical certificate*.<br />';
			}
			echo 'Current Attendance is <b>'.$current_Attendance  .'%</b>';
			echo '<br>Attendance after missing '.$days.' lecture/s will be <b>'.$new_Attendance.'%</b>';
			echo '<br>How much Attendance will you loose? It is <b>'.$difference.'%</b><br><br><br>';
			echo '**For Reference Only!**';
		}
		
		else{
			echo 'Total Number of Classes Must be greater than or Equal to Present Classes!';
			echo '<a href="javascript:history.back()"><h4>Click to Go Back</h4></a>';
			echo '</div>';
		}
	
	}elseif(!empty($_POST['present']) && !empty($_POST['total']) && $days=='0' && ($_POST['total'] >= $_POST['present'])){
		
			$new_total = $total + $days;
			$current_Attendance = rtrim(($present/$total)*100);
			$new_Attendance = ($present/$new_total)*100;
			$difference = $current_Attendance - $new_Attendance;
			$absent_till_date = $total - $present;
			@$should_be_present_hours = intval(($number_of_working_days * $lectures_in_a_day) * (100 - $minimum_percentage_require) / 100);
			$allowed_absent = $should_be_present_hours - $absent_till_date;
			
			echo '<div  class="container-fluid text-center bg-1 top" style="background-color:black;">';
			$current_Attendance  = sprintf('%0.2f', $current_Attendance );
			$new_Attendance = sprintf('%0.2f', $new_Attendance );
			$difference = sprintf('%0.2f', $difference  );
			$allowed_absent = $allowed_absent - $days;
			//$allowed_absent = intval($allowed_absent);
			$allowed_absent_days = $allowed_absent/$lectures_in_a_day;
			$allowed_absent_days = sprintf('%0.2f', $allowed_absent_days  );
			echo '<br><br><br>';
			if($absent_till_date<=$should_be_present_hours){
				echo 'You can be Absent for <b>'.$allowed_absent.'</b> lectures for exact 75% attendance at the end of the year*<br />';
				echo 'Roughly around <b>'.$allowed_absent_days .' days</b>*.<br />';
			}elseif($absent_till_date>$should_be_present_hours){
				echo 'Attendance can\'t reach 75%. Apply Medical certificate*.<br />';
			}

			echo 'Current Attendance is <b>'.$current_Attendance  .'%</b>';
			//echo '<br>Attendance after missing '.$days.' lecture/s will be <b>'.$new_Attendance.'%</b>';
			//echo '<br>How much Attendance will you loose? It is <b>'.$difference.'%</b><br><br><br>';
			echo '</b><br><br><br>';
			echo '**For Reference Only!**';
		
	
	}else{
			echo '<div  class="container-fluid text-center bg-1 top" style="background-color:black;">';
			echo '<br><br><br>Check the Details Again and Try Again<br><br>';
			echo '<a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
			<span class="glyphicon glyphicon-chevron-up"></span></a>';
			echo '<br><br><br></div>';
		
	}
}else{
	echo '<div  class="container-fluid text-center bg-1 top" style="background-color:black;">';
	echo '<br><br><br>Check the Details Again and Try Again<br><br>';
	echo '<a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
	<span class="glyphicon glyphicon-chevron-up"></span></a>';
	echo '<br><br><br></div>';
}

?>