<?php
include ("../../controller/controlerSignup.php");
$page_tittle = "App Linea Uno Registrarme";
$plugins = array();
include('../partials/header.php');
?>
<div class="login m-3">
    <div>
        <form action="./endSignUp.php">
            <div class="align-items-center mb-3 pb-1 text-center">
                <h2 class="h1 fw-bold">Registrarme</h2>
            </div>
            <!-- Paso 1 -->
            <div>
                <h4 class="">Paso 1: Rellena tus datos personales</h4>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Tipo de documento de indentidad</label>
                    <select name="" id="" class="form-select">
                        <option value="">DNI</option>
                        <option value="">Carné de extranjería</option>
                        <option value="">Pasaporte</option>
                    </select>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Número de documento de indentidad</label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Primer apellido</label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Segundo apellido</label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Nombres</label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Fecha de nacimiento</label>
                    <input type="date" id="" class="form-control form-control-lg" placeholder="" />
                </div>
            </div>

            <!-- Paso 2 -->

            <div>
                <h4 class="">Paso 2: Rellena tus datos de contacto</h4>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Número de celular</label>
                    <select name="" id="" class="form-select">
                        <?php
                            $countryCodes = getPhoneCodes();
                            foreach ($countryCodes as $name => $code){?>
                            <option value=""><?php echo $code."\t".$name?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <input type="tel" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="">Correo electrónico</label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
            </div>
            <!-- Paso 3 -->
            <div>
                <h4 class="">Paso 3: Confirma tu registro</h4>
                <p><input type="checkbox" name="" id=""> He leido y acepto la <a href="./dataProtection.php" target="_blank">Política de protección de datos</a> </p>
            </div>
            <div class="text-center">
                <div class="pt-1 mb-4">
                    <input class="btn btn-login btn-lg btn-block" type="submit" value="Crear cuenta">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include('../partials/footer.php');
?>