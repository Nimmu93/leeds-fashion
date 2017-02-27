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

<body>
<?php include 'fheader.php';?>
<section style=" padding-top: 10px; padding-bottom: 20px;
				padding-left: 104px; padding-right: 105px; ">
<div class="col-sm-3 col-md-3 pull-right">
        <form style="margin-top:20px;" method="post" action="searchmaterial.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
		<h1>Update Material</h2>
		<hr noshade>
	
</section>

<section >
    <div class="container">
		<div class="row">
		
            <div class="col-lg-12 col-md-12 col-sm-12 "  >
				<div class="jumbotron" style="background-color:#cccccc; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
				
		        <button class="btn btn-info" style="margin-top:40px;margin-left:250px;" type="submit" name="submit" class="btn btn-success"><a href="update_material.php" style="color:black;">Update Material</a></button>
				<button class="btn btn-info" style="margin-top:40px;margin-left:170px;" type="submit" name="submit" class="btn btn-success"> Update Stock</button>

</div>
</div>
</div>
</div>
</section>
</body>
</html>