                    
<div class="container">
    <div class="col-lg">
    <h3 class="titulo">Ingresar</h3> 
    <hr>
    <div class="colForm" >
        <form  method="post" action="login.php" autocomplete="on" class="mx-auto">    
            <div class="itemform">Tu usuario</div>
            <input name="username" required="required" type="text" class="entrada"/>
            <div class="itemform"> Tu contraseña </div>
            <input name="password" required="required" type="password" class="entrada"/> 
            <button type="submit" class="botonIngreso" style="background:primary">Ingresar</button>
            <hr>
            <div class="left"> Aun no eres miembro ?</div>
            <a href="#toregister" class="to_register">Regístrate</a>
        </form>
    </div>
</div>   


</div>
<style type="text/css">
.container {
}
.titulo {
    font-weight: bold;
    color: gray;
    text-align: left;
}
.usuario {
    font-size: 12px;
}
.left {
    float: left;
    width: 125px;
    text-align: right;
    margin: 2px 10px;
    display: inline; 
}
.botonIngreso {
    margin-top:30px;
    margin-bottom:30px;
    background-color: #DE3C4B;
    color: #fff;
    font-size: 1.2rem;
    width: 50%;
    border-radius: 10px;
}
.botonIngreso:hover {
    cursor:pointer
}
.botonRegistrar {
    
}
.botonRegistrar:hover {
    cursor:pointer
}
.registrate {
    align-content: center
}
.contenedor {
    display:flex;
}
.colForm{
    width: 15rem;
    margin: auto;
}
.itemform {
    text-align: left;
}
</style>