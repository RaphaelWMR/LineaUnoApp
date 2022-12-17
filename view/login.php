<?php
include("../controller/controllerText.php");
//include('/LineaUnoApp/controller/controllerText.php');
$lang = $_GET["lang"];
$text = getLogin($lang);
$page_tittle = $text['pageTittleLabel'];
$plugins = array();
include('./partials/header.php');
?>
<div class="p-4">
    <div class="text-center">
        <h1><?php echo $text['tittleLabel']; ?></h1>
    </div>
    <div class="login m-3">
        <div>
            <form action="./dashboard/dashboard.php" method="get">
                <input type="hidden" name="lang" value="<?php echo $lang; ?>">
                <div class="align-items-center mb-3 pb-1 text-center">
                    <h2 class="h1 fw-bold"><?php echo $text['loginLabel']; ?></h2>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for=""><?php echo $text['idLabel']; ?></label>
                    <input type="text" name="user" id="" class="form-control form-control-lg" placeholder="<?php echo $text['idInput']; ?>" />
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for=""><?php echo $text['passLabel']; ?></label>
                    <input type="password" name="pass" id="" class="form-control form-control-lg" placeholder="" />
                </div>

                <div class="text-center">
                    <div class="pt-1 mb-4">
                        <input class="btn btn-login btn-lg btn-block" type="submit" value="<?php echo $text['loginButton']; ?>">
                    </div>
                </div>

                <a class="small text-muted" href="#!"><?php echo $text['forgotPasswordLabel']; ?></a>
                <p class="mb-3 pb-lg-2" style="color: #393f81;"><?php echo $text['donthaveaccountyetLabel']; ?> <a href="./signUp/SignUp.php" style="color: #393f81;"><?php echo $text['singupLink']; ?></a></p>
                <a href="./signIn/useTerms.php" class="small text-muted" target="_blank"><?php echo $text['termsLabel']; ?></a>
                <a href="./signIn/privacy.php" class="small text-muted" target="_blank"><?php echo $text['policyLabel']; ?></a>
            </form>
        </div>
    </div>
</div>

<?php
$scripts = array(); //Scripts por pagina
include('./partials/footer.php');
?>