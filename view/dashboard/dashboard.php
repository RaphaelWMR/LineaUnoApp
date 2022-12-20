<?php
$page_tittle = "App Linea Uno"; // Titulo
$plugins = array(); //Plugins por pagina
require_once($_SERVER['DOCUMENT_ROOT'] . '/LineaUnoApp/controller/controlerUsers.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/LineaUnoApp/controller/controllerText.php');
$identity = $_GET["user"];
$pass = $_GET["pass"];
$userid = searchUser($identity, $pass);
$user = null;
if ($userid >= 0) {
    $user = userData($userid);
}
include('../partials/header.php');
$lang = $_GET["lang"];
$text = getDash($lang);
$colorBg = 'success';
$colorTxt = 'light';
?>


<!-- Escribir codigo aqui -->

<div class="row justify-content-center mt-2">
    <!-- Cards iterables -->
    <?php
    for ($i = 0; $i < count($user['cards']); $i++) {
        if ($user['cards'][$i]->type == 1) {
            $colorBg = 'success';
            $colorTxt = 'light';
        } else {
            $colorBg = 'light';
            $colorTxt = 'success';
        }
    ?>
        <!-- Cards print -->

        <div class="card border-<?php echo $colorTxt; ?> bg-<?php echo $colorBg; ?> mb-3" style="max-width: 18rem;">
            <div class="card-header bg-<?php echo $colorBg; ?> border-<?php echo $colorTxt; ?> text-<?php echo $colorTxt; ?>">
                <div class="d-flex justify-content-between">
                    <div>
                        <p><?php echo $text['cardLabel']; ?> <?php echo $user['cards'][$i]->id + 1 ?></p>
                    </div>
                    <div>
                        <p><?php echo showCardCode($user['cards'][$i]->code); ?></p>
                    </div>
                </div>
            </div>
            <div class="card-body text-<?php echo $colorTxt; ?>">
                <h5 class="card-title"><?php echo $text[showCardType($user['cards'][$i]->type)]; ?></h5>
                <p id="card-<?php echo $i; ?>-money" class="card-text" style="display: none;"><?php echo $text['balanceLabel']; ?>: S/<?php echo $user['cards'][$i]->cash ?></p>
            </div>
            <div class="card-footer bg-transparent border-<?php echo $colorTxt; ?>">
                <div class="container">
                    <div class="text-center row">
                        <button id="card-<?php echo $i; ?>-button" type="button" class="btn btn-<?php echo $colorTxt; ?> m-1" onclick="hideShowCardMoney('<?php echo $i; ?>','<?php echo $text['hideBalanceLabel']; ?>','<?php echo $text['checkBalanceLabel']; ?>')"><?php echo $text['checkBalanceLabel']; ?></button>
                        <!-- Form recargar -->
                        <div id="rechargeForm-<?php echo $i; ?>" style="display: none;">
                            <form class="m-1" action="../rechargeCard/payForm.php" method="get">
                                <div class="form-outline p-1">
                                    <input type="hidden" name="card" value="<?php echo $user['cards'][$i]->code; ?>">
                                    <input type="hidden" name="lang" value="<?php echo $lang ?>">
                                    <input type="hidden" name="user" value="<?php echo $identity ?>">
                                    <input type="hidden" name="pass" value="<?php echo $pass ?>">
                                    <input type="" id="form1Example1" class="form-control text-center" placeholder="<?php echo $text['amountLabel']; ?> (S/)" onkeypress="mascara(this,cpf)" name="money" />
                                </div>
                                <input type="submit" class="btn btn-primary btn-block btn-block" value="<?php echo $text['payLabel']; ?>">
                            </form>
                        </div>
                        <button id="buttonRecharge-<?php echo $i; ?>" type="button" class="btn btn-<?php echo $colorTxt; ?> m-1 " href="../rechargeCard/rechargeCard.php" onclick="hideShowForm('<?php echo $i; ?>','<?php echo $text['cancelLabel']; ?>','<?php echo $text['rechargeCardLabel']; ?>')"><?php echo $text['rechargeCardLabel']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="card border-primary  bg-primary   mb-3" style="max-width: 18rem;">
        <form class="" action="../rechargeCard/payForm.php" method="get">
            <div class="card-header bg-primary  border-light text-light">
                <div class="d-flex justify-content-between">
                    <div>
                        <p><?php echo $text['reloadOtherCardLabel']; ?></p>
                    </div>
                </div>
            </div>
            <div class="card-body text-light">
                <h5 class="card-title"><?php echo $text['receptorCardLabel']; ?></h5>

                <div class="form-outline p-1 ">
                    <div class="col">
                        <div class="mb-3">
                            <label for="otherCardCode" class="form-label"><?php echo $text['cardCodeLabel']; ?></label>
                            <input type="text" class="form-control" id="cardnumber" pattern="[0-9]*" placeholder="" inputmode="numeric">
                        </div>
                        <div class="mb-3">
                            <a id="searchButton" class="btn btn-light" onclick="hideShowOther();"><?php echo $text['searchLabel']; ?></a>
                        </div>
                        <div class="mb-3">
                            <label for="otherCardCode" class="form-label"><?php echo $text['receptorLabel']; ?></label>
                            <input type="number" class="form-control" id="otherCardType" placeholder="Tarjeta adulto" style="display: none;" disabled>
                            <input type="text" class="form-control" id="otherCardOwner" placeholder="Juan Jose Perez Quispe" style="display: none;" disabled>
                        </div>
                    </div>
                    <input type="" id="form1Example1" class="form-control" placeholder="<?php echo $text['amountLabel']; ?> (S/)" onkeypress="mascara(this,cpf);" name="money" />
                </div>

            </div>
            <div class="card-footer bg-transparent border-light">
                <div class="container">
                    <div class="text-center row">
                        <input type="submit" id="buttonRecharge-other" class="btn btn-light m-1" value="<?php echo $text['payLabel']; ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <a href="../login.php" class="btn btn-danger"><?php echo $text['logoutLabel']; ?></a>
</div>

<?php
$scripts = array(); //Scripts por pagina
array_push($scripts, '<script src="../js/pay.js"></script>');
array_push($scripts, '<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>');
include('../partials/footer.php');
?>