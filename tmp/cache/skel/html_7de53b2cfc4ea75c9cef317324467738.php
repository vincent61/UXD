<?php

/*
 * Squelette : squelettes/tutoriel.html
 * Date :      Fri, 10 May 2013 10:16:37 GMT
 * Compile :   Fri, 10 May 2013 10:16:39 GMT
 * Boucles :   _article
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
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "1"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/tutoriel.html','html_7de53b2cfc4ea75c9cef317324467738','_article',1,$GLOBALS['spip_lang'])
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
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'
' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes/tutoriel.html
// Temps de compilation total: 1.464 ms
//

function html_7de53b2cfc4ea75c9cef317324467738($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_articlehtml_7de53b2cfc4ea75c9cef317324467738($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_7de53b2cfc4ea75c9cef317324467738', $Cache, $page, 'squelettes/tutoriel.html');
}
?>