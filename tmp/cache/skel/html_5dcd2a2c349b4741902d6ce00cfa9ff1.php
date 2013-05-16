<?php

/*
 * Squelette : squelettes-dist/rubrique.html
 * Date :      Wed, 15 May 2013 18:19:35 GMT
 * Compile :   Thu, 16 May 2013 17:35:08 GMT
 * Boucles :   _ariane, _m2, _miniplan, _sous_rubriques, _articles, _documents_joints, _mots, _breves, _syndic, _sites, _principale
 */ 

function BOUCLE_arianehtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	$hierarchie = '';
	while ($id_rubrique = sql_getfetsel("id_parent","spip_rubriques","id_rubrique=" . $id_rubrique,"","","", "", $connect)) { 
		$hierarchie = ",$id_rubrique$hierarchie";
	}
	if (!$hierarchie) return "";
	$hierarchie = substr($hierarchie,1);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ariane';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_ariane',29,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' &gt; <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(couper(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),'80')) .
'</a>');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_m2html_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_miniplan']) ? $Numrows['_miniplan'] : array());
	$t0 = (($t1 = BOUCLE_miniplanhtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
						<ul>
							' . $t1 . '
						</ul>
						') :
		'');
	$Numrows['_miniplan'] = ($save_numrows);
	return $t0;
}


function BOUCLE_miniplanhtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_miniplan';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
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
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_miniplan',63,$GLOBALS['spip_lang'])
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
								<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a>
								' .
BOUCLE_m2html_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP) .
'
							</li>
							');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sous_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
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
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_sous_rubriques',54,$GLOBALS['spip_lang'])
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
						<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a>
	
						
						' .
