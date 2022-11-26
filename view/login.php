<?php
$page_tittle = "App Linea Uno Iniciar Sesión";
$plugins = array();
include('./partials/header.php');
?>
<div class="p-4">
    <div class="text-center">
        <h1>App Linea 1 <br> del Metro de Lima</h1>
    </div>
    <div class="login m-3">
        <div>
            <form action="./dashboard/dashboard.php">
                <div class="align-items-center mb-3 pb-1 text-center">
                    <h2 class="h1 fw-bold">Iniciar Sesión</h2>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Número de documento de indentidad</label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="DNI, CE o Pasaporte" />
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="">Contraseña</label>
                    <input type="password" id="" class="form-control form-control-lg" placeholder="" />

                </div>

                <div class="text-center">
                    <div class="pt-1 mb-4">
                        <input class="btn btn-login btn-lg btn-block" type="submit" value="Iniciar sesión">
                    </div>
                </div>

                <a class="small text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                <p class="mb-3 pb-lg-2" style="color: #393f81;">¿Aún no tienes uan cuenta? <a href="./signUp/SignUp.php" style="color: #393f81;">Regístrate</a></p>
                <a href="#!" class="small text-muted">Terminos de uso.</a>
                <a href="#!" class="small text-muted">Política de privacidad</a>
            </form>
        </div>
    </div>
</div>

<?php
include('./partials/footer.php');
?>