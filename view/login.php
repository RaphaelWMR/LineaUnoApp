<?php
$page_tittle = "App Linea Uno Iniciar Sesión";
include('./partials/header.php');
?>
<h1>App linea uno del metro de Lima</h1>
<p>Iniciar sesión</p>
<form action="">
    <label for="">Número de documento de identidad: </label>
    <input type="text">
    <label for="">Contraseña</label>
    <input type="text">
    <input type="submit" value="Iniciar sesión">
    <label for="">¿No tienes una cuenta? <a href="">Resgistrarme</a></label>
</form>
<?php
include('./partials/footer.php');
?>