<?php
$page_tittle = "App Linea Uno Iniciar Sesión"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
?>
<div class="login m-3">
    <div>
        <form action="../login.php">
            <div class="align-items-center mb-3 pb-1 text-center">
                <h2 class="h1 fw-bold">Registro completado</h2>
            </div>
            <!-- Paso 1 -->
            <div>
                <div class="form-outline mb-1">
                    <p>Ahora ya tienes una cuenta en la app de la <br> Línea 1 del Metro de Lima</p>
                </div>
                <div class="text-center">
                    <div class="pt-1 mb-4">
                        <input class="btn btn-login btn-lg btn-block" type="submit" value="Iniciar Sesión">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$scripts = array(); //Scripts por pagina
include('../partials/footer.php');
?>