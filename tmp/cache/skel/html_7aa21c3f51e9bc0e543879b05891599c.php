<?php

/*
 * Squelette : squelettes-dist/inclure/documents.html
 * Date :      Sat, 27 Apr 2013 18:45:08 GMT
 * Compile :   Wed, 08 May 2013 10:06:50 GMT
 * Boucles :   _documents_portfolio, _afficher_document, _documents_joints, _documents_decompte
 */ 

function BOUCLE_documents_portfoliohtml_7aa21c3f51e9bc0e543879b05891599c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	$in = array();
	$in[]= 'png';
	$in[]= 'jpg';
	$in[]= 'gif';

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'documents'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_portfolio';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+documents.titre AS num",
		"documents.date",
		"documents.id_document",
		"L2.mime_type",
		"documents.titre",
		"documents.fichier");
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
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.extension',sql_quote($in)), 
			array('=', 'L1.vu', "'non'"), 
			array(sql_in('documents.id_document', $doublons[$doublons_index[]= ('documents')], 'NOT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_7aa21c3f51e9bc0e543879b05891599c','_documents_portfolio',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_document']; // doublons

		$t0 .= (($t1 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))!=='' ?
		('
		<li><a href="' . $t1 . (	'" type="' .
	interdire_scripts($Pile[$SP]['mime_type']) .
	'" onclick="location.href=\'' .
	ancre_url(parametre_url(url_absolue(vider_url(urlencode_1738(generer_url_entite(@$Pile[0]['id_article'], 'article', '', '', true)))),'id_document',$Pile[$SP]['id_document']),'documents_portfolio') .
	'\';return false;"' .
	(($t2 = strval(interdire_scripts(@$Pile[0]['exposer'])))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts(couper(attribut_html(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))),'80'))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>' .
	interdire_scripts(inserer_attribut(inserer_attribut(filtrer('image_graver', filtrer('image_recadre',filtrer('image_passe_partout',get_spip_doc($Pile[$SP]['fichier']),'90','90'),'90','90')),'class','spip_logos'),'alt',interdire_scripts(couper(attribut_html(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))),'80')))) .
	'</a></li>
		')) :
		'');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_afficher_documenthtml_7aa21c3f51e9bc0e543879b05891599c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'png';
	$in[]= 'jpg';
	$in[]= 'gif';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_afficher_document';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.id_document");
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in) OR sql_quote($in)==="''") ? 0 : ('FIELD(documents.extension,' . sql_quote($in) . ')')));
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'],'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.extension',sql_quote($in)));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_7aa21c3f51e9bc0e543879b05891599c','_afficher_document',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
filtrer('image_graver',filtrer('image_reduire',
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/emb', array('lien' => vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))) ,'lang' => $GLOBALS["spip_lang"] ,'id_document'=>$Pile[$SP]['id_document'],'id'=>$Pile[$SP]['id_document'],'recurs'=>(++$recurs)), array('compil'=>array('squelettes-dist/inclure/documents.html','html_7aa21c3f51e9bc0e543879b05891599c','_afficher_document',25,$GLOBALS['spip_lang']), 'trim'=>true), ''))
,'500','*')) .
'
');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_documents_jointshtml_7aa21c3f51e9bc0e543879b05891599c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'gif';
	$in[]= 'jpg';
	$in[]= 'png';
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
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), sql_in('documents.extension',sql_quote($in),'NOT'), 
			array('=', 'L1.vu', "'non'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_7aa21c3f51e9bc0e543879b05891599c','_documents_joints',42,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))!=='' ?
		('
		<li>
			<a href="' . $t1 . (	'" type="' .
	interdire_scripts($Pile[$SP]['mime_type']) .
	'" class="spip_doc' .
	(($t2 = strval(interdire_scripts(attribut_html($Pile[$SP]['extension']))))!=='' ?
			(' ' . $t2) :
			'') .
	'"><strong class="titre">' .
	interdire_scripts(((($a = traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(couper(basename(get_spip_doc($Pile[$SP]['fichier'])),'80')))) .
	'</strong>
			<small class="info_document">(' .
	(($t2 = strval(interdire_scripts(strtoupper($Pile[$SP]['extension']))))!=='' ?
			((	'<abbr title="' .
		$l1 .
		' ' .
		interdire_scripts($Pile[$SP]['type_document']) .
		'" class="ext">') . $t2 . '</abbr> - ') :
			'') .
	(($t2 = strval(interdire_scripts(taille_en_octets($Pile[$SP]['taille']))))!=='' ?
			('<span>' . $t2 . '</span>') :
			'') .
	')</small></a>
			' .
	(($t2 = strval(interdire_scripts(traiter_doublons_documents($doublons, propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
			((	'<div class="descriptif">') . $t2 . '</div>') :
			'') .
	'
		')) :
		'') .
'</li>
		');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_documents_decomptehtml_7aa21c3f51e9bc0e543879b05891599c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'gif';
	$in[]= 'jpg';
	$in[]= 'png';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_decompte';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_objet','id_document','L2.objet='.sql_quote('document')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'documents.mode', "'document'"), 
			array('=', 'L2.texte', "''"), sql_in('documents.extension',sql_quote($in),'NOT'), 
			array('=', 'L1.vu', "'non'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_7aa21c3f51e9bc0e543879b05891599c','_documents_decompte',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_documents_decompte']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($Numrows['_documents_decompte']['total'] == '1') ? trim(recuperer_fond( 'modeles/emb' , array('id_document' => $Pile[$SP]['id_document'] ), array('compil'=>array('squelettes-dist/inclure/documents.html','html_7aa21c3f51e9bc0e543879b05891599c','_documents_decompte',35,$GLOBALS['spip_lang'])), '')):''));
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inclure/documents.html
// Temps de compilation total: 34.746 ms
//

function html_7aa21c3f51e9bc0e543879b05891599c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_documents_portfoliohtml_7aa21c3f51e9bc0e543879b05891599c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="bloc clearfix" id="documents_portfolio">
	<h2>' .
		_T('medias:info_portfolio') .
		'</h2>
	<ul>
		') . $t1 . '
	</ul>
</div><!--#documents_portfolio-->
') :
		'') .
'


' .
BOUCLE_afficher_documenthtml_7aa21c3f51e9bc0e543879b05891599c($Cache, $Pile, $doublons, $Numrows, $SP) .
'



' .
(($t1 = BOUCLE_documents_decomptehtml_7aa21c3f51e9bc0e543879b05891599c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'



' .
	(($t2 = BOUCLE_documents_jointshtml_7aa21c3f51e9bc0e543879b05891599c($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			((	'
<div class="menu" id="documents_joints">
	<h2>' .
			_T('medias:titre_documents_joints') .
			'</h2>
	<ul class="spip">
		') . $t2 . '
	</ul>
</div><!--#documents_joints-->
') :
			'') .
	'

'))));

	return analyse_resultat_skel('html_7aa21c3f51e9bc0e543879b05891599c', $Cache, $page, 'squelettes-dist/inclure/documents.html');
}
?>