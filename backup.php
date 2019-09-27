<?php
include('assets/library/start.php');
include_once 'assets\content\stand-alone-producten\producten.inc.php';

// load the array with pianos

$piano_array = [];

//echo "<pre>";
//var_dump($items);
//echo "</pre>";


?>

<div id="header-piano" class="jumbotron jumbotron-fluid header">
    <div class="container">
        <h1 class="display-3">Piano's</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed augue.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-lg-between justify-content-center flex-wrap">



            <?php

            foreach($items as $key => $item) {


//                        echo "<pre>";
//                        var_dump($item);
//                         echo "</pre>";
                echo " <div class=\"col-12 col-lg-3 p-3 my-lg-0\">
                                    <h1>{$item['soort']}</h1>
                                    <ul>
                                     <li>Merk: {$item['merk']}</li>
                                     <li>Model: {$item['model']}</li>
                                     <li>Prijs: {$item['prijs']}</li>
                                    </ul>
                                    <a href=\"product-info.php\"> <img class=\"rounded col-auto col-lg-auto \"
                                                     src=\"https://via.placeholder.com/300\" alt=\"placeholder link\"></a>
                               </div>";

            }

            ?>
            <!---->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto "-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
            <!--                <div class="col-12 col-lg-3 p-3 my-lg-0">-->
            <!--                    <a href="product-info.php"> <img class="rounded col-auto col-lg-auto"-->
            <!--                                                     src="https://via.placeholder.com/300" alt="placeholder link"></a>-->
            <!--                </div>-->
        </div>
        <?php
        include('assets/library/end.php');
        ?>
