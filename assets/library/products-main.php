<?php

if (!isset($_GET['nr']) || !isset($products['piano'][$_GET['nr']])) {
    // overview of product category 

?>
<div class="container">
    <div class="row justify-content-center justify-content-md-between flex-wrap">
        <?php foreach ($products[$soort] as $key => $item) {
        //dump($item);   
            echo "        <div class=\"col-12 col-md-6 col-xl-4 my-3 d-flex justify-content-center\">
            <div class=\"card shadow\" style=\"width: 18rem; \">
                <img src=\"{$item[2][0]}\" class=\"card-img-top\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$item[1]['merk']}</h5>
                    <p class=\"card-text\">{$item[1]['tekst'][0]}</p>
                    <p class=\"card-text\">{$item[1]['extra']}</p>                   
                    <a href=\"{$_SERVER['PHP_SELF']}?piano={$item[3]}&nr={$key}\" class=\"card-link\">Bekijk deze {$soort} <span class=\"fas fa-arrow-right\"></span></a>
                </div>
            </div>
        </div>
";
        }
        ?>
    </div>
</div>
<?php

}else{

    $id = $_GET['nr'];
    $show = $products[$soort][$id];
    $page = "";

    $tmp_css = " style=\"width: 120px;\"";

    $blader = "<div class=\"blader\" style=\"border: 1px dotted black;margin-top: 10px;text-align: center;\">\n";
    if ($id == 0) {
        $terug = "  &lsaquo; vorige\n";
    } else {
        $terug = "  <a href=\"" . $_SERVER['PHP_SELF'] . "?" . $soort . "=" . $products[$soort][$id - 1][3] . "&nr=" . ($id - 1) . "\">&lsaquo; vorige</a>\n";
    }
    if ($id == (count($products[$soort]) - 1)) {
        $verder = " volgende &rsaquo;\n";
    } else {
        $verder = " <a href=\"" . $_SERVER['PHP_SELF'] . "?" . $soort . "=" . $products[$soort][$id + 1][3] . "&nr=" . ($id + 1) . "\">volgende &rsaquo;</a>\n";
    }
    $blader .= "    <a href=\"" . $_SERVER['PHP_SELF'] . "?" . $soort . "=" . $products[$soort][0][3] . "&nr=" . "0" . "\">&laquo;</a>\n" . $terug . " | " . $verder . "    <a href=\"" . $_SERVER['PHP_SELF'] . "?" . $soort . "=" . $products[$soort][(count($products[$soort]) - 1)][3] . "&nr=" . (count($products[$soort]) - 1) . "\">&raquo;</a><br><br>\n";
    if ($soort == "piano") {
        $deze = $soort . "'s";
    } else {
        $deze = $soort . "s";
    }
    $blader .= "    <a href=\"" . $_SERVER['PHP_SELF'] . "\">Toon alle " . $deze . "</a>\n";
    $blader .= "</div><!-- /blader -->\n";

    $page .= $blader;
    $page .= "  <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/lightbox.css\">\n";

    $page .= "<div class=\"item\">\n";
    $page .= "  <h1>" . $show[1]['merk'] . "</h1>\n";
    $page .= "  <p class=\"specs\">\n";
    $page .= "      <span>Model:</span> " . $show[1]['model'] . "<br>\n";
    $page .= "      <span>Bouwjaar:</span> " . $show[1]['bouwjaar'] . "<br>\n";
    $page .= "      <span>Uitvoering:</span> " . $show[1]['kleur'] . "<br>\n";
    $page .= "      <span>Onze prijs:</span> " . makePrice($show[1]['prijs']) . "<br>\n";
    if (isset($show[1]['garantie']) && $show[1]['garantie'] != "") {
        $page .= "      <span>Garantie:</span>" . $show[1]['garantie'] . " jaar<br>\n";
    }
    $page .= "  </p>\n";
    if (isset($show[1]['tekst']) && is_array($show[1]['tekst'])) {
        $page .= "  <p>\n";
        foreach ($show[1]['tekst'] as $v1) {
            $page .= "      " . $v1 . "<br>\n";
        }
        $page .= "  </p>\n";
    }
    if (isset($show[1]['extra']) && $show[1]['extra'] != "") {
        $page .= "  <p><strong>" . $show[1]['extra'] . "</strong></p>\n";
    }
    $page .= "</div><!-- /item -->\n";
    /* */
    // $page .= "\n<div class=\"fotos\">\n";
    $basisfotos = " <!-- Images used to open the lightbox -->\n";
    $basisfotos .= "    <div class=\"fotos\">\n";
    $vervolgfotos = "\n     <!-- The Modal/Lightbox -->\n";
    $vervolgfotos .= "      <div id=\"myModal\" class=\"modal\">\n";
    $vervolgfotos .= "          <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>\n";
    $vervolgfotos .= "          <div class=\"modal-content\">\n";
    $bigfotos = "";
    $teller = 1;

    foreach ($show[2] as $foto) {
        $basisfotos .= "            <img src=\"" . $foto . "\" onclick=\"openModal();currentSlide(" . $teller . ")\" class=\"hover-shadow\" alt=\"Sloot Pianoservice: " . $show[0] . " afb " . $teller . "\"{$tmp_css}>\n";
        $bigfotos .= "              <div class=\"mySlides\">\n";
        $bigfotos .= "                  <img src=\"" . $foto . "\" alt=\"Sloot Pianoservice - " . $show[0] . " afb " . $teller . "\">\n";
        $bigfotos .= "                  <div class=\"numbertext\">afb. " . $teller . " van " . count($show[2]) . " - " . $products[$soort][$id][0] . "</div>\n";
        $bigfotos .= "              </div>\n";
        $teller++;
    }
    $vervolgfotos .= $bigfotos;

    $vervolgfotos .= "\n                <!-- Next/previous controls -->\n";
    $vervolgfotos .= "              <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>\n";
    $vervolgfotos .= "              <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>\n\n";

    $vervolgfotos .= "          </div><!-- /modal-content -->\n";
    $vervolgfotos .= "      </div><!-- /myModal -->\n";
    $page .= $basisfotos . $vervolgfotos;
    $page .= "  </div><!-- /fotos -->\n";
    $page .= "  <!-- End Modal/Lightbox -->\n\n";
    $page .= $blader;

    $page .= "<script type=\"text/javascript\" language=\"javascript\" src=\"assets/js/lightbox.js\"></script>\n";
    echo $page;

}
?>