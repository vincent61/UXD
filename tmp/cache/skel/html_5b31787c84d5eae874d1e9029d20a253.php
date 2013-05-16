<?php

/*
 * Squelette : ../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 17:26:20 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html
// Temps de compilation total: 2.739 ms
//

function html_5b31787c84d5eae874d1e9029d20a253($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('urls:icone_configurer_urls') .
'</h1>


' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_URLS',
	array(),
	array('../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html','html_5b31787c84d5eae874d1e9029d20a253','',4,$GLOBALS['spip_lang'])) .
'

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_',
	array(interdire_scripts(choisir_form_configuration((include_spip('inc/config')?lire_config('type_urls',null,false):'')))),
	array('../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html','html_5b31787c84d5eae874d1e9029d20a253','',7,$GLOBALS['spip_lang'])) .
'</div>');

	return analyse_resultat_skel('html_5b31787c84d5eae874d1e9029d20a253', $Cache, $page, '../plugins-dist/urls_etendues/prive/squelettes/contenu/configurer_urls.html');
}
?>