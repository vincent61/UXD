<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_avancees.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 16:42:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_avancees.html
// Temps de compilation total: 19.205 ms
//

function html_548ea3277978fa4998d127af66461ec6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_interactions')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:onglet_fonctions_avances') .
'</h1>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_REDUCTEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_548ea3277978fa4998d127af66461ec6','',5,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_AVERTISSEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_548ea3277978fa4998d127af66461ec6','',9,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_PREVISUALISEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_548ea3277978fa4998d127af66461ec6','',13,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_RELAYEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_548ea3277978fa4998d127af66461ec6','',17,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_MODERNISEUR',
	array(),
	array('../prive/squelettes/contenu/configurer_avancees.html','html_548ea3277978fa4998d127af66461ec6','',21,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_548ea3277978fa4998d127af66461ec6', $Cache, $page, '../prive/squelettes/contenu/configurer_avancees.html');
}
?>