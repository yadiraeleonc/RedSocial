<form  action="signup_save.php" method="post" autocomplete="on"> 
    <h4 style="font-weight: bold;color: gray;text-align: left"> Formulario de Registro </h4> 
	<hr>
    <div class="grid-container">
        <div class="grid-item">
            <div class="dataUsuario"> 
                <div>Nombre</div>
                <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="Nombre"/>
            </div>
            <div class="dataUsuario"> 
                <div>Tu usuario</div>
                <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
            </div>
            <div class="dataUsuario"> 
                <div>Tu género</div>
		        <select id="passwordsignup"  name="gender" class="GenderSelection">
		        	<option></option>
		        	<option>Hombre</option>
		        	<option>Mujer</option>
		        </select>
            </div>
        </div class="dataUsuario">
        <div class="grid-item">
            <div class="dataUsuario"> 
                <div>Apellido</div>
                <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Apellido"/>
            </div>
            <div class="dataUsuario"> 
                <div>Contraseña</div>
                <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
            </div>
        </div>
    </div>
    <div class="botnRegistrar">
        <button type="submit" value="Sign up" class="botonIngreso" style="background:primary">Registrarse</button>
    </div>
    <p class="change_link">  
		Ya estás registrado ?
		<a href="#tologin" style="background:gray;color:white;border-radius: 10px;"> Ingresar </a>
	</p>
</form>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  padding: 10px;
}
.grid-item {
    padding: 20px 0;
    width: 11rem;
}.
.botonIngreso {
    margin-top:30px;
    margin-bottom:30px;
    background-color: #DE3C4B;
    color: #fff;
    font-size: 1.2rem;
    width: 50%;
    border-radius: 10px;
}
.dataUsuario {
    margin-top:10px
}
.GenderSelection {
    width: 12rem;
}
.botnRegistrar {
    text-align: center;
}
</style>