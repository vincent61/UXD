<?php

/*
 * Squelette : squelettes/tutoriel.html
 * Date :      Wed, 08 May 2013 12:22:00 GMT
 * Compile :   Wed, 08 May 2013 12:22:05 GMT
 * Boucles :   _article, _rubrique, _menu_articles
 */ 

function BOUCLE_articlehtml_7de53b2cfc4ea75c9cef317324467738(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '0,10';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/tutoriel.html','html_7de53b2cfc4ea75c9cef317324467738','_article',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a><br/>
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriquehtml_7de53b2cfc4ea75c9cef317324467738(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.texte",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/tutoriel.html','html_7de53b2cfc4ea75c9cef317324467738','_rubrique',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<h1>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>

' .
BOUCLE_articlehtml_7de53b2cfc4ea75c9cef317324467738($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
interdire_scripts(justifier(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_menu_articleshtml_7de53b2cfc4ea75c9cef317324467738(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_menu_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.id_article",
		"articles.lang");
		$command['orderby'] = array('articles.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/tutoriel.html','html_7de53b2cfc4ea75c9cef317324467738','_menu_articles',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<OPTION VALUE="' .
$Pile[$SP]['id_article'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</OPTION>
		');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes/tutoriel.html
// Temps de compilation total: 14.864 ms
//

function html_7de53b2cfc4ea75c9cef317324467738($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_rubriquehtml_7de53b2cfc4ea75c9cef317324467738($Cache, $Pile, $doublons, $Numrows, $SP) .
'

<FORM ACTION="' .
interdire_scripts(generer_url_public('article', '')) .
'" METHOD="get">
	
	<SELECT NAME="id_article">
		' .
BOUCLE_menu_articleshtml_7de53b2cfc4ea75c9cef317324467738($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</SELECT>

	<INPUT TYPE="submit" NAME="Valider" VALUE="Afficher l\'article">
</FORM>');

	return analyse_resultat_skel('html_7de53b2cfc4ea75c9cef317324467738', $Cache, $page, 'squelettes/tutoriel.html');
}
?>