<?php
/*
PART 1: text parts of the products into array 'items'
 - images require a standard naming 
PART 2: adding the images per product to the new array 'products', parts products[pianos] en products[vleugels]
*/

//   PART 1 -----

$items = array(
/*	array(
		"soort"		=> "",
		"merk"		=> "",
		"model"		=> "",		
		"bouwjaar"	=> "",
		"prijs"		=> "",
		"kleur"		=> "",
		"garantie"	=> "",
		"tekst" 	=> array(
			"",
		),
		"extra"		=> "",
	),
*/	
	array(
		"soort"		=> "piano",
		"merk"		=> "Steinway",
		"model"		=> "145",		
		"bouwjaar"	=> "1920",
		"prijs"		=> "12950",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"Deze piano is van binnen volledig als nieuw gereviseerd.",
			"De buitenkant is opnieuw Hoogglans Zwart gespoten.",
		),
		"extra"		=> "Een '<em>must have</em>' voor de liefhebber",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "Seiler",
		"model"		=> "128 Smr",		
		"bouwjaar"	=> "1993",
		"prijs"		=> "7500",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "",
		"tekst" 	=> array(
			"De Smr-techniek maakt deze piano bijzonder.",
			"Hierdoor is het mogelijk om dezelfde repetitie-snelheid te halen als bij een vleugel. ",
			"De buitenkant is opnieuw gepolijst en oogt weer als nieuw.",
		),
		"extra"		=> "TOP instrument! Geen plaats voor een vleugel? Dan is dit een fantastisch alternatief",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "Steinbeck",
		"model"		=> "XU-132HA, 132/66",		
		"bouwjaar"	=> "2006",
		"prijs"		=> "3500",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"Dit betreft het topmodel van de '<em>Steinbeck Series</em>'.",

		),
		"extra"		=> "Zo goed als nieuw!",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "Kawai",
		"model"		=> "KS 3F, 125/61",		
		"bouwjaar"	=> "1984",
		"prijs"		=> "",
		"kleur"		=> "Zwart",
		"garantie"	=> "Kawai staat garant voor kwaliteit en een mooie, warme toon.",
		"tekst" 	=> array(
			"",
		),
		"extra"		=> "",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "Gebr. Schulze",
		"model"		=> "115",		
		"bouwjaar"	=> "2001",
		"prijs"		=> "2450",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"Absoluut een plaatje van een piano voor een acceptabele prijs.",
		),
		"extra"		=> "",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "H.Mayer",
		"model"		=> "112/56",		
		"bouwjaar"	=> "2003",
		"prijs"		=> "1750",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "",
		"tekst" 	=> array(
			"Mooie, zwarte hoogglans studiepiano.",
		),
		"extra"		=> "",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "Rippen",
		"model"		=> "107/53",		
		"bouwjaar"	=> "1953",
		"prijs"		=> "875",
		"kleur"		=> "Mat zwart",
		"garantie"	=> "",
		"tekst" 	=> array(
			"Uitstekend instrument voor een beginnend pianist.",
		),
		"extra"		=> "",
	),
	array(
		"soort"		=> "piano",
		"merk"		=> "Rösler",
		"model"		=> "108/53",		
		"bouwjaar"	=> "1963",
		"prijs"		=> "900",
		"kleur"		=> "Bruin",
		"garantie"	=> "",
		"tekst" 	=> array(
			"Prima instap-piano",
		),
		"extra"		=> "",
	),
	/* ---- VLEUGELS -- */
	array(
		"soort"		=> "vleugel",
		"merk"		=> "Bösendorfer",
		"model"		=> "200",		
		"bouwjaar"	=> "1980",
		"prijs"		=> "37500",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"Het instrument speelt perfect en biedt alles wat je van een Bösendorfer mag verwachten.",
			"De buitenkant is opnieuw polyester gespoten en verkeerd daardoor in volledige nieuwstaat.",
			"Deze vleugel is volledig gereviseerd door een top technicus/Bösendorfer specialist.",
		),
		"extra"		=> "Top instrument!",
	),
	array(
		"soort"		=> "vleugel",
		"merk"		=> "Feurich",
		"model"		=> "206",		
		"bouwjaar"	=> "1996",
		"prijs"		=> "14500",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"Altijd met zorg onderhouden en ziet er daarom als nieuw uit.",
			"Vleugel van Duitse topkwaliteit van Feurich.",
		),
		"extra"		=> "Topvleugel met Renner mechaniek, de beste mechaniek die er is!",
	),

	array(
		"soort"		=> "vleugel",
		"merk"		=> "Wendl & Lung",
		"model"		=> "161",		
		"bouwjaar"	=> "2008",
		"prijs"		=> "9500",
		"kleur"		=> "Mahony",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"",
		),
		"extra"		=> "",
	),

	array(
		"soort"		=> "vleugel",
		"merk"		=> "Hamilton",
		"model"		=> "187",		
		"bouwjaar"	=> "2011",
		"prijs"		=> "7900",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"Prima prijs/kwaliteit verhouding met een prachtige bas en een fijne speelaard.",
			"In het hoog klinkt de vleugel mooi transparant.",
		),
		"extra"		=> "",
	),

	array(
		"soort"		=> "vleugel",
		"merk"		=> "Bechstein E Concert",
		"model"		=> "275",		
		"bouwjaar"	=> "",
		"prijs"		=> "5000",
		"kleur"		=> "Wit",
		"garantie"	=> "",
		"tekst" 	=> array(
			"Heeft een revisie nodig.",
		),
		"extra"		=> "Voor de liefhebber!",
	),

	array(
		"soort"		=> "vleugel",
		"merk"		=> "H.Mayer",
		"model"		=> "160",		
		"bouwjaar"	=> "2007",
		"prijs"		=> "3750",
		"kleur"		=> "Zwart hoogglans",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"",
		),
		"extra"		=> "",
	),

	array(
		"soort"		=> "vleugel",
		"merk"		=> "Brasted",
		"model"		=> "160",		
		"bouwjaar"	=> "1924",
		"prijs"		=> "2500",
		"kleur"		=> "Bruin",
		"garantie"	=> "5",
		"tekst" 	=> array(
			"",
		),
		"extra"		=> "",
	),

);


