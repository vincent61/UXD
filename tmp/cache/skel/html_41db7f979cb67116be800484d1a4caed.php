<?php

/*
 * Squelette : ../plugins-dist/forum/prive/objets/configurer/moderation.html
 * Date :      Sat, 27 Apr 2013 18:45:27 GMT
 * Compile :   Wed, 08 May 2013 10:04:40 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/forum/prive/objets/configurer/moderation.html
// Temps de compilation total: 5.396 ms
//

function html_41db7f979cb67116be800484d1a4caed($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'ajax\'>
' .
executer_balise_dynamique('FORMULAIRE_ACTIVER_FORUMS_OBJET',
	array(@$Pile[0]['id_objet'],interdire_scripts(@$Pile[0]['objet'])),
	array('../plugins-dist/forum/prive/objets/configurer/moderation.html','html_41db7f979cb67116be800484d1a4caed','',2,$GLOBALS['spip_lang'])) .
'</div>');

	return analyse_resultat_skel('html_41db7f979cb67116be800484d1a4caed', $Cache, $page, '../plugins-dist/forum/prive/objets/configurer/moderation.html');
}
?>