(($t1 = BOUCLE_miniplanhtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
						<ul>
							' . $t1 . '
						</ul>
						') :
		'') .
'
	
					</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articleshtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_articles']) ? $Pile[0]['debut_articles'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.id_rubrique",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
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
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_articles',38,$GLOBALS['spip_lang'])
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
					<li>
						<strong><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
(($t1 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'], 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'40','*'))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></strong>
						<br /><small>' .
interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
(($t1 = strval(supprimer_tags(recuperer_fond('modeles/lesauteurs', array('objet'=>'article','id_objet' => $Pile[$SP]['id_article'],'id_article' => $Pile[$SP]['id_article']), array('trim'=>true, 'compil'=>array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_articles',44,$GLOBALS['spip_lang'])), ''))))!=='' ?
		((	', ' .
	_T('public|spip|ecrire:par_auteur') .
	' ') . $t1) :
		'') .
'</small>
					</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_documents_jointshtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'documents'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_joints';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+documents.titre AS num",
		"documents.date",
		"documents.id_document",
		"L2.mime_type",
		"documents.extension",
		"documents.titre",
		"documents.fichier",
		"L2.titre AS type_document",
		"documents.taille",
		"documents.descriptif");
		$command['orderby'] = array('num', 'documents.date');
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'documents.mode', "'document'"), 
			array(sql_in('documents.id_document', $doublons[$doublons_index[]= ('documents')], 'NOT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_documents_joints',84,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_document']; // doublons

		$t0 .= (
'
					<li>
						<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))) .
'" type="' .
interdire_scripts($Pile[$SP]['mime_type']) .
'" class="spip_doc' .
(($t1 = strval(interdire_scripts(attribut_html($Pile[$SP]['extension']))))!=='' ?
		(' ' . $t1) :
		'') .
'"><strong class="titre">' .
interdire_scripts(((($a = traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(couper(basename(get_spip_doc($Pile[$SP]['fichier'])),'80')))) .
'</strong>
						<small class="info_document">(' .
(($t1 = strval(interdire_scripts(strtoupper($Pile[$SP]['extension']))))!=='' ?
		((	'<abbr title="' .
	$l1 .
	' ' .
	interdire_scripts($Pile[$SP]['type_document']) .
	'" class="ext">') . $t1 . '</abbr> - ') :
		'') .
(($t1 = strval(interdire_scripts(taille_en_octets($Pile[$SP]['taille']))))!=='' ?
		('<span>' . $t1 . '</span>') :
		'') .
')</small></a>
						' .
(($t1 = strval(interdire_scripts(traiter_doublons_documents($doublons, propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		((	'<div class="descriptif">') . $t1 . '</div>') :
		'') .
'
					</li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_motshtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.id_mot");
		$command['orderby'] = array('mots.titre');
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('rubrique')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_mots',110,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true))) .
'" rel="tag">' .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_breveshtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.date_heure",
		"breves.date_heure AS date",
		"breves.id_breve",
		"breves.titre",
		"breves.lang");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['join'] = array();
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''), 
			array('=', 'breves.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_breves',122,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li>' .
(($t1 = strval(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' &ndash; ') :
		'') .
'<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))) .
'">' .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_syndichtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_syndic';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic_articles.date",
		"syndic_articles.url",
		"syndic_articles.titre");
		$command['orderby'] = array('syndic_articles.date DESC');
		$command['join'] = array('L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '0,3';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('L1.statut','publie,prop','publie',''), 
quete_condition_statut('syndic_articles.statut','publie,prop','publie',''), 
			array('=', 'syndic_articles.id_syndic', sql_quote($Pile[$SP]['id_syndic'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('<', 'TIMESTAMPDIFF(DAY,syndic_articles.date,NOW())', "180"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_syndic',141,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
							<li><a href="' .
vider_url($Pile[$SP]['url']) .
'" class="spip_out">' .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></li>
							');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_siteshtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic.id_syndic",
		"syndic.date",
		"syndic.nom_site",
		"syndic.url_site");
		$command['orderby'] = array('syndic.nom_site');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('syndic.statut','publie,prop','publie',''), 
			array('=', 'syndic.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_sites',134,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li>
						<a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site','','',($connect ? $connect : NULL)) .
'">' .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0]))) .
'</a>
						' .
(($t1 = BOUCLE_syndichtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
						<ul>
							' . $t1 . '
						</ul>
						') :
		'') .
'
					</li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_principalehtml_5dcd2a2c349b4741902d6ce00cfa9ff1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_principale';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre",
		"rubriques.texte",
		"rubriques.descriptif");
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
		array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_principale',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
<title>' .
(($t1 = strval(interdire_scripts(textebrut(couper(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),'80')))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(traiter_doublons_documents($doublons, typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(filtre_introduction_dist($Pile[$SP]['descriptif'], $Pile[$SP]['texte'], intval('150'), $connect)))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))))))!=='' ?
		('<link rel="canonical" href="' . $t1 . '" />') :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/rubrique.html\',\'html_5dcd2a2c349b4741902d6ce00cfa9ff1\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

<link rel="alternate" type="application/rss+xml" title="' .
_T('public|spip|ecrire:syndiquer_rubrique') .
'" href="' .
interdire_scripts(parametre_url(generer_url_public('backend', ''),'id_rubrique',$Pile[$SP]['id_rubrique'])) .
'" />
</head>

<body class="pas_surlignable page_rubrique">
<div class="page">

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/rubrique.html\',\'html_5dcd2a2c349b4741902d6ce00cfa9ff1\',\'\',21,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/rubrique.html\',\'html_5dcd2a2c349b4741902d6ce00cfa9ff1\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

	<div class="main">
		
		<div class="wrapper">
		<div class="content" id="content">
			<p class="arbo"><a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a>' .
BOUCLE_arianehtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = strval(interdire_scripts(couper(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),'80'))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'</p><!--.arbo-->
	
			<div class="cartouche">
				<h1 class="">' .
(($t1 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'40','*'))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</h1>
			</div>
	
			' .
(($t1 = strval(interdire_scripts(traiter_doublons_documents($doublons, propre($Pile[$SP]['texte'], $connect, $Pile[0])))))!=='' ?
		((	'<div class="texte">') . $t1 . '</div>') :
		'') .
'
	
			
			' .
(($t1 = BOUCLE_articleshtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_articles">
				' .
		filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		'_articles',
		isset($Pile[0]['debut_articles'])?$Pile[0]['debut_articles']:intval(_request('debut_articles')),
		10, false, '', '', array()) .
		'
				<ul>
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
		((	'
	
			
			' .
	(($t2 = BOUCLE_sous_rubriqueshtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			((	'
			<div class="menu menu_rubriques">
				<h2>' .
			_T('public|spip|ecrire:sous_rubriques') .
			'</h2>
				<ul class="spip">
					') . $t2 . '
				</ul>
				</div>
			') :
			'') .
	'
	
			'))) .
'
	
	
			
			' .
(($t1 = BOUCLE_documents_jointshtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu" id="documents_joints">
				<h2>' .
		_T('medias:titre_documents_joints') .
		'</h2>
				<ul class="spip">
					') . $t1 . '
				</ul>
			</div><!--#documents_joints-->
			') :
		'') .
'
	
			' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		('<div class="notes"><hr />' . $t1 . '</div>') :
		'') .
'
	
		</div><!--.content-->
		</div><!--.wrapper-->
	
		<div class="aside">
	
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/rubrique.html\',\'html_5dcd2a2c349b4741902d6ce00cfa9ff1\',\'\',106,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_principale',107,$GLOBALS['spip_lang'])) .
'
			
			
			' .
(($t1 = BOUCLE_motshtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu">
				<h2>' .
		_T('public|spip|ecrire:mots_clefs') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
	
			
			' .
(($t1 = BOUCLE_breveshtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_breves">
				<h2>' .
		_T('breves:breves') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
	
			
			' .
(($t1 = BOUCLE_siteshtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu">
				<h2>' .
		_T('public|spip|ecrire:sur_web') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
	
			
			' .
executer_balise_dynamique('FORMULAIRE_SITE',
	array($Pile[$SP]['id_rubrique']),
	array('squelettes-dist/rubrique.html','html_5dcd2a2c349b4741902d6ce00cfa9ff1','_principale',155,$GLOBALS['spip_lang'])) .
'
			
		</div><!--.aside-->
	</div><!--.main-->

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/rubrique.html\',\'html_5dcd2a2c349b4741902d6ce00cfa9ff1\',\'\',160,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

</div><!--.page-->
</body>
</html>
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/rubrique.html
// Temps de compilation total: 95.883 ms
//

function html_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_principalehtml_5dcd2a2c349b4741902d6ce00cfa9ff1($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_5dcd2a2c349b4741902d6ce00cfa9ff1', $Cache, $page, 'squelettes-dist/rubrique.html');
}
?>