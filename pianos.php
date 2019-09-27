<?php
include('assets/library/start.php');
include_once 'assets/content/stand-alone-producten/producten.inc.php';

// Load the array with pianos
$piano_array = [];
?>

<div id="header-piano" class="jumbotron jumbotron-fluid header">
    <div class="container">
        <h1 class="display-3">Piano's</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed augue.</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center justify-content-md-between flex-wrap">
        <?php foreach ($items as $key => $item) {
            echo " <div class=\"col-12 col-md-6 col-xl-4 my-3 d-flex justify-content-center\">
            <div class=\"card shadow\" style=\"width: 18rem;\">
                <img src=\"./assets/content/stand-alone-producten/images/pianos/Steinway-145-(1920)-1-1000x1000.jpg\" class=\"card-img-top\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$item['merk']}</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"product-info.php\" class=\"card-link\">Bekijk deze piano <span class=\"fas fa-arrow-right\"></span></a>
                </div>
            </div>
        </div> ";
        }
        ?>
    </div>
</div>
<?php
include('assets/library/end.php');
?>