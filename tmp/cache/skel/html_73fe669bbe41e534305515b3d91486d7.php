<?php

/*
 * Squelette : ../prive/squelettes/inclure/configurer.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 16:42:25 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/configurer.html
// Temps de compilation total: 0.838 ms
//

function html_73fe669bbe41e534305515b3d91486d7($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('bouton', interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true))))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class="ajax">
	' .
	executer_balise_dynamique('FORMULAIRE_',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true))),
	array('../prive/squelettes/inclure/configurer.html','html_73fe669bbe41e534305515b3d91486d7','',3,$GLOBALS['spip_lang'])) .
	'
</div>
')) :
		'');

	return analyse_resultat_skel('html_73fe669bbe41e534305515b3d91486d7', $Cache, $page, '../prive/squelettes/inclure/configurer.html');
}
?>