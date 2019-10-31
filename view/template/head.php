<?php
$analytics = false;
$extra = "";
if ($_SERVER['HTTP_HOST'] == "localhost") {
    $extra = "/sloot-service/"; ///projecten/groepwebdesign.nl/root/";
} elseif ($_SERVER['HTTP_HOST'] == "www.slootpianoservice.nl") {
    $extra = "/";
    $analytics = true;
}
$absRoot = $_SERVER['DOCUMENT_ROOT'] . $extra;
$root = "http://" . $_SERVER['HTTP_HOST'] . $extra;
$assets = $root . "assets/";
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Sloot Piano Service</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css" class="css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/1c14924fd9.js" crossorigin="anonymous"></script>
    <script src="./assets/js/navbar-scroll.js"></script>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="home"><img class="navbar-item" alt="logo" src="./assets/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <?php
                foreach (explode('-', MAIN_NAVI) as $url) {
                    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . strtolower(str_replace("'", "", str_replace(" ", "-", $url))) . "\">{$url}</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>