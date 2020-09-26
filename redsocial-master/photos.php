<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>

<div id="masthead">  
  <div class="container">
	<?php include('heading.php'); ?> 
  </div><!-- /cont -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
</div>


<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Compartir Histotia
</button>
        	<hr>
            <center><h2 >Mis Fotos</h2></center>



				<div class="pull-right">


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form    method="POST" enctype="multipart/form-data">

		      <div class="modal-body">

		      	
					<label class="control-label" for="input01">Imagen:</label>
					
						<input type="file" name="image" class="font" required>
										
						<br>														
		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" name="submit" class="btn btn-primary"><i class="icon-upload"></i>Guardar</button>
		      </div>

      </form>
    </div>
  </div>
</div>




							
							<?php 
								if (isset($_POST['submit'])) {
 
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
 
		move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
		$location = "upload/" . $_FILES["image"]["name"];
		$conn->query("insert into photos (location,member_id) values ('$location','$session_id')");
	?>
	<script>
		window.location = 'photos.php';
	</script>
	<?php
	}
	?>
				</div>
			
          <div class="row">  		  
            
            <hr>

				<?php
					$query = $conn->query("select * from photos where member_id='$session_id'");
					while($row = $query->fetch()){
					$id = $row['photos_id'];
				?>

            <div class="col-md-2 col-sm-3 text-center">

				<a class="btn btn-danger" href="delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Eliminar</a>

				<hr>

				<img class="photo" src="<?php echo $row['location']; ?>" >

            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<?php } ?>
          </div>
          <hr>
                  
             
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>

    <script>
    	
    	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>
</html>
