<?php

/*
 * Squelette : ../plugins-dist/revisions/formulaires/configurer_revisions_objets.html
 * Date :      Sat, 27 Apr 2013 18:45:21 GMT
 * Compile :   Wed, 08 May 2013 16:44:17 GMT
 * Boucles :   _objets
 */ 

function BOUCLE_objetshtml_0077edab7bd27099ea7db72668ac395f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(lister_tables_objets_sql(''));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins-dist/revisions/formulaires/configurer_revisions_objets.html','html_0077edab7bd27099ea7db72668ac395f','_objets',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts((((table_valeur($Pile[$SP]['valeur'], 'editable')) AND (interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'champs_versionnes')))) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars'][(string)'id'] = concat(replace(table_valeur($Pile["vars"], (string)'name', null),'\\W','_'),'_',interdire_scripts($Pile[$SP]['cle']))) .
	'<div class="choix choix_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'">
					<input type="checkbox"  id="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'[]" value="' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"' .
	(($t2 = strval(interdire_scripts(in_any($Pile[$SP]['cle'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' />
					<label for="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'">' .
	interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'texte_objets'))) .
	'</label>
				</div>
				')) :
		'');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/revisions/formulaires/configurer_revisions_objets.html
// Temps de compilation total: 6.190 ms
//

function html_0077edab7bd27099ea7db72668ac395f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_configurer formulaire_configurer_forums_contenu\' id=\'formulaire_configurer_forums_contenu\'>
<h3 class=\'titrem\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('revision-24.png'),'','cadre-icone')) .
_T('revisions:titre_form_revisions_objets') .
'</h3>

' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'

	<form action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'#formulaire_configurer_contenu_forums" method="post"><div>
		' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>' .
'
		<ul>
			<li class=\'editer long_label configurer_objets_versions' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'objets_versions'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				<label>' .
_T('revisions:label_config_revisions_objets') .
'</label>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'objets_versions')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				' .
vide($Pile['vars'][(string)'name'] = 'objets_versions') .
BOUCLE_objetshtml_0077edab7bd27099ea7db72668ac395f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				<input type="hidden" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
'[]" value="" />
			</li>
		</ul>
		<p class=\'boutons\'><span class="image_loading"></span><input class=\'submit\' type="submit" name="ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'"/></p>
	</div></form>

</div>');

	return analyse_resultat_skel('html_0077edab7bd27099ea7db72668ac395f', $Cache, $page, '../plugins-dist/revisions/formulaires/configurer_revisions_objets.html');
}
?>