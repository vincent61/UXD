<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html
 * Date :      Sat, 27 Apr 2013 18:45:45 GMT
 * Compile :   Wed, 08 May 2013 10:05:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html
// Temps de compilation total: 2.636 ms
//

function html_b5e83d4920fe53362d79a6c266473cef($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'ajouter', null),true) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class=\'nettoyeur\'></div>
<a href=\'' .
	parametre_url(self(),'ajouter','non') .
	'\' class=\'ajax bouton_fermer\'>' .
	interdire_scripts(filtre_balise_img_dist(chemin_image('fermer-16.png'))) .
	'</a>
<div class="ajax">
	' .
	executer_balise_dynamique('FORMULAIRE_JOINDRE_DOCUMENT',
	array('new',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_objet', null), '0'),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'objet', null), ''),true))),
	array('../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html','html_b5e83d4920fe53362d79a6c266473cef','',5,$GLOBALS['spip_lang'])) .
	'</div>
<div class=\'nettoyeur\'></div>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'ajouter', null),true) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . (	'
' .
	filtre_icone_dist(parametre_url(self(),'ajouter','oui'),((joindre_determiner_mode('auto','0',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'objet', null), ''),true))) == 'image') ? _T('medias:bouton_ajouter_image'):_T('medias:icone_creer_document')),'document-24.png',lang_dir(@$Pile[0]['lang'], 'right','left'),'new','ajax') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b5e83d4920fe53362d79a6c266473cef', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html');
}
?>