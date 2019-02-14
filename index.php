<?php
require_once('conn.php');
require_once('counter.php');

updateCounter("Index"); // Updates page hits
updateInfo(); // Updates hit info

?>
<html>
<?php
require 'meta.inc.php';
?>



<script>
var reference = (function thename(){

    document.getElementById('demo').innerHTML = Date();

    return thename; //return the function itself to reference

}());


function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
function showFallbackImage(){
	document.getElementById('demo').innerHTML = Date();
}
</script>
     

    <script>
      if( window.canRunAds === undefined ){
        // adblocker detected, show fallback
        showFallbackImage();
      }
    </script>

<script>
$(document).ready( function() {
  window.setTimeout( function() {
    var bottomad = $('#bottomAd');
    if (bottomad.length == 1) {
      if (bottomad.height() == 0) {
       document.write(5 + 6);
      } else {
        // no adblocker
      }
    }      
  }, 1);
}
</script>


<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50" >

<nav class="navbar navbar-default navbar-fixed-top text-center">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../">AttendeX</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right nav-pills">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#footer">END</a></li>

      </ul>
    </div>
  </div>
</nav>

<?php
include 'form.inc.php'
?>

<div id="calculator" >
<?php
require_once 'calculator.php'
?>
</div>
<!-- Container (The About Section) -->
<div id="about" class="text-center bg-1 container-fluid col-xs-12 ">




  <h3>ABOUT US</h3><br>

  <p>We are final year students studying at SRM University. This site has been created for comparison purpose only. Not affiliated with the university in any way.</p>
  <br>
<div class="col" style="padding: 0px 100px 0px 400px;">
 <div class="col-sm-4">
      <p class="text-center"><strong>Aviraj</strong></p><br>
      <a href="#aviraj" data-toggle="collapse">
        <img src="../images/aviraj2.jpg" class="img-circle person" alt="Aviraj" width="400" height="250">
      </a>
      <div id="aviraj" class="collapse">
        <p>Aviraj Chatterjee</p>
        <p>Currently final year student of BSc. Visual Communication. Helped in the discovering the formula. </p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>Akarsh</strong></p><br>
      <a href="#anon" data-toggle="collapse">
        <img src="../images/akarsh.jpg" class="img-circle person" alt="Akarsh" width="400" height="255">
      </a>
      <div id="anon" class="collapse">
        <p>Akarsh Shrivastava</p>
        <p>Developed and Customised the website. Helped in discovering the formula for calculating.  </p>
      </div>
    </div>
  </div>
</div><br>

<!-- Container (Nothing Section) --> 
<div id="nothing" class="text-center bg-1 xs-12">

  </div>
  <p id="footer" class=""></p>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Website Developed By <a href="https://www.facebok.com/akarsh.shrivastava1" data-toggle="tooltip" title="Akarsh">Akarsh</a></p>
  <?php
// Connects to your Database 





// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count FROM Hits_Table";
$result = $conn->query($sql);

echo $result;
*/





$sql = "SELECT count FROM Hits_Table";
$query = $db->prepare($sql);
$query->execute();
$page_hits = $query->fetchAll();




$total_hits = 0;
			foreach($page_hits as $ind_page){
				echo '<tr><td><strong>'.Visitors.'</strong>:</td>
				
				<td>'.$ind_page['count'].'</td></tr>';
				$total_hits += $ind_page['count'];
			}

				//echo $total_hits;



//@mysql_select_db("Hits_Table") or die(mysql_error()); 
//Adds one to the counter

//@mysql_query("UPDATE counter SET counter = counter + 1");

//Retrieves the current count

//@$count = mysql_fetch_row(mysql_query("SELECT counter FROM counter"));
//
//Displays the count on your site

//echo '<br>'.$count[0];
?>

</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});
$(document).on('click','#demo.bs.collapse.in', function (e) {
  if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
})
</script>


</body>
</html>