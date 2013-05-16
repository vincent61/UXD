<?php

/*
 * Squelette : squelettes/page.html
 * Date :      Thu, 16 May 2013 09:37:55 GMT
 * Compile :   Thu, 16 May 2013 09:37:58 GMT
 * Boucles :   _sousrubrique1, _sousrubrique2, _sousrubrique7, _sousrubrique12, _sousrubrique16, _sousrubrique20, _article, _sousrubrique, _rubrique
 */ 

function BOUCLE_sousrubrique1html_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique1';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "1"));
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique1',65,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li>
							<a href="./spip.php?page=page&id_rubrique=1#sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sousrubrique2html_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique2';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "2"));
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique2',75,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li>
							<a href="./spip.php?page=page&id_rubrique=2#sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sousrubrique7html_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique7';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "7"));
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique7',85,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li>
							<a href="./spip.php?page=page&id_rubrique=7#sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sousrubrique12html_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique12';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "12"));
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique12',95,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li>
							<a href="./spip.php?page=page&id_rubrique=12#sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sousrubrique16html_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique16';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "16"));
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique16',105,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li>
							<a href="./spip.php?page=page&id_rubrique=16#sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sousrubrique20html_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique20';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "20"));
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique20',115,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li>
							<a href="./spip.php?page=page&id_rubrique=20#sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articlehtml_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		"articles.chapo",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_article',135,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<h3>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h3>
					<b>' .
interdire_scripts(propre($Pile[$SP]['chapo'], $connect, $Pile[0])) .
'</b>
					<div id="ContenuTexte">' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'</div></br>
				');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sousrubriquehtml_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousrubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
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
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_sousrubrique',133,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<h2 id="sousRub' .
$Pile[$SP]['id_rubrique'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>
				' .
BOUCLE_articlehtml_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriquehtml_f2fb10a416839eb61be04766873c85f4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('squelettes/page.html','html_f2fb10a416839eb61be04766873c85f4','_rubrique',131,$GLOBALS['spip_lang'])
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
BOUCLE_sousrubriquehtml_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes/page.html
// Temps de compilation total: 35.587 ms
//

function html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
<title>' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
(($t1 = strval(interdire_scripts(textebrut(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		(' - ' . $t1) :
		'') .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/reset.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/page.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script>
$(document).ready(function(){
	var timer;

	$("#back-top").hide();

	$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$(\'#back-top\').fadeIn();
			} else {
				$(\'#back-top\').fadeOut();
			}
	});

	// scroll body to 0px on click
	$(\'#back-top a\').click(function () {
		$(\'body,html\').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

	$(\'.MenuCache\').parent().mouseenter( function() {
		clearTimeout(timer);
		var $this = $(this);

		timer = setTimeout(function(){
			$this.children(\'ul\').stop().slideDown(500);
		}, 100);
	} );

	$(\'.MenuCache\').parent().mouseleave( function() {
		clearTimeout(timer);
		$(this).children(\'ul\').stop().slideUp(500);
	} );
});
</script>

</head>

<body class="pas_surlignable page_sommaire">
	<nav id="menu">
		<div id="UXD"><a href="./">UXD</a></div>
		<ul>
			<li id="EnseignementTitre"><a href="./spip.php?page=page&id_rubrique=1">Enseignement</a>
				' .
interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'1','<ul>','<ul class="MenuCache">')) .
'
					' .
BOUCLE_sousrubrique1html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				</ul>
			</li>

			<li id="InternationalTitre"><a href="./spip.php?page=page&id_rubrique=2">International</a>
				' .
interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'2','<ul>','<ul class="MenuCache">')) .
'
					' .
BOUCLE_sousrubrique2html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				</ul>
			</li>

			<li id="MetiersStagesTitre"><a href="./spip.php?page=page&id_rubrique=7">Métiers et stages</a>
				' .
interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'7','<ul>','<ul class="MenuCache">')) .
'
					' .
BOUCLE_sousrubrique7html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'	
				</ul>
			</li>

			<li id="EquipesRechercheTitre"><a href="./spip.php?page=page&id_rubrique=12">Equipes de recherche</a>
				' .
interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'12','<ul>','<ul class="MenuCache">')) .
'
					' .
BOUCLE_sousrubrique12html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'	
				</ul>
			</li>

			<li id="ProjetsTitre"><a href="./spip.php?page=page&id_rubrique=16">Projets</a>
				' .
interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'16','<ul>','<ul class="MenuCache">')) .
'
					' .
BOUCLE_sousrubrique16html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'	
				</ul>
			</li>

			<li id="InformationsPratiquesTitre"><a href="./spip.php?page=page&id_rubrique=20">Informations pratiques</a>
				' .
interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'20','<ul>','<ul class="MenuCache">')) .
'
					' .
BOUCLE_sousrubrique20html_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'	
				</ul>
			</li>

		</ul>

		<div id="logo">
			<a href="http://www.utc.fr"><img src="squelettes/images/logo_utc.png" alt= "UTC"></img></a>
		</div>
	</nav>

	<section id="content">
		' .
BOUCLE_rubriquehtml_f2fb10a416839eb61be04766873c85f4($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	<section>

	<div id="back-top"><a href="#">Haut de page</a></div>
</body>
</html>');

	return analyse_resultat_skel('html_f2fb10a416839eb61be04766873c85f4', $Cache, $page, 'squelettes/page.html');
}
?>