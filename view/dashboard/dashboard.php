<?php
$page_tittle = "App Linea Uno"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
?>

<!-- Escribir codigo aqui -->

<div class="row justify-content-center mt-2">
    <div class="card border-success bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-success border-light text-light">
            <div class="d-flex justify-content-between">
                <div>
                    <p>Tarjeta 1</p>
                </div>
                <div>
                    <p>4658-7531-7594</p>
                </div>
            </div>
        </div>
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
                        <form class="m-1" action="../rechargeCard/payForm.php" method="get">
                            <div class="form-outline p-1">
                                <input type="" id="form1Example1" class="form-control text-center" placeholder="Monto (S/)" onkeypress="mascara(this,cpf)" name="money" />
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
        <div class="card-header bg-light border-success text-success">
            <div class="d-flex justify-content-between">
                <div>
                    <p>Tarjeta 2</p>
                </div>
                <div>
                    <p>9874-4567-2584</p>
                </div>
            </div>
        </div>
        <div class="card-body text-success">
            <h5 class="card-title">Tarjeta medio</h5>
            <p id="card-2-money" class="card-text" style="display: none;">Saldo: S/15.50</p>

        </div>
        <div class="card-footer bg-transparent border-success">
            <div class="container">
                <div class="text-center row">
                    <button id="card-2-button" type="button" class="btn btn-success m-1" onclick="hideShowCardMoney('2')">Ver saldo</button>
                    <!-- Form recargar -->
                    <div id="rechargeForm-2" style="display: none;">
                        <form class="m-1" action="../rechargeCard/payForm.php" method="get">
                            <div class="form-outline p-1">
                                <input type="" id="form1Example1" class="form-control text-center" placeholder="Monto (S/)" onkeypress="mascara(this,cpf);" name="money" />
                            </div>
                            <input type="submit" class="btn btn-primary btn-block btn-block" value="Pagar">
                        </form>
                    </div>
                    <button id="buttonRecharge-2" type="button" class="btn btn-success m-1 " href="../rechargeCard/rechargeCard.php" onclick="hideShowForm('2')">Recargar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-primary  bg-primary   mb-3" style="max-width: 18rem;">
        <form class="" action="../rechargeCard/payForm.php" method="get">
            <div class="card-header bg-primary  border-light text-light">
                <div class="d-flex justify-content-between">
                    <div>
                        <p>Recargar otra tarjeta</p>
                    </div>
                </div>
            </div>
            <div class="card-body text-light">
                <h5 class="card-title">Tarjeta Destinatario</h5>

                <div class="form-outline p-1 ">
                    <div class="col">
                        <div class="mb-3">
                            <label for="otherCardCode" class="form-label">Código de tarjeta</label>
                            <input type="number" class="form-control" id="otherCardCode" placeholder="123456789101">
                        </div>
                        <div class="mb-3">
                            <a id="searchButton" class="btn btn-light" onclick="hideShowOther();">Buscar</a>
                        </div>
                        <div class="mb-3">
                            <label for="otherCardCode" class="form-label">Destinatario</label>
                            <input type="number" class="form-control" id="otherCardType" placeholder="Tarjeta adulto" style="display: none;" disabled>
                            <input type="text" class="form-control" id="otherCardOwner" placeholder="Juan Jose Perez Quispe" style="display: none;" disabled>
                        </div>
                    </div>
                    <input type="" id="form1Example1" class="form-control" placeholder="Monto (S/)" onkeypress="mascara(this,cpf);" name="money" />
                </div>

            </div>
            <div class="card-footer bg-transparent border-light">
                <div class="container">
                    <div class="text-center row">
                        <input type="submit" id="buttonRecharge-other" class="btn btn-light m-1" value="Pagar">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <a href="../login.php" class="btn btn-danger">Cerrar Sesión</a>
</div>

<?php
$scripts = array(); //Scripts por pagina
include('../partials/footer.php');
?>