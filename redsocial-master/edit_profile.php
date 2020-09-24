<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>

	<?php include('Banner.php'); ?>

<div id="masthead">  
	<div class="container">
		
		<div class="row">
	      
	      <div class="col-md-2 col-sm-12">
				<hr>
				<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
				<hr>
				<button class="btn btn-success">Cambiar Foto de Perfil</button>
	      </div>
		  <div class="col-md-10 col-sm-12">

		  	<center>
				
				<h2>Editar Información Personal</h2>

			</center>
				
				<?php
					$query = $conn->query("select * from members where member_id = '$session_id'");
					$row = $query->fetch();
					$id = $row['member_id'];
				?>
					<hr>
									

				<form method="post" action="save_edit.php">

					<div class="row">
					  	
							<input  type="hidden" name="member_id" value="<?php echo $id; ?>">

						  <div class="form-group col-md-3">
					          
					        <label for="EditarUsuario" >Usuario</label>  

							<input readonly class="form-control" type="text" id="EditarUsuario" name="username" value="<?php echo $row['username']; ?>">
						  </div>

						  <div class="form-group col-md-3">
					          
					        <label for="editarNombre">Nombre</label> 
							
							<input class="form-control" id="editar" type="text" name="firstname" value="<?php echo $row['firstname']; ?>">

					      </div> 

					      <div class="form-group col-md-3">
					          
					        <label for="editarApellido">Apellido</label> 
							
						    <input class="form-control" id="editarApellido" type="text" name="lastname" value="<?php echo $row['lastname']; ?>">

					      </div> 

					      <div class="form-group col-md-3">
					          
					        <label for="editarGenero">Género</label> 
							
							<select name="gender" class="form-control" id="editarGenero">
								<option><?php echo $row['gender']; ?></option>
								<option>Hombre</option>
								<option>Mujer</option>
							</select>
						    
					      </div>

					</div>
					<br>
					<div class="row">      

					      <div class="form-group col-md-3">
					          
					        <label for="editarFecha">Fecha de Nacimiento</label> 
							
						    <input class="form-control" id="editarFecha" name="birthdate" type="text" value="<?php echo $row['birthdate']; ?>">

					      </div>  

					      <div class="form-group col-md-3">
					          
					        <label for="editarDirrecion">Dirección</label> 
							
						     <input class="form-control" id="editarDirrecion" name="address" type="text" value="<?php echo $row['address']; ?>">
						    
					      </div>

					      <div class="form-group col-md-3">
					          
					        <label for="editarEstado">Estado</label> 
							
						     <input class="form-control" id="editarEstado" name="status" type="text" value="<?php echo $row['status']; ?>">
						    
					      </div>

					      <div class="form-group col-md-3">
					          
					        <label for="editarMovil">Móvil</label> 
							
						     <input class="form-control" id="editarMovil" name="mobile" type="text" value="<?php echo $row['mobile']; ?>">
						    
					      </div>

					</div>
					 <br>
					<div class="row">       

					      <div class="form-group col-md-3">
					          
					        <label for="editarTrabajo">Trabajo</label> 
							
						     <input class="form-control" id="editarTrabajo" name="work" type="text" value="<?php echo $row['work']; ?>">
						    
					      </div>

					      <div class="form-group col-md-3">
					          
					        <label for="editarRegion">Religión</label> 
							
						     <input class="form-control" id="editarRegion" name="religion" type="text" value="<?php echo $row['religion']; ?>">
						    
					      </div>

					  </div>	
					<br>
				     	<center>
				     		<div class="row">

				     			<div class="col-md-3"></div>

				     			<div class="col-md-3">
							   
							        <button name="save" class="btn btn-primary btn edit">Guardar</button>
				     				
				     			</div>

				     			<div class="col-md-3">
							   
							        
							        <a name="save" href="profile.php" class="btn btn-danger btn">Cancelar</a>
				     				
				     			</div>
				     			
				     		</div>
						</center>
					<br>
				<form>

		   </div>

        </div> 
	
	</div><!-- /cont -->

	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<div class="top-spacer">

			 </div>
		</div>
		</div> 
	</div><!-- /cont -->

</div>

                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>
