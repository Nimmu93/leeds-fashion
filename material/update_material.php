<!DOCTYPE html >
<html >
<head>

<title>Update Material</title>


<style>
body {
    background-color: #cccccc;
}

</style>
</head>

<body>
<?php include '../fheader1.php';?>
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
				
			
				
				<form class="form-horizontal" name="myform" action="update_material1.php" method="post">
						
						<div class="form-group">
							<label  class="control-label col-sm-4" >Material ID:</label>
							<?php
								if(isset($_POST['update'])) {
								$id = $_POST['resid'];
								echo $id;
								}
							?>
							
							<input type="hidden" name="res_no" id="myvalue" value= <?php echo $_POST['resid']?> >
							
						</div>
						
						<div class="form-group">
							<label for="yards" style="margin-left:275px;">Number of Used Yards</label>
						<input type="text"  id="myards" class="form-control" style="width:200px;margin-left:450px;margin-top:-30px;"required name="myards" placeholder="Number of Used Yards" >
						</div>
						
						<div class="form-group"> 
							<div class="col-sm-offset-4 col-sm-10" >
								<button type="submit" name="delete" class="btn btn-default">Update Material</button>	
							</div>
						</div>
						<div class="form-group">
							<div  class="col-sm-offset-4 col-sm-10"><a href="material_table.php"> GO BACK </a></div>
						</div>	
					</form>
				
				
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>