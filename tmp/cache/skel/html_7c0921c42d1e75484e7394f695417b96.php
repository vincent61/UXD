<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_langue.html
 * Date :      Sat, 27 Apr 2013 18:44:57 GMT
 * Compile :   Wed, 08 May 2013 16:42:19 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_langue.html
// Temps de compilation total: 15.149 ms
//

function html_7c0921c42d1e75484e7394f695417b96($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_langue')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:info_langues') .
'</h1>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_LANGUE',
	array(),
	array('../prive/squelettes/contenu/configurer_langue.html','html_7c0921c42d1e75484e7394f695417b96','',4,$GLOBALS['spip_lang'])) .
'
</div>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_TRANSCODEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_langue.html','html_7c0921c42d1e75484e7394f695417b96','',7,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_7c0921c42d1e75484e7394f695417b96', $Cache, $page, '../prive/squelettes/contenu/configurer_langue.html');
}
?>