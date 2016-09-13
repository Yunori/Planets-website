<?php
        session_start();
        $page = $_GET['page'];
        ob_start();
	    if (empty($page) || $_GET['page'] == 'index') {
		    include_once("accueil.php"); }
		elseif (is_file("./ressources/" . $page . ".php")) {
		    include_once("./ressources/" . $page . ".php"); }
		elseif (is_file("./ressources/produits/" . $page . ".php")) {
		    include_once("./ressources/produits/" . $page . ".php"); }
		else {
		    //include_once('./ressources/error.php'); }
		print_r($_GET['page']);}
		$content = ob_get_contents();
		ob_clean();
		include_once('main.php');
?>