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
<?php include 'adminnavbar.php';?>
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
				<div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
<?php

include 'dbconnect.php';


?>
</div>
</div>
</div>
</div>
</section>
</body>
</html>