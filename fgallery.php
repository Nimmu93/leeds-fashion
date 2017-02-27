<?php include('fheader.php'); ?>    
  
<body>

<!--Select all the photos from the database and preview it in a gallery -->

   <div class="container">
      <div class="row">
         <div class="col-md-12" style="margin-top:20px;" >
            <div class="panel" style="background-color:#cccccc">
               <div class="panel-body">
                  <h2 id="po">Materials</h2>
                  <hr>
               </div>
               <div class="row">
                  <?php
                     $query = $conn->query("select * from material1");
                     while($row = $query->fetch()){
                     $id = $row['material'];
                     
                     ?>
                  <div class="col-md-2 col-sm-3 ">
                     <img class="photo" src="<?php echo $row['location']; ?>"  width="190" height="200"><br>
                     <h4><span class="label label-info" style="margin-left:80px;"> <?php echo $row['material']; ?></span></h4>
                     
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <!--/col-12-->
      </div>
   </div>
</body>
</html>