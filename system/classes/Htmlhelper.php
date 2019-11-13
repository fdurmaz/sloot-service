<?php

namespace Helper;

class Htmlhelper
{


	public function template($path = 'home', array $arr = [], $headfooter = true)
	{
		$view_file = DIR_PATH . "/view/" . $path . ".php";
		ob_start();

		if (file_exists($view_file)) {
			extract($arr);

			if ($headfooter) {
				include(DIR_PATH . "/view/template/head.php");
				include($view_file);
				include(DIR_PATH . "/view/template/socialmedia.php");
				include(DIR_PATH . "/view/template/footer.php");
			} else {
				include($view_file);
			}
		} else {
			include(DIR_PATH . "/view/template/error.php");
		}

		$html = ob_get_contents();
		ob_end_clean();
		return $html;
	}
}
