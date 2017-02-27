<!DOCTYPE html >
<html >
<head>

<title>Material Stock</title>


<style>
body {
    background-color: #ff9900;
}

</style>
</head>

<body>
<?php include '../fheader1.php';?>
<section style=" padding-top: 10px; padding-bottom: 20px;
				padding-left: 104px; padding-right: 105px; ">
<div class="col-sm-3 col-md-3 pull-right">
        <form style="margin-top:20px;" method="post" action="searchhistory.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
		<h1>Material Stock</h2>
		<hr noshade>
	
</section>

<section>
    <div class="container">
		<div class="row">
		
            <div class="col-lg-12 col-md-12 col-sm-12 "  >
				<div class="jumbotron" style="background-color:#cccccc; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
<?php

include '../dbconnect.php';

$search=$_POST['srch'];

	//display reservations details in a table//

	// Select all data , display them in a table//
	$select = "SELECT * FROM material WHERE material = '$search' OR myards ='$search' ";
	$result = mysqli_query($conn, $select);
	
	if (!$result) {
    die('Invalid query: ' . mysql_error());
	}

	
	if ( mysqli_num_rows($result) > 0) {
					
	// print table heads//
		
		echo ('<div class="table-responsive"><table border=1 class="table table-bordered" ">
			<thead style="background-color:#8c8c8c;">
			<tr>
				<th>Material</th>
				<th>Unit Price</th>
				<th>Number of yards</th>
				<th>Shop</th>
				<th>Amount</th>
				<th>Date</th>
				
				<th>Delete</th>
				
			</tr></thead>');
	 
	 
			echo("<tbody>");
			// output data from row by row
			while($row = mysqli_fetch_assoc($result)) {
				//echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
				echo (
				"<tr>
					<form method=\"post\" action=\"material_history.php\">
						<td>" . $row["material"] . "</td>
						<td>" . $row["mprice"] . "</td>
						
						<td>" . $row["myards"] . "</td>
						<td>" . $row["mshop"] . "</td>
						
						<td>" . $row["Total_Amount"] . "</td>
						<td>" . $row["date_posted"] . "</td>
						
						
						
						<td>
							
							<input name=\"resid\" type=\"hidden\" id=\"resid\" value=\"".$row["id"]."\"\>
							<input class=\"delete1\" name=\"delete\" type=\"submit\" id=\"update\" value=\"Delete\">
						</td>
					</form>
				</tr>");
				
			}
		
		echo ("</tbody></table></div>");
		} 

		else {
			
			
			echo ("<p class=reservation_table1>\"Sorry there is no record\"</p>");
		}

mysqli_close($conn);


?>
</div>
</div>
</div>
</div>
</section>
</body>
</html>