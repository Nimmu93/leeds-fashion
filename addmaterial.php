<?php include('fheader.php'); ?>    
   
<body>

  <!--Upload photos to the gallery-->
  
  
   <div class="container">
   
      <div class="row">
         <div class="col-md-2">
         </div>
         <div class="col-md-8">
            <div class="panel" style="margin-top:20px;">
               <div class="panel-body" style="background-color:#cccccc">
                  <h2 id="po">Add a Material</h2>
                  <hr>
                  <div >
                     <form id="photos"   method="POST" enctype="multipart/form-data">
                        
						
						<div class="form-group">
						<label for="material">Material ID</label>
							<input type="text" class="form-control" id="material" required name="material" placeholder="Material ID">
						</div>
						<div class="form-group">
							<label for="mprice">Material Price (1 yard)</label>
						<input type="text" class="form-control" id="mprice" required name="mprice" placeholder="Price 1 yard" >
						</div>
						
						<div class="form-group">
							<label for="yards">Number of Yards</label>
						<input type="text" class="form-control" id="myards" required name="myards" placeholder="Number of Yards" >
						</div>
						
						<div class="form-group">
							<label for="password">Shop</label>
						<input type="text" class="form-control" id="mshop" required name="mshop" placeholder="Shop Name" >
						</div>
						
						<label class="control-label" for="input01">Choose an Image</label>
                        <input type="file" name="image" class="font" required>
                        <button class="btn btn-info" style="margin-top:40px;" type="submit" name="submit" class="btn btn-success"><i class="icon-upload " ></i> Add Material</button>
						
                     </form>
                     <?php 
                        if (isset($_POST['submit'])) {
                        
                        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        $image_name = addslashes($_FILES['image']['name']);
                        $image_size = getimagesize($_FILES['image']['tmp_name']);
                        
                        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
						$material= $_POST['material'];
						$mprice= $_POST['mprice'];
						$myards= $_POST['myards'];
						$mshop= $_POST['mshop'];
						$amount=$myards*$mprice;
						
                        $location = "upload/" . $_FILES["image"]["name"];
                        $conn->query("insert into material (material,mprice,myards,mshop,location,Total_Amount,date_posted) values ('$material','$mprice','$myards','$mshop','$location','$amount','".date('Y-m-d')."')");
						$conn->query("insert into material1 (material,mprice,myards,mshop,location,Total_Amount,date_posted) values ('$material','$mprice','$myards','$mshop','$location','$amount','".date('Y-m-d')."')");
                        $conn->query("update material1 set myards=myards+'$myards'  where material='$material'");
						$conn->query("update material1 set Total_Amount=Total_Amount+'$amount'  where material='$material'");
                        
						?>
                     <script>
                        window.location = 'addmaterial.php';
                     </script>
                     <?php
                        }
                        ?>
                  </div>
               
               </div>
            </div>
         </div>
         <!--/col-8-->
      </div>
   </div>
</body>
</html>