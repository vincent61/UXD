<?php

/*
 * Squelette : squelettes-dist/recherche.html
 * Date :      Wed, 17 Apr 2013 16:47:58 GMT
 * Compile :   Fri, 10 May 2013 10:12:45 GMT
 * Boucles :   _articles, _rubriques, _mots, _breves, _messages, _sites
 */ 

function BOUCLE_articleshtml_5224b221c31d66694b3b8ddc007c8004(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = ''; 
	// RECHERCHE
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "articles", "","",array (
),"id_article");
	}
	
	$command['pagination'] = array((isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('points DESC');
		$command['join'] = array('resultats' => array('articles','id','id_article'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("articles.id_article",
		"$rech_select",
		"articles.titre",
		"articles.lang");
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('articles.date',''), $rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','_articles',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_articles']['compteur_boucle'] = 0;
	$Numrows['_articles']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : _request('debut_articles');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_articles'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_articles']['total']-1)/(10))*(10)));
	$fin_boucle = min(($tout ? $Numrows['_articles']['total'] : $debut_boucle + 9), $Numrows['_articles']['total'] - 1);
	$Numrows['_articles']['grand_total'] = $Numrows['_articles']['total'];
	$Numrows['_articles']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_articles']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_articles']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_articles']['compteur_boucle']++;
		if ($Numrows['_articles']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_articles']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriqueshtml_5224b221c31d66694b3b8ddc007c8004(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = ''; 
	// RECHERCHE
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "rubriques", "","",array (
),"id_rubrique");
	}
	
	$command['pagination'] = array((isset($Pile[0]['debut_rubriques']) ? $Pile[0]['debut_rubriques'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('points DESC');
		$command['join'] = array('resultats' => array('rubriques','id','id_rubrique'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("rubriques.id_rubrique",
		"$rech_select",
		"rubriques.titre",
		"rubriques.lang");
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), $rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','_rubriques',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_rubriques']['compteur_boucle'] = 0;
	$Numrows['_rubriques']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_rubriques']) ? $Pile[0]['debut_rubriques'] : _request('debut_rubriques');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_rubriques'] = quete_debut_pagination('id_rubrique',$Pile[0]['@id_rubrique'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_rubriques']['total']-1)/(5))*(5)));
	$fin_boucle = min(($tout ? $Numrows['_rubriques']['total'] : $debut_boucle + 4), $Numrows['_rubriques']['total'] - 1);
	$Numrows['_rubriques']['grand_total'] = $Numrows['_rubriques']['total'];
	$Numrows['_rubriques']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_rubriques']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_rubriques']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_rubriques']['compteur_boucle']++;
		if ($Numrows['_rubriques']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_rubriques']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_motshtml_5224b221c31d66694b3b8ddc007c8004(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = ''; 
	// RECHERCHE
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "mots", "","",array (
),"id_mot");
	}
	
	$command['pagination'] = array((isset($Pile[0]['debut_mots']) ? $Pile[0]['debut_mots'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots';
		$command['from'] = array('mots' => 'spip_mots','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('points DESC');
		$command['join'] = array('resultats' => array('mots','id','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("mots.id_mot",
		"$rech_select",
		"mots.titre");
	$command['where'] = 
			array($rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','_mots',61,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_mots']['compteur_boucle'] = 0;
	$Numrows['_mots']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_mots']) ? $Pile[0]['debut_mots'] : _request('debut_mots');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_mots'] = quete_debut_pagination('id_mot',$Pile[0]['@id_mot'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_mots']['total']-1)/(5))*(5)));
	$fin_boucle = min(($tout ? $Numrows['_mots']['total'] : $debut_boucle + 4), $Numrows['_mots']['total'] - 1);
	$Numrows['_mots']['grand_total'] = $Numrows['_mots']['total'];
	$Numrows['_mots']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_mots']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_mots']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_mots']['compteur_boucle']++;
		if ($Numrows['_mots']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_mots']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
					<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_breveshtml_5224b221c31d66694b3b8ddc007c8004(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = ''; 
	// RECHERCHE
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "breves", "","",array (
),"id_breve");
	}
	
	$command['pagination'] = array((isset($Pile[0]['debut_breves']) ? $Pile[0]['debut_breves'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('points DESC');
		$command['join'] = array('resultats' => array('breves','id','id_breve'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("breves.id_breve",
		"$rech_select",
		"breves.titre",
		"breves.lang");
	$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''), $rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','_breves',75,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_breves']['compteur_boucle'] = 0;
	$Numrows['_breves']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_breves']) ? $Pile[0]['debut_breves'] : _request('debut_breves');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_breves'] = quete_debut_pagination('id_breve',$Pile[0]['@id_breve'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_breves']['total']-1)/(5))*(5)));
	$fin_boucle = min(($tout ? $Numrows['_breves']['total'] : $debut_boucle + 4), $Numrows['_breves']['total'] - 1);
	$Numrows['_breves']['grand_total'] = $Numrows['_breves']['total'];
	$Numrows['_breves']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_breves']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_breves']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_breves']['compteur_boucle']++;
		if ($Numrows['_breves']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_breves']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_messageshtml_5224b221c31d66694b3b8ddc007c8004(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = ''; 
	// RECHERCHE
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "forum", "","",array (
),"id_forum");
	}
	
	$command['pagination'] = array((isset($Pile[0]['debut_messages']) ? $Pile[0]['debut_messages'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_messages';
		$command['from'] = array('forum' => 'spip_forum','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('points DESC');
		$command['join'] = array('resultats' => array('forum','id','id_forum'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("forum.id_forum",
		"$rech_select",
		"forum.texte",
		"forum.titre");
	$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''), 
			array('=', 'forum.id_parent', 0), $rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','_messages',89,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_messages']['compteur_boucle'] = 0;
	$Numrows['_messages']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_messages']) ? $Pile[0]['debut_messages'] : _request('debut_messages');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_messages'] = quete_debut_pagination('id_forum',$Pile[0]['@id_forum'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_messages']['total']-1)/(5))*(5)));
	$fin_boucle = min(($tout ? $Numrows['_messages']['total'] : $debut_boucle + 4), $Numrows['_messages']['total'] - 1);
	$Numrows['_messages']['grand_total'] = $Numrows['_messages']['total'];
	$Numrows['_messages']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_messages']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_messages']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_messages']['compteur_boucle']++;
		if ($Numrows['_messages']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_messages']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
					' .
(($t1 = strval(interdire_scripts(couper(safehtml(propre(interdit_html($Pile[$SP]['texte']), $connect, $Pile[0])),'80'))))!=='' ?
		((	'<li><a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_forum'], 'forum', '', '', true))) .
	'"' .
	(($t2 = strval(interdire_scripts(couper(attribut_html(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))),'80'))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>') . $t1 . '</a></li>') :
		'') .
'
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_siteshtml_5224b221c31d66694b3b8ddc007c8004(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = ''; 
	// RECHERCHE
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "syndic", "","",array (
),"id_syndic");
	}
	
	$command['pagination'] = array((isset($Pile[0]['debut_sites']) ? $Pile[0]['debut_sites'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('points DESC');
		$command['join'] = array('resultats' => array('syndic','id','id_syndic'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("syndic.id_syndic",
		"$rech_select",
		"syndic.url_site",
		"syndic.nom_site");
	$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''), $rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','_sites',103,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_sites']['compteur_boucle'] = 0;
	$Numrows['_sites']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_sites']) ? $Pile[0]['debut_sites'] : _request('debut_sites');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_sites'] = quete_debut_pagination('id_syndic',$Pile[0]['@id_syndic'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_sites']['total']-1)/(5))*(5)));
	$fin_boucle = min(($tout ? $Numrows['_sites']['total'] : $debut_boucle + 4), $Numrows['_sites']['total'] - 1);
	$Numrows['_sites']['grand_total'] = $Numrows['_sites']['total'];
	$Numrows['_sites']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_sites']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_sites']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_sites']['compteur_boucle']++;
		if ($Numrows['_sites']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_sites']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
					<li><a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site','','',($connect ? $connect : NULL)) .
'">' .
interdire_scripts(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) .
'</a></li>
					');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/recherche.html
// Temps de compilation total: 17.721 ms
//

function html_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
_T('public|spip|ecrire:resultats_recherche') .
' - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/recherche.html\',\'html_5224b221c31d66694b3b8ddc007c8004\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
<meta name="robots" content="none" />
</head>

<body class="pas_surlignable page_recherche">
<div class="page">

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/recherche.html\',\'html_5224b221c31d66694b3b8ddc007c8004\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/recherche.html\',\'html_5224b221c31d66694b3b8ddc007c8004\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	
	<div class="main">
		
		<div class="wrapper">
		<div class="content" id="content">
			<p class="arbo"><a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a> &gt; ' .
_T('public|spip|ecrire:info_rechercher') .
(($t1 = strval(entites_html(_request("recherche"))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'</p>
			
			' .
(($t1 = strval(entites_html(_request("recherche"))))!=='' ?
		((	'<div class="cartouche">
				<h1>' .
	_T('public|spip|ecrire:resultats_recherche') .
	'</h1>
				<p class="soustitre">&#171;&nbsp;') . $t1 . '&nbsp;&#187;</p>
			</div>') :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_articleshtml_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_articles">
				' .
		filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, false, '', '', array()) .
		'
				<h2>' .
		_T('public|spip|ecrire:articles') .
		' (' .
		(isset($Numrows['_articles']['grand_total'])
			? $Numrows['_articles']['grand_total'] : $Numrows['_articles']['total']) .
		')</h2>
				<ul class="spip">
					') . $t1 . (	'
				</ul>
				' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
			</div>
			')) :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_rubriqueshtml_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_rubriques">
				' .
		filtre_pagination_dist($Numrows["_rubriques"]["grand_total"],
 		'_rubriques',
		isset($Pile[0]['debut_rubriques'])?$Pile[0]['debut_rubriques']:intval(_request('debut_rubriques')),
		5, false, '', '', array()) .
		'
				<h2>' .
		_T('public|spip|ecrire:rubriques') .
		' (' .
		(isset($Numrows['_rubriques']['grand_total'])
			? $Numrows['_rubriques']['grand_total'] : $Numrows['_rubriques']['total']) .
		')</h2>
				<ul class="spip">
					') . $t1 . (	'
				</ul>
				' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_rubriques"]["grand_total"],
 		'_rubriques',
		isset($Pile[0]['debut_rubriques'])?$Pile[0]['debut_rubriques']:intval(_request('debut_rubriques')),
		5, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
			</div>
			')) :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_motshtml_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_mots">
				' .
		filtre_pagination_dist($Numrows["_mots"]["grand_total"],
 		'_mots',
		isset($Pile[0]['debut_mots'])?$Pile[0]['debut_mots']:intval(_request('debut_mots')),
		5, false, '', '', array()) .
		'
				<h2>' .
		_T('public|spip|ecrire:mots_clefs') .
		' (' .
		(isset($Numrows['_mots']['grand_total'])
			? $Numrows['_mots']['grand_total'] : $Numrows['_mots']['total']) .
		')</h2>
				<ul class="spip">
					') . $t1 . (	'
				</ul>
				' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_mots"]["grand_total"],
 		'_mots',
		isset($Pile[0]['debut_mots'])?$Pile[0]['debut_mots']:intval(_request('debut_mots')),
		5, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
			</div>
			')) :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_breveshtml_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_breves">
				' .
		filtre_pagination_dist($Numrows["_breves"]["grand_total"],
 		'_breves',
		isset($Pile[0]['debut_breves'])?$Pile[0]['debut_breves']:intval(_request('debut_breves')),
		5, false, '', '', array()) .
		'
				<h2>' .
		_T('breves:breves') .
		' (' .
		(isset($Numrows['_breves']['grand_total'])
			? $Numrows['_breves']['grand_total'] : $Numrows['_breves']['total']) .
		')</h2>
				<ul class="spip">
					') . $t1 . (	'
				</ul>
				' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_breves"]["grand_total"],
 		'_breves',
		isset($Pile[0]['debut_breves'])?$Pile[0]['debut_breves']:intval(_request('debut_breves')),
		5, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
			</div>
			')) :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_messageshtml_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_comments">
				' .
		filtre_pagination_dist($Numrows["_messages"]["grand_total"],
 		'_messages',
		isset($Pile[0]['debut_messages'])?$Pile[0]['debut_messages']:intval(_request('debut_messages')),
		5, false, '', '', array()) .
		'
				<h2>' .
		_T('public|spip|ecrire:messages_forum') .
		' (' .
		(isset($Numrows['_messages']['grand_total'])
			? $Numrows['_messages']['grand_total'] : $Numrows['_messages']['total']) .
		')</h2>
				<ul class="spip">
					') . $t1 . (	'
				</ul>
				' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_messages"]["grand_total"],
 		'_messages',
		isset($Pile[0]['debut_messages'])?$Pile[0]['debut_messages']:intval(_request('debut_messages')),
		5, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
			</div>
			')) :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_siteshtml_5224b221c31d66694b3b8ddc007c8004($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_sites">
				' .
		filtre_pagination_dist($Numrows["_sites"]["grand_total"],
 		'_sites',
		isset($Pile[0]['debut_sites'])?$Pile[0]['debut_sites']:intval(_request('debut_sites')),
		5, false, '', '', array()) .
		'
				<h2>' .
		_T('public|spip|ecrire:sites_web') .
		' (' .
		(isset($Numrows['_sites']['grand_total'])
			? $Numrows['_sites']['grand_total'] : $Numrows['_sites']['total']) .
		')</h2>
				<ul class="spip">
					') . $t1 . (	'
				</ul>
				' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_sites"]["grand_total"],
 		'_sites',
		isset($Pile[0]['debut_sites'])?$Pile[0]['debut_sites']:intval(_request('debut_sites')),
		5, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
			</div>
			')) :
		'') .
'
			
		</div><!--.content-->
		</div><!--.wrapper-->
		
		
		<div class="aside">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/recherche.html\',\'html_5224b221c31d66694b3b8ddc007c8004\',\'\',121,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes-dist/recherche.html','html_5224b221c31d66694b3b8ddc007c8004','',122,$GLOBALS['spip_lang'])) .
'
		</div><!--.aside-->
	</div><!--.main-->
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/recherche.html\',\'html_5224b221c31d66694b3b8ddc007c8004\',\'\',126,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
    
</div><!--.page-->
</body>
</html>');

	return analyse_resultat_skel('html_5224b221c31d66694b3b8ddc007c8004', $Cache, $page, 'squelettes-dist/recherche.html');
}
?>