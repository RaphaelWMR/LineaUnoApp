<?php
$page_tittle = "App Linea Uno Registrarme";
$plugins = array();
include('../partials/header.php');
?>
<h2>Registrarme</h2>
<form action="./endSignUp.php">
    <h3>Paso 1: Rellena tus datos personales</h3>
    <label for="">Tipo de documento </label>
    <select name="" id="">
        <option value="">DNI</option>
        <option value="">Carné de extranjería</option>
        <option value="">Pasaporte</option>
    </select>
    <label for="">Primer apellido</label>
    <input type="text">
    <label for="">Segundo apellido</label>
    <input type="text">
    <label for="">Nombres</label>
    <input type="text">
    <label for="">Fecha de nacimiento</label>
    <input type="date" name="" id="">
    <h3>Paso 2: Rellena tus datos de contacto</h3>
    <label for="">Número de teléfono celular</label>
    <select name="" id="">
        <option value="+51">+51&nbsp;Perú</option>
        <option value="+58">+58&nbsp;Venezuela</option>
        <option value="+56">+56&nbsp;Chile</option>
        <input type="text">
    </select>
    <h3>Paso 3: Confirma tu registro</h3>
    <p><input type="checkbox" name="" id=""> He leido y acepto la <a href="./dataProtection.php" target="_blank">Política de protección de datos</a> </p>
    <input type="submit" value="Crear cuenta">
</form>
<?php
include('../partials/footer.php');
?>