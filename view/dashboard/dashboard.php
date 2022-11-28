<?php
$page_tittle = "App Linea Uno"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
?>

<!-- Escribir codigo aqui -->

<div class="row justify-content-center mt-2">
    <div class="card border-success bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-sucess border-light text-light">Tarjeta 1</div>
        <div class="card-body text-light">
            <h5 class="card-title">Tarjeta adulto</h5>
            <p id="card-1-money" class="card-text" style="display: none;">Saldo: S/15.50</p>
        </div>
        <div class="card-footer bg-transparent border-light">
            <div class="container">
                <div class="text-center row">
                    <button id="card-1-button" type="button" class="btn btn-light m-1" onclick="hideShowCardMoney('1')">Ver saldo</button>
                    <!-- Form recargar -->
                    <div id="rechargeForm-1" style="display: none;">
                        <form class="m-1" action="../rechargeCard/payForm.php">
                            <div class="form-outline p-1">
                                <input type="" id="form1Example1" class="form-control text-center" placeholder="Monto (S/)" onkeypress="mascara(this,cpf)" />
                            </div>
                            <input type="submit" class="btn btn-primary btn-block btn-block" value="Pagar">
                        </form>
                    </div>
                    <button id="buttonRecharge-1" type="button" class="btn btn-light m-1 " href="../rechargeCard/rechargeCard.php" onclick="hideShowForm('1')">Recargar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-success bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header bg-light border-success text-success">Tarjeta 2</div>
        <div class="card-body text-success">
            <h5 class="card-title">Tarjeta adulto</h5>
            <p id="card-2-money" class="card-text" style="display: none;">Saldo: S/15.50</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <div class="container">
                <div class="text-center row">
                    <button id="card-2-button" type="button" class="btn btn-success m-1" onclick="hideShowCardMoney('2')">Ver saldo</button>
                    <a type="button" class="btn btn-success m-1 " href="../rechargeCard/rechargeCard.php">Recargar</a>
                </div>
            </div>
        </div>
    </div>



</div>



<?php
$plugins = array(); //Plugins por pagina
include('../partials/footer.php');
?>