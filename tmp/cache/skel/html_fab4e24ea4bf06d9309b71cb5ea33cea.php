<?php

/*
 * Squelette : ../plugins-dist/compagnon/compagnon/article_redaction.html
 * Date :      Wed, 17 Apr 2013 16:48:02 GMT
 * Compile :   Fri, 10 May 2013 10:13:07 GMT
 * Boucles :   _article_en_redaction
 */ 

function BOUCLE_article_en_redactionhtml_fab4e24ea4bf06d9309b71cb5ea33cea(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article_en_redaction';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.statut', "'prepa'"), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/compagnon/compagnon/article_redaction.html','html_fab4e24ea4bf06d9309b71cb5ea33cea','_article_en_redaction',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'fermer', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir(_T('compagnon:c_article_redaction'), 'compagnon') .
	'

' .
	_T('compagnon:c_article_redaction_texte') .
	'

' .
	boite_pied() .
	'
	<span class="target" data-target="#navigation li.editer_statut"></span>
	' .
	bouton_action(filtre_ok_aleatoire_dist(''),invalideur_session($Cache, generer_action_auteur('compagnon',(	'compris/' .
			interdire_scripts(invalideur_session($Cache, @$Pile[0]['id']))),invalideur_session($Cache, parametre_url(self(),'fermer','oui')))),'ajax') .
	'
' .
	boite_fermer() .
	'
')) :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/compagnon/compagnon/article_redaction.html
// Temps de compilation total: 1.899 ms
//

function html_fab4e24ea4bf06d9309b71cb5ea33cea($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_article_en_redactionhtml_fab4e24ea4bf06d9309b71cb5ea33cea($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_fab4e24ea4bf06d9309b71cb5ea33cea', $Cache, $page, '../plugins-dist/compagnon/compagnon/article_redaction.html');
}
?>