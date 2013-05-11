<?php

/*
 * Squelette : squelettes-dist/inclure/footer.html
 * Date :      Sat, 27 Apr 2013 18:45:08 GMT
 * Compile :   Fri, 10 May 2013 18:49:02 GMT
 * Boucles :   _annee
 */ 

function BOUCLE_anneehtml_aac0dc40e7c3ce2b6431800e1936f31f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_annee';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('articles.date',''));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/footer.html','html_aac0dc40e7c3ce2b6431800e1936f31f','_annee',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= interdire_scripts(annee(normaliser_date($Pile[$SP]['date'])));
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inclure/footer.html
// Temps de compilation total: 4.528 ms
//

function html_aac0dc40e7c3ce2b6431800e1936f31f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="footer clearfix">
	<p class="colophon">
		' .
(($t1 = BOUCLE_anneehtml_aac0dc40e7c3ce2b6431800e1936f31f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . '-') :
		'') .
(($t1 = strval(interdire_scripts(annee(normaliser_date(@$Pile[0]['date'])))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'
		<br /><a rel="contents" href="' .
interdire_scripts(generer_url_public('plan', '')) .
'">' .
_T('public|spip|ecrire:plan_site') .
'</a>' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?'' :' ')))))!=='' ?
		('
		' . $t1 . (	' | <a href="' .
	interdire_scripts(parametre_url(generer_url_public('login', ''),'url',self())) .
	'" rel="nofollow" class=\'login_modal\'>' .
	_T('public|spip|ecrire:lien_connecter') .
	'</a>')) :
		'') .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ecrire')?" ":""))))!=='' ?
		('
		' . $t1 . (	'| <a href="' .
	interdire_scripts(eval('return '.'_DIR_RESTREINT_ABS'.';')) .
	'">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?' ' :'')))))!=='' ?
		('
		' . $t1 . (	' | <a href="' .
	executer_balise_dynamique('URL_LOGOUT',
	array(),
	array('squelettes-dist/inclure/footer.html','html_aac0dc40e7c3ce2b6431800e1936f31f','',5,$GLOBALS['spip_lang'])) .
	'" rel="nofollow">' .
	_T('public|spip|ecrire:icone_deconnecter') .
	'</a>')) :
		'') .
' | 
		<a rel="nofollow" href="' .
interdire_scripts(generer_url_public('contact', '')) .
'">' .
_T('public|spip|ecrire:contact') .
'</a> |
		<a href="' .
interdire_scripts(generer_url_public('backend', '')) .
'" rel="alternate" title="' .
_T('public|spip|ecrire:syndiquer_site') .
'">RSS&nbsp;2.0</a>
	</p>
	<small class="generator"><a href="http://www.spip.net/" rel="generator" title="' .
_T('public|spip|ecrire:site_realise_avec_spip') .
'" class="spip_out"><img src="' .
interdire_scripts(find_in_path('spip.png')) .
'" alt="SPIP" /></a></small>
</div>');

	return analyse_resultat_skel('html_aac0dc40e7c3ce2b6431800e1936f31f', $Cache, $page, 'squelettes-dist/inclure/footer.html');
}
?>