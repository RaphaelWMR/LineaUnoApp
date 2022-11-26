<?php
$page_tittle = "App Linea Uno"; // Titulo
$plugins = array(); //Plugins por pagina
include('../partials/header.php');
?>

<!-- Escribir codigo aqui -->

<h2>App Línea 1 Metro de Lima</h2>
<a href="../rechargeCard/rechargeCard.php">Recargar tarjeta</a>
<a href="">Ver saldo</a>

<div class="card" style="width: 18rem;">
    <div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Tarjeta 1</div>
            <div class="card-body">
                <h5 class="card-title">Tarjeta adulto</h5>
                <p class="card-text">Saldo: S/ 10.95</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>


<?php
include('../partials/footer.php');
?>