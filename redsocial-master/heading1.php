    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Cambiar Foto de Perfil</a>
         <br><br>
		<div class="pull-left"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Editar</a></div>
      </div>
		<div class="col-md-10">
			<hr>
			
			<center>
				
				<h2>Información Personal</h2>

			</center>

				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>

			<div class="row">
					  	
				<div class="form-group col-md-3">
		          
		           <label for="Nombre" >Nombre</label>  

				   <input readonly class="form-control" type="text" id="Nombre" name="username" value="<?php echo $row['firstname']." ".$row['lastname']; ?>">
			    </div>

			    <div class="form-group col-md-3">
		          
		           <label for="Genero" >Género</label>  

				   <input readonly class="form-control" type="text" id="Genero" name="username" value="<?php echo $row['gender']; ?>">

				</div>

			    <div class="form-group col-md-3">
		          
		           <label for="Direccion" >Dirección</label>  

				   <input readonly class="form-control" type="text" id="Direccion" name="username" value="<?php echo $row['address']; ?>">
		
			    </div>

			    <div class="form-group col-md-3">
		          
		           <label for="Fecha" >Fecha de Nacimiento</label>  

				   <input readonly class="form-control" type="text" id="Fecha" name="username" value="<?php echo $row['birthdate']; ?>">
		
			    </div>
			
            </div>  <br>

            <div class="row">
					  	
				<div class="form-group col-md-3">
		          
		           <label for="Numero" >Número de Contacto</label>  

				   <input readonly class="form-control" type="text" id="Numero" name="username" value="<?php echo $row['mobile']; ?>">
				   
			    </div>

			    <div class="form-group col-md-3">
		          
		           <label for="Estado" >Estado</label>  

				   <input readonly class="form-control" type="text" id="Estado" name="username" value="<?php echo $row['status']; ?>">
				   
				</div>

			    <div class="form-group col-md-3">
		          
		           <label for="Trabajo" >Trabajo</label>  

				   <input readonly class="form-control" type="text" id="Trabajo" name="username" value="<?php echo $row['work']; ?>">
						
			    </div>

			    <div class="form-group col-md-3">
		          
		           <label for="Religion" >Religión</label>  

				   <input readonly class="form-control" type="text" id="Religion" name="username" value="<?php echo $row['religion']; ?>">
						
			    </div>
			
            </div> 

            <br>
            <br>
            <br>
							
		</div>

    </div> 
