

<!DOCTYPE html >
<html >
<head>

<title>Update Material</title>

<style>
body {
    background-color: #ff9900;
}

</style>

</head>
<body style="background-color:#F5F5F5;" >
<?php 
include '../fheader1.php'; 
?>


<section style=" padding-top: 10px; padding-bottom: 20px;
				padding-left: 104px; padding-right: 105px; ">

		<h1>Update Material</h2>
		<hr noshade>
	
</section>
<section>
    <div class="container">	
		<div class="row">		
            <div class="col-lg-12 col-md-12 col-sm-12 "  >			
				<div class="jumbotron" style="background-color:#cccccc; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
					<h3>Material Data has been updated</h3>
				<?php

include '../dbconnect.php';

$m_id = $_POST["res_no"];
$myards= $_POST["myards"];


// checks if the deleted reservation's payment done
$paid="Update material1 set myards=myards-$myards where material=$m_id";
$result6 = mysqli_query($conn,$paid);
if (!$result6) {
    die('Invalid query: ' . mysql_error());
	}


mysqli_close ($conn);
?>

					<a href="material_table.php"> Go back to the material table </a>
	
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>