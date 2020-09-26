    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp img-circle" src="<?php echo $image; ?>" height="140" width="140"></center>
		<hr>
		<a class="btn btn-success " href="change_pic.php">Cambiar Foto de Perfil</a>
      </div>
		<div class="col-md-5">
			<hr>
			<center><h2>Información Personal</h2></center>

			<?php
				$query = $conn->query("select * from members where member_id = '$session_id'");
				$row = $query->fetch();
				$id = $row['member_id'];
			?>

			<hr>
			<div class="row">
				
				<div class="form-group col-md-4">
				    <label for="Nombre">Nombre</label>
				    <input type="email" class="form-control" id="Nombre" aria-describedby="emailHelp" title="Nombre" value="<?php echo $row['firstname']." ".$row['lastname']; ?>"
				    readonly>
				    
				</div>

				<div class="form-group col-md-3">
				    <label for="Genero">Género</label>
				    <input type="email" class="form-control" id="Genero" aria-describedby="emailHelp" title="Genero" value="<?php echo $row['gender']; ?>"
				    readonly>
				    
				</div>

				<div class="form-group col-md-5">
				    <label for="Direccion">Dirección</label>
				    <input type="email" class="form-control" id="Direccion" aria-describedby="emailHelp" title="Direccion" value="<?php echo $row['address']; ?>"
				    readonly>
				    
				</div>

			</div>	

			<hr>
		</div>
      <div class="col-md-5">
			<form method="post" action="post.php">

				    <div class="row">
				    	
				    	<br>
				    	<div class="form-group col-md-5">

						    <label for="Comentarios">Comentario</label>
						    <textarea name="content" class="form-control" id="Comentarios" title="Haz tus comentarios aquí" placeholder="Haz tus comentarios aquí" rows="6">
						    </textarea>	
						 				    
				        </div>

				    </div>

				    <button class="btn btn-success"><i class="icon-share"></i> Compartir </button>	
						
						
			</form>
      </div>
    </div> 