// PART 2 ----

function selectImg($map, $afb)
{
    $fotos = array();
    if (is_dir($map)) {
        if ($dir = opendir($map)) {
            while (($foto = readdir($dir)) !== false) {
                if ($foto != "." && $foto != "..") {
                    if (strpos($foto, $afb) !== false) {
                        $fotos[] = $map . $foto;
                    }
                }
            }
        }
    }
    return $fotos;
}
function makePrice($num)
{
    if ($num == "") {
        $num = "-";
    } else {
        $num = "&euro;&nbsp;" . number_format(floatval($num), 0, ',', '.') . ",-";
    }
    return $num;
}
function dump($txt)
{
    echo "<pre>";
    print_r($txt);
    // var_dump($txt);
    echo "</pre>";
}

// start array with the 2 major keys 
$products = array(
    "piano" => array(),
    "vleugel" => array(),
);

foreach ($items as $key => $value) {
    $naam = $value['merk'] . " / " . $value['model'] . " (" . $value['bouwjaar'] . ")";
    $afb = $value['merk'] . "-" . $value['model'] . "-(" . $value['bouwjaar'] . ")";
    $correctie = array(
        ", " => "-",
        ". " => "-",
        " " => "-",
        "." => "-",
        "/" => "",
        "ö" => "oe",
        "()" => "(----)",
    );
    foreach ($correctie as $k => $v) {
        $afb = str_replace($k, $v, $afb);
    }
    // geen spatie, geen komma's, geen punt, ö wordt oe, geen () [jaartal niet ingevuld] wordt (----),
    $map = "assets/images/products/" . $value['soort'] . "s/";
    $deze = selectImg($map, $afb);
    $products[$value['soort']][] = array($naam, $value, $deze, $afb);
}
// dump($products);

?>
