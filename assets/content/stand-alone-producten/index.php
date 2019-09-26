<?php
// echo $_SERVER['PHP_SELF']." - ".strpos($_SERVER['PHP_SELF'], "/index.php");exit;
if (strpos($_SERVER['PHP_SELF'], "/index.php") !== false){
	echo "<h3>Maak een keuze:</h3><p><a href=\"vleugels.php\">Vleugels</a> | <a href=\"pianos.php\">Piano's</a></p>\n";
	exit;
}


function dump($txt){
	echo "<pre>";
	print_r($txt);
	// var_dump($txt);
	echo "</pre>";
}
function selectImg($map, $afb){
	$fotos = array();
	if (is_dir($map)) {
		if ($dir = opendir($map)) {
			while (($foto = readdir($dir)) !== false) {
				if ($foto != "." && $foto !=".."){
					if (strpos($foto, $afb) !== false){
						$fotos[] = $map.$foto;
					}
				}
			}
		}
	}
	return $fotos;
}
function makePrice($num){
	if ($num == ""){
		$num = "-";
	}else{
		$num = "&euro;&nbsp;".number_format(floatval($num), 0, ',', '.').",-";
	}
	return $num;
}

$page = "
<!DOCTYPE html>
<html lang=\"nl-NL\">

<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

	<title>Sloot Pianoservice / Doetinchem</title>
";

if (isset($soort) && isset($_GET['nr'])){
	$page .= "	<link rel=\"stylesheet\" type=\"text/css\" href=\"css/lightbox.css\">\n";
}

$page .= "
	<style>
		body{font-family: verdana; line-height: 140%; font-size: 18px;background-color:grey;}
		.product, .product *,.item, h4{box-sizing: border-box; border: 0px solid black;}
		a{color: darkblue;}a:hover{color: darkred;}
		div.product{width: 50%;float: left;padding: 20px; font-size: 0.8em;margin-bottom: 20px;}
		div.product > div {box-shadow: 3px 3px 3px black;border: 1px solid black;padding: 20px;border-radius: 10px;background-color: lightgray;}
		div.product img{width: 25%;float: left;box-shadow: 2px 2px 2px black;border-radius: 4px;}
		div.product > div > div{float: left;width: 75%;padding-left: 20px;}
		div.product > div:after{display:block;content:\"\";clear:both;}
		h4{margin:0;width: 50%;float: left;font-size: 1.5em}
		div.product > div > div > div{width: 50%;float: left;}
		div.product span{display: inline-block; width: 100px; }
		.item, .fotos{
			box-sizing: border-box;
			padding: 10px;
			width: 1200px;
			margin: auto;
			background-color: lightgrey;
		}
		.specs span{
			display: inline-block;
			width: 140px;
			font-weight: bold;
		}
		.blader{
			text-align: center;
		}
		.blader a{
			text-decoration: none;
		}
	</style>
</head>
<body>
";


if (false){// test uitlsuitend lightbox
	$page = "<!DOCTYPE html>\n<html>\n<head>";///reset
		$page .= "	<link rel=\"stylesheet\" type=\"text/css\" href=\"css/lightbox.css\">\n";
			$page .= "</head>\n<body>\n";

}

include("producten.inc.php");

$products = array(
	"piano"		=> array(),
	"vleugel"	=> array(),
);
foreach ($items as $key => $value){
	$naam = $value['merk']." / ".$value['model']." (".$value['bouwjaar'].")";
	$afb = $value['merk']."-".$value['model']."-(".$value['bouwjaar'].")";
	$correctie = array(
		", " => "-",
		". " => "-",
		" " => "-",
		"." => "-",
		"/" => "",
		"ö" => "oe",
		"()" => "(----)",
	);
	foreach ($correctie as $k => $v){
		$afb = str_replace($k, $v, $afb);
	}
	// geen spatie, geen komma's, geen punt, ö wordt oe, geen () [jaartal niet ingevuld] wordt (----),
	$map = "images/".$value['soort']."s/";
	$deze = selectImg($map, $afb);
	$products[$value['soort']][] = array($naam, $value, $deze, $afb);

}
$show = "all";
foreach ($products as $k1 => $v2){
	// product met deze id bestaat:
	if (isset($_GET['nr']) && isset($soort) && $k1 == $soort && isset($products[$k1][$_GET['nr']])){;
		$id = $_GET['nr'];
		$show = $products[$k1][$_GET['nr']];
	}	
}

$htop = "h2";
if ($show == "all"){
	if (!isset($soort)){
		$page .= "<".$htop.">Tweedehands piano's en vleugels</".$htop.">\n";
		$htop = "h3";
	}
	foreach ($products as $k1 => $v1){
		if ($k1 == "piano"){
			$deze = $k1."'s";
		}else{
			$deze = $k1."s";
		}
		if (!isset($soort) || $soort == $k1){
			$page .= "<".$htop.">Overzicht tweedehands ".$deze."</".$htop.">\n";
			foreach ($v1 as $k2 => $v2){
				$deLink = "?".$k1."=".$v2[3]."&nr=".$k2;
				$page .= "<div class=\"product\">\n";
				$page .= "	<div>\n";
				$page .= "		<img src=\"".$v2[2][0]."\" alt=\"Sloot Pianoservice - ".$v2[0]."\">\n";
				$page .= "		<div>\n";
				$page .= "			<h4>".$v2[1]['merk']."</h4>\n";
				$page .= "			<div><a href=\"".$deLink."\">Bekijk deze ".$v2[1]['soort']."&raquo;</a></div>\n";
				$page .= "			<span>Soort: </span>".$v2[1]['soort']."<br>\n";
				$page .= "			<span>Model: </span>".$v2[1]['model']."<br>\n";
				$page .= "			<span>Onze prijs: </span>".makePrice($v2[1]['prijs'])."<br>\n";
				if (strlen($v2[1]['extra']) > 5){
					$page .= "		".$v2[1]['extra']."<br>\n";

				}
				$page .= "		</div>\n";
				$page .= "	</div>\n";

				$page .= "</div>\n\n";
			}			
		}
	}
}else{

	$blader = "<div class=\"blader\">\n";
	if ($id == 0){
		$terug = "	&lsaquo; vorige\n";
	}else{
		$terug = "	<a href=\"".$_SERVER['PHP_SELF']."?".$soort."=".$products[$soort][$id-1][3]."&nr=".($id-1)."\">&lsaquo; vorige</a>\n";
	}
	if ($id == (count($products[$soort])-1)){
		$verder = "	volgende &rsaquo;\n";
	}else{
		$verder = "	<a href=\"".$_SERVER['PHP_SELF']."?".$soort."=".$products[$soort][$id+1][3]."&nr=".($id+1)."\">volgende &rsaquo;</a>\n";
	}
	$blader .= "	<a href=\"".$_SERVER['PHP_SELF']."?".$soort."=".$products[$soort][0][3]."&nr="."0"."\">&laquo;</a>\n".$terug." | ".$verder."	<a href=\"".$_SERVER['PHP_SELF']."?".$soort."=".$products[$soort][(count($products[$soort])-1)][3]."&nr=".(count($products[$soort])-1)."\">&raquo;</a><br><br>\n";
	if ($soort == "piano"){
		$deze = $soort."'s";
	}else{
		$deze = $soort."s";
	}
	$blader .= "	<a href=\"".$_SERVER['PHP_SELF']."\">Toon alle ".$deze."</a>\n";
	$blader .= "</div><!-- /blader -->\n";

	// $page .= "<h1>".$soort.": ".$products[$soort][$_GET[$soort]][3]."</h1>";
/*  TMP UIT	*/
	$page .= $blader;
	$page .= "<div class=\"item\">\n";
	$page .= "	<h1>".$show[1]['merk']."</h1>\n";
	$page .= "	<p class=\"specs\">\n";
	$page .= "		<span>Model:</span>".$show[1]['model']."<br>\n";
	$page .= "		<span>Bouwjaar:</span>".$show[1]['bouwjaar']."<br>\n";
	$page .= "		<span>Uitvoering:</span>".$show[1]['kleur']."<br>\n";
	$page .= "		<span>Onze prijs:</span>&euro;&nbsp;".$show[1]['prijs'].",-<br>\n";
	if (isset($show[1]['garantie']) && $show[1]['garantie'] != ""){
		$page .= "		<span>Garantie:</span>".$show[1]['garantie']." jaar<br>\n";
	}
	$page .= "	</p>\n";
	if (isset($show[1]['tekst']) && is_array($show[1]['tekst'])){
		$page .= "	<p>\n";
		foreach ($show[1]['tekst'] as $v1){
			$page .= "		".$v1."<br>\n";
		}
		$page .= "	</p>\n";	
	}
	if (isset($show[1]['extra']) && $show[1]['extra'] != ""){
		$page .= "	<p><strong>".$show[1]['extra']."</strong></p>\n";
	}
	$page .= "</div><!-- /item -->\n";
/* */	
	// $page .= "\n<div class=\"fotos\">\n";
	$basisfotos = "	<!-- Images used to open the lightbox -->\n";
	$basisfotos .= "	<div class=\"fotos\">\n";
	$vervolgfotos = "\n		<!-- The Modal/Lightbox -->\n";
	$vervolgfotos .= "		<div id=\"myModal\" class=\"modal\">\n";
	$vervolgfotos .= "			<span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>\n";
	$vervolgfotos .= "			<div class=\"modal-content\">\n";
	$bigfotos = "";
	$teller = 1;

	foreach ($show[2] as $foto){
		$basisfotos .= "			<img src=\"".$foto."\" onclick=\"openModal();currentSlide(".$teller.")\" class=\"hover-shadow\" alt=\"Sloot Pianoservice: ". $show[0]." afb ".$teller."\">\n";
		$bigfotos .= "				<div class=\"mySlides\">\n";
		$bigfotos .= "					<img src=\"".$foto."\" alt=\"Sloot Pianoservice - ".$show[0]." afb ".$teller."\">\n";
		$bigfotos .= "					<div class=\"numbertext\">afb. ".$teller." van ".count($show[2])." - ".$products[$soort][$id][0]."</div>\n";
		$bigfotos .= "				</div>\n";
		$teller++;
	}
	$vervolgfotos .= $bigfotos;

	$vervolgfotos .= "\n				<!-- Next/previous controls -->\n";
	$vervolgfotos .= "				<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>\n";
	$vervolgfotos .= "				<a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>\n\n";

	$vervolgfotos .= "			</div><!-- /modal-content -->\n";
	$vervolgfotos .= "		</div><!-- /myModal -->\n";
	$page .=  $basisfotos.$vervolgfotos;
	$page .= "	</div><!-- /fotos -->\n";
	$page .= "	<!-- End Modal/Lightbox -->\n\n";
	$page .= $blader;

	$page .= "<script type=\"text/javascript\" language=\"javascript\" src=\"js/lightbox.js\"></script>\n";
}

$page .= "\n</body>\n</html>\n";
// dump($products);
echo $page;
?>
