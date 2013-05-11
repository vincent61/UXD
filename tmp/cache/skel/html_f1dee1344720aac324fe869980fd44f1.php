<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_multilinguisme.html
 * Date :      Sat, 27 Apr 2013 18:44:57 GMT
 * Compile :   Wed, 08 May 2013 16:43:36 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_multilinguisme.html
// Temps de compilation total: 12.095 ms
//

function html_f1dee1344720aac324fe869980fd44f1($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_multilinguisme')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:info_langues') .
'</h1>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_MULTILINGUISME',
	array(),
	array('../prive/squelettes/contenu/configurer_multilinguisme.html','html_f1dee1344720aac324fe869980fd44f1','',4,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_f1dee1344720aac324fe869980fd44f1', $Cache, $page, '../prive/squelettes/contenu/configurer_multilinguisme.html');
}
?>