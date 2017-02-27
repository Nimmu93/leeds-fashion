<!DOCTYPE>
<html>
   <head>
      <link rel="stylesheet" href="css/bootstrap.css">
	  
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
     
      <link rel="stylesheet" href="ahome.css">
      <link rel="stylesheet" href="family.css">
      <style>
         .dropdown-menu>li>a:hover, .nav>li>a:hover {
         background-color: #e0e0e0 !important;
         }
      </style>
   </head>
   
   <!-- Connecting to the database-->
   <?php include('dbcon1.php'); ?>
   
   <body style="background-color:#FFCC66">
      <nav class="navbar navbar-default">
         <div class="container">
		 
            <!-- Brand and toggle get grouped for better mobile display -->
			
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a  href="fhome.php">
               <img alt="Brand" src="Templates/liy.png" width="65" height="85" class="img-responsive" style="margin-top:-10px" >
               </a>
            </div>
			
            <!-- Collect the nav links and other content for toggling -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  
                  <li class="Material">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Material<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="addmaterial.php">Add Material</a></li>
                        <li><a href="material/material_table.php">Material Stock</a></li>
                        <li><a href="materiald/material_history.php">Material History</a></li>
                        
                     </ul>
                  </li>
				  <li class="Product">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="rules/commonrules.php">Common Rules</a></li>
                        <li><a href="rules/reservationrules.php">Reservations Rules</a></li>
                        <li><a href="rules/paymentrules.php">Payment Rules</a></li>
                        <li><a href="rules/cancelrules.php">Cancellation Rules</a></li>
                     </ul>
                  </li>
                  <li role="presentation"><a href="fgallery.php">Material Gallery</a></li>
				  <li role="presentation"><a href="fgallery.php">Product Gallery</a></li>
                  
                  
               </ul>
            </div>
			
            <!-- /.navbar-collapse -->
			
         </div>
		 
         <!-- /.container-fluid -->
		 
      </nav>
</html>