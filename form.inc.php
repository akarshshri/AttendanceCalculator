<?php
require 'meta.inc.php';
?>
<div class="text-center" style="background-color:#777E7C;">
</div>
	<div style="background-color:#777E7C;">
		<br><br><br>
		<div class=" col-sm-12">
			<blockquote style="background-color:#777E7C;">
			<p class="bg-info  col-sm-5">To Find Current and Future Status</p>
			</blockquote>
		</div>
		<form class="rounded" method="POST" action="#calculator">
			<div class="col-sm-4 rounded" style="background-color:#2C2F39;"><br>
				<label for="total_classes" class="bg-info ">Total Classes</label>
				<input class="form-control input-sm rounded" id="total_classes" type="number" name="total" maxlength="3" method="POST"><br><br>
			</div>
			<div class="col-sm-4 rounded" style="background-color:#2C2F39;"><br>
				<label for="present_classes" class="bg-info ">Total Present Classes</label>
				<input class="form-control input-sm rounded" id="present_classes" type="number" name="present" maxlength="3" method="POST"><br><br>
			</div>
			<div class="col-sm-4 rounded" style="background-color:#2C2F39;"><br>
				<label for="absent_classes" class="bg-info ">How Many Classes you will miss?</label>
				<input class="form-control input-sm rounded" id="absent_classes" type="number" name="days" maxlength="3"  method="POST" value='0' ><br><br>
			</div>
			<!-- <div class="col-sm-12 rounder" ><h3 align="center ">OR</h3></div>
			<div class=" col-sm-12">
				<blockquote style="background-color:#777E7C;">
				<p class="bg-info  col-sm-5">Use this if you only know your Attendence Percentage</p>
				</blockquote>
			</div>
			<div class="col-sm-6 toplbottoml" style="background-color:#2C2F39;"><br>
				<label for="current_percent" placeholder="Don't Include Percentage" class="bg-info ">Current Attendence Percentage</label>
				<input class="form-control input-sm rounded" id="current_present" type="text" name="attend_percent" maxlength="6" ><br><br>
			</div>
			<div class="col-sm-6 toprbottomr" style="background-color:#2C2F39;"><br>
				<label for="absent_classes" class="bg-info ">How Many Classes you will miss?</label>
				<input class="form-control input-sm rounded" id="absent_classes" type="number" name="days2" maxlength="3"  ><br><br>
			</div> -->
			<br>
                       <div class="wrapper">
			
				<br><button type="submit" class="btn  btn-success rounded" >Submit</button>
				
				<button type="reset" class="btn btn-warning rounded">Reset</button><br />
			<!-- Advertisement Script -->

			
		</div>
		</form>
		
		<br>
	</div>
	