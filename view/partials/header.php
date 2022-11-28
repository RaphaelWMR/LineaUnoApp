<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/LineaUnoApp/view/css/styles.css">
    <link rel="stylesheet" href="/LineaUnoApp/view/css/formStyles.css">
    <?php
    foreach ($plugins as $i => $value) {
        echo $value;
    }
    ?>
</head>

<body>
    <nav class="cabecera m-0 p-0 navbar sticky-top">
        <div class="p-4">
            <div class="text-center">
                <img src="/LineaUnoApp/view/img/logo.svg" width="" height="80rem" alt="">
            </div>
        </div>
    </nav>