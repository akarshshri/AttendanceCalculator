<?php
require 'meta.inc.php';
?>
			<script type = "text/javascript" language="Javascript">
				
				function OnButton1()
				{
					//document.Form1.action = "#calculator"
					document.Form1.target = "_blank";    // Open in a new window

					document.Form1.submit();             // Submit the page

					return true;
				}

				function OnButton2()
				{
					document.Form2.action = "weqe.php";
					//document.Form2.action = "//ylx-4.com/mobile_redir.php?section=General&pub=878284&ga=g&desktop=1"
					//document.Form2.target = "_blank";    // Open in a new window

					document.Form1.submit();             // Submit the page


					return true;
				}
				
			</script>
	<noscript>You need Javascript enabled for this to work</noscript>

	
<div class="text-center" style="background-color:#777E7C;">
</div>
	<div style="background-color:#777E7C;">
		<br><br><br>
		<div class=" col-sm-12">
			<blockquote style="background-color:#777E7C;">
			<p class="bg-info  col-sm-5">To Find Current and Future Status</p>
			</blockquote>
		</div>
		<form class="rounded" method="POST" action="#calculator" name="Form1">
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
			
				<input type="button" value="Submit" class="btn  btn-success rounded" onclick="OnButton1(); OnButton2();"></input>
				
				<button type="reset" class="btn btn-warning rounded">Reset</button>
			</div>
			<!-- Advertisement Script -->
			
			<script type="text/javascript" src="//ylx-1.com/bnr.php?section=General&pub=878284&format=160x600&ga=g"></script>
	<noscript><a href="https://yllix.com/publishers/878284" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/160x600.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" /></a></noscript>
			<script>
			
			
			$('#myModal').on('hidden.bs.modal', function() {
			  this.modal('show');
			});
			</script>


			
			
			
			
		</form>
		
		<br>
	</div>
	