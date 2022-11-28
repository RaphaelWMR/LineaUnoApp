<?php
$page_tittle = "App Linea Uno"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
$money = $_GET["money"];
?>


<!-- Escribir codigo aqui -->

<div class="row justify-content-center mt-2 ">
    <div class="card border-success bg-light mb-3" style="width: 90%;">
        <div class="card-body text-success">
            <div class="text-center">
                <img src="../img/check.gif" alt="" style="width: 50%;">
            </div>
            <div class="payment-title text-center mb-3">
                <h1>Pago exitoso</h1>
                <a href="../dashboard/dashboard.php" class="btn btn-success">Volver al inicio</a>
            </div>
            
            <p>Total pagado: S/ <?php echo $money; ?></p>
            <p>Fecha de la Transacción: <?php echo date("d/m/Y"); ?></p>
            <p>Hora de la Transacción: <?php echo date("h:i:sa"); ?></p>
            <p>Tarjeta de destino: 1234-5678-9101</p>
            <p>Destinatario: Juan Jose Perez Quispe</p>
            <p>Código de la Recarga: ABCDE-FGHI-1234</p>
        </div>
    </div>

    <?php
    $scripts = array(); //scripts por pagina
    array_push($scripts, '<script src="../js/pay.js"></script>');
    array_push($scripts, '<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>');
    include('../partials/footer.php');
    ?>