<?php
include('assets/library/start.php');
include_once 'assets/content/products.inc.php';

?>

<div id="header-piano" class="jumbotron jumbotron-fluid header">
    <div class="container">
        <h1 class="display-3">Piano's</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed augue.</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center justify-content-md-between flex-wrap">
        <?php foreach ($products['piano'] as $key => $item) {
            // dump($item);
            echo " <div class=\"col-12 col-md-6 col-xl-4 my-3 d-flex justify-content-center\">
            <div class=\"card shadow\" style=\"width: 18rem;\">
                <img src=\"{$item[2][0]}\" class=\"card-img-top\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$item[1]['merk']}</h5>
                    <p class=\"card-text\">{$item[1]['tekst'][0]}</p>
                    <p class=\"card-text\">{$item[1]['extra']}</p>                   
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