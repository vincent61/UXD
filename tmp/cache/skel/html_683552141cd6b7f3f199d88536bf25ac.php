<?php

/*
 * Squelette : ../prive/squelettes/navigation/auteur_edit.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 13:37:24 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/auteur_edit.html
// Temps de compilation total: 0.116 ms
//

function html_683552141cd6b7f3f199d88536bf25ac($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_683552141cd6b7f3f199d88536bf25ac', $Cache, $page, '../prive/squelettes/navigation/auteur_edit.html');
}
?>