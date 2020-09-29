<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-responsive" src="images/foto.png" alt="First slide">
    </div>
    
  </div>
</div>
					<?php include('heading.php'); ?>
					
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
					</div>
					</div> 
				</div><!-- /cont -->
			</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>

 

			<div class="col-md-2 col-sm-3 text-center">
			<img  src="images/male6.jpg" style="width:100px;height:100px" class="img-circle"></a>
            </div>





			
            <div class="col-md-10 col-sm-4">



			<div class="control-group">
											<label>Tu mensaje:</label>
                                          <div class="controls">
											<textarea name="my_message" class="my_message" placeholder="Escribe a tus amigos ♥" required></textarea>
                                          </div>
										</div>

										<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-9">
				<div class="card">
					<div class="card-body d-flex justify-content-between align-items-left">
					
						<a href="#" class="btn btn-primary btn-sm">Enviar</a>
					<br>
					<br>

					</div>
				</div>
			</div>
		</div>
	</div>
			
		  </div>
		  




				<div class="col-md-12 col-sm-3 text-left">
				<hr>
				<label>Mensajes:</label>
				<hr>
				<?php 
				$query = $conn->query("select * from message
				LEFT JOIN members on message.sender_id = members.member_id where reciever_id = '$session_id' ");
				while($row = $query->fetch()){
				$id = $row['message_id'];
				
				?>
				<div class="mes">
					
			<div class="col-md-2 col-sm-1 text-center">
			<img  src="images/fotoperfil.jpg" style="width:70px;height:70px" class="img-circle"></a>
            </div>
				<div class="message"><?php echo $row['content'];?>
					<div class="pull-center">enviado por: 
					<p class="text-muted"><?php echo $row['firstname']." ".$row['lastname'];?> a las <?php echo $row['date_sended']; ?> <a href="delete_message.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i></a></div></p>
				<hr>
				
				</div>
				</div>
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
</html>
