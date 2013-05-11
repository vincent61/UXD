<?php

/*
 * Squelette : ../prive/squelettes/top/plan.html
 * Date :      Sat, 27 Apr 2013 18:44:55 GMT
 * Compile :   Fri, 10 May 2013 20:41:36 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/plan.html
// Temps de compilation total: 0.305 ms
//

function html_e9f20125064a5f6051671c7cbfe169fe($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1>' .
_T('public|spip|ecrire:plan_site') .
'</h1>
' .
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))));

	return analyse_resultat_skel('html_e9f20125064a5f6051671c7cbfe169fe', $Cache, $page, '../prive/squelettes/top/plan.html');
}
?>