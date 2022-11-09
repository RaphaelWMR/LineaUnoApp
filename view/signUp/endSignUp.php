<?php
$page_tittle = "App Linea Uno Iniciar Sesión"; // Titulo
$plugins = array();//Plugins por pagina
include('../partials/header.php');
?>

<!-- Escribir codigo aqui -->
<h2>Registro completado</h2>
<p>Ahora ya tienes una cuenta en la app de la Línea 1 del Metro de Lima</p>
<form action="../login.php">
    <input type="submit" value="Ir a Iniciar Sesión">
</form>
<?php
include('../partials/footer.php');
?>