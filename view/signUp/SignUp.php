<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/LineaUnoApp/controller/controlerTextSignup.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/LineaUnoApp/controller/controllerText.php');
$page_tittle = "App Linea Uno Registrarme";
$plugins = array();
include('../partials/header.php');
$lang = $_GET["lang"];
$text = getSignUp($lang);
$codes = getPhoneCodes($lang);
?>
<div class="login m-3">
    <div>
        <form action="./endSignUp.php" method="get">
            <div class="align-items-center mb-3 pb-1 text-center">
                <h2 class="h1 fw-bold"><?php echo $text["signUp"] ?></h2>
            </div>
            <!-- Paso 1 -->
            <div>
                <h4 class=""><?php echo $text["step"] ?> 1: <?php echo $text["personalData"] ?></h4>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["idDoc"] ?></label>
                    <select name="" id="" class="form-select">
                        <option value="">DNI</option>
                        <option value="">Carné de extranjería</option>
                        <option value="">Pasaporte</option>
                    </select>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["idNumber"] ?></label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["firstSurname"] ?></label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["secondSurname"] ?></label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["names"] ?></label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["birth"] ?></label>
                    <input type="date" id="" class="form-control form-control-lg" placeholder="" />
                </div>
            </div>

            <!-- Paso 2 -->

            <div>
                <h4 class=""><?php echo $text["step"] ?> 2: <?php echo $text["contactInfo"] ?></h4>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["firstSurname"] ?></label>
                    <select name="" id="" class="form-select">
                        <?php
                        for ($i = 0; $i < count($codes); $i++) { ?>
                            <option value=""><?php echo $codes[$i]['code'] . "\t" . $codes[$i]['country'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="number" id="" class="form-control form-control-lg" placeholder="" />
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["email"] ?></label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
            </div>
            <!-- Paso 3 -->

            <div>
                <h4 class=""><?php echo $text["step"] ?> 3: <?php echo $text["password"] ?></h4>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text["typePassword"] ?></label>
                    <input type="text" id="" class="form-control form-control-lg" placeholder="" />
                </div>
            </div>
            <!-- Paso 4 -->
            <div>
                <h4 class=""><?php echo $text["step"] ?> 4: <?php echo $text["confirmRegistration"] ?></h4>
                <p><input type="checkbox" name="" id=""><?php echo $text["iveRead"] ?> <a href="./dataProtection.php" target="_blank"><?php echo $text["policy"] ?></a> </p>
            </div>
            <div class="text-center">
                <div class="pt-1 mb-4">
                    <input type="hidden" value="<?php echo $lang; ?>" name="lang">
                    <input class="btn btn-login btn-lg btn-block" type="submit" value="<?php echo $text["create"] ?>">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
$scripts = array(); //Scripts por pagina
include('../partials/footer.php');
?>