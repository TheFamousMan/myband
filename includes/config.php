<?php 
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens
define('DB_HOST','localhost');
define('DB_NAME','artist-website');
define('DB_USERNAME','root');
define('DB_PASSWORD','haslo0000');

?>
