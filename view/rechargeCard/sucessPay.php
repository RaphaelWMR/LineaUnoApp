<?php
$page_tittle = "App Linea Uno"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/LineaUnoApp/controller/controllerText.php');
$money = $_GET["money"];
$lang = $_GET["lang"];
$text = getSuccess($lang);
$identity = $_GET["user"];
$pass = $_GET["pass"];
?>


<!-- Escribir codigo aqui -->

<div class="row justify-content-center mt-2 ">
    <div class="card border-success bg-light mb-3" style="width: 90%;">
        <div class="card-body text-success">
            <div class="text-center">
                <img src="../img/check.gif" alt="" style="width: 50%;">
            </div>
            <div class="payment-title text-center mb-3">
                <h1><?php echo $text['successfulPayment']; ?></h1>
                <a href="../dashboard/dashboard.php?lang=<?php echo $lang ?>&user=<?php echo $identity; ?>&pass=<?php echo $pass; ?>" class="btn btn-success"><?php echo $text['backToHome']; ?></a>
            </div>

            <p><?php echo $text['totalPaid']; ?>: S/ <?php echo $money; ?></p>
            <p><?php echo $text['transactionDate']; ?>: <?php echo date("d/m/Y"); ?></p>
            <p><?php echo $text['transactionTime']; ?>: <?php echo date("h:i:sa"); ?></p>
            <p><?php echo $text['receptorCard']; ?>: 1234-5678-9101</p>
            <p><?php echo $text['receptor']; ?>: Juan Jose Perez Quispe</p>
            <p><?php echo $text['rechargeCode']; ?>: ABCDE-FGHI-1234</p>
        </div>
    </div>

    <?php
    $scripts = array(); //scripts por pagina
    include('../partials/footer.php');
    ?>