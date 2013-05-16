<?php

/*
 * Squelette : ../prive/objets/editer/liens.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 17:32:21 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/editer/liens.html
// Temps de compilation total: 3.139 ms
//

function html_7b0366f21fb95811941a43e67689401d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_EDITER_LIENS',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'table_source', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true) == 'non') ? '':' '))),
	array('../prive/objets/editer/liens.html','html_7b0366f21fb95811941a43e67689401d','',2,$GLOBALS['spip_lang'])) .
'</div>');

	return analyse_resultat_skel('html_7b0366f21fb95811941a43e67689401d', $Cache, $page, '../prive/objets/editer/liens.html');
}
?>