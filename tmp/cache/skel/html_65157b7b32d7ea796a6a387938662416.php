<?php

/*
 * Squelette : squelettes/inclure/head.html
 * Date :      Wed, 08 May 2013 16:25:37 GMT
 * Compile :   Fri, 10 May 2013 18:49:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/head.html
// Temps de compilation total: 0.417 ms
//

function html_65157b7b32d7ea796a6a387938662416($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/style.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
');

	return analyse_resultat_skel('html_65157b7b32d7ea796a6a387938662416', $Cache, $page, 'squelettes/inclure/head.html');
}
?>