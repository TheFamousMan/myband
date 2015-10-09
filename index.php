<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Garfield | Natan Weronski');
// Toon de template: output html
$templateParser->display('head.tpl');


$do = (empty($_GET['do'])) ? '' : $_GET['do'];

$templateParser->assign('curr_page', $do);
$templateParser->display('nav.tpl');

switch ($do) {
	case 'news':
			$templateParser->display('search.tpl');	
			require 'logic/select_newsarticles.php';
		break;

	case 'news_search':
			$templateParser->display('search.tpl');	
			require 'logic/search_newsarticles.php';
		break;
	
	case 'contact':
			$templateParser->display('contact.tpl');		
		break;

	case 'about':
			$templateParser->display('about.tpl');		
		break;

	default:
			$templateParser->display('home.tpl');	
		break;
};

$templateParser->display('footer.tpl');