<?php
$page_tittle = "Languaje/Idioma/Língua";
$plugins = array();
include('./partials/header.php');
?>
<div class="p-1">
    <div class="text-center">
        <h1>App Linea 1<br> del Metro de Lima</h1>
    </div>
    <div class="login ">
        <div class="align-items-center mb-3 pb-1 text-center">
            <h2 class="h3 fw-bold">Languaje/Idioma/Língua</h2>
        </div>
        <div class="text-center">
            <div class="pt-1 mb-4">
                <a href="./login.php?lang=en" class="btn btn-primary btn-lg btn-block">
                    English
                </a>
            </div>
        </div>
        <div class="text-center">
            <div class="pt-1 mb-4">
                <a href="./login.php?lang=es" class="btn btn-danger btn-lg btn-block">
                    Español
                </a>
            </div>
        </div>
        <div class="text-center">
            <div class="pt-1 mb-4">
                <a href="./login.php?lang=pt" class="btn btn-success btn-lg btn-block">
                    Português
                </a>
            </div>
        </div>

    </div>
</div>

<?php
$scripts = array(); //Scripts por pagina
include('./partials/footer.php');
?>