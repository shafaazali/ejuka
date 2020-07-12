<html>
<head>
<title>
Products
</title>

<?php 
require_once('auth.php');
if(isset($_POST['submit']))
{
	include('../connect.php');
$a = $_POST['category'];
$b=  $_POST['questions']; 


// query
$sql = "INSERT INTO questions(Question,Q_Cid_fk) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$b,':b'=>$a))or die("hello");
header("location: questions.php");
}
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>




 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

<body>
<?php include('navfixed.php');?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <?php include "menu.php";?>
			
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Add Questions
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li><a href="questions.php">Questions</a></li> /
			<li class="active">Add Questions</li>
			</ul>

<form method="post">
<table class="table table-bordered" id="resultTable" data-responsive="table">
<tr>
    <td>Category Name</td>
    <td><select name="category"  required="required" >
<option value=""> -select-</option>
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM category");		
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['C_ID']; ?>"><?php echo $row['C_Name']; ?> </option>
	<?php
	}
	?>
</select></td>
</tr>
<tr>
    <td>Category Result</td><td><textarea name="questions" required="required"></textarea> </input></td>
</tr>
    
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></input></td> </tr>
</table>
</form>

<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
 




</body>
<?php include('footer.php');?>

</html>