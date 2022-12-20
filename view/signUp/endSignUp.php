<?php
$page_tittle = "App Linea Uno Iniciar Sesión"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
$lang = $_GET["lang"];
require_once($_SERVER['DOCUMENT_ROOT'] . '/LineaUnoApp/controller/controllerText.php');
$text = getEndSignUp($lang);
?>
<div class="login m-3">
    <div>
        <form action="../login.php" method="get">
            <div class="align-items-center mb-3 pb-1 text-center">
                <h2 class="h1 fw-bold"><?php echo $text['registrationCompleted']; ?></h2>
            </div>
            <div>
                <div class="form-outline mb-1">
                    <p><?php echo $text['paragraph']; ?></p>
                </div>
                <div class="text-center">
                    <div class="pt-1 mb-4">
                        <input type="hidden" name="lang" value="<?php echo $lang; ?>">
                        <input class="btn btn-login btn-lg btn-block" type="submit" value="<?php echo $text['login']; ?>">
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