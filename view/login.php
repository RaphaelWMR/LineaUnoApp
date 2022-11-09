<?php
$page_tittle = "App Linea Uno Iniciar Sesión";
$plugins = array();
include('./partials/header.php');
?>
<h1>App linea uno del metro de Lima</h1>
<h2>Iniciar sesión</h2>
<form action="./dashboard/dashboard.php">
    <label for="">Número de documento de identidad: </label>
    <input type="text">
    <label for="">Contraseña</label>
    <input type="password">
    <input type="submit" value="Iniciar sesión">
    <label for="">¿No tienes una cuenta? <a href="./signUp/SignUp.php">Registrate</a></label>
</form>
<?php
include('./partials/footer.php');
?>