<?php

/*
 * Squelette : ../plugins-dist/revisions/prive/squelettes/contenu/configurer_revisions.html
 * Date :      Sat, 27 Apr 2013 18:45:21 GMT
 * Compile :   Wed, 08 May 2013 16:44:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/revisions/prive/squelettes/contenu/configurer_revisions.html
// Temps de compilation total: 7.647 ms
//

function html_552ae0261cd3fd2c981ee28d3bc2b9bf($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_revisions')?" ":""))) .
'
<h1 class="grostitre">' .
_T('revisions:titre_revisions') .
'</h1>
<div class=\'ajax\'>
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_REVISIONS_OBJETS',
	array(),
	array('../plugins-dist/revisions/prive/squelettes/contenu/configurer_revisions.html','html_552ae0261cd3fd2c981ee28d3bc2b9bf','',4,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_552ae0261cd3fd2c981ee28d3bc2b9bf', $Cache, $page, '../plugins-dist/revisions/prive/squelettes/contenu/configurer_revisions.html');
}
?>