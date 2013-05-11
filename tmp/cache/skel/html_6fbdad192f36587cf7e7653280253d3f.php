<?php

/*
 * Squelette : ../prive/squelettes/inclure/plan-rubriques.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Fri, 10 May 2013 20:41:36 GMT
 * Boucles :   _objets, _rubriques
 */ 

function BOUCLE_objetshtml_6fbdad192f36587cf7e7653280253d3f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_tables_objets_sql(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"env",
		"ajax");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', "'spip_rubriques'")));
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
		array('../prive/squelettes/inclure/plan-rubriques.html','html_6fbdad192f36587cf7e7653280253d3f','_objets',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
(($t1 = strval(interdire_scripts(((table_valeur(safehtml(table_valeur($Pile[$SP]['valeur'], 'field')),'id_rubrique')) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	vide($Pile['vars'][(string)'fond'] = concat('prive/squelettes/inclure/plan-',interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'table_objet'))))) .
	((trouver_fond(table_valeur($Pile["vars"], (string)'fond', null)))  ?
			(' ' . (	'
						' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'fond', null)) . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP-1]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/inclure/plan-rubriques.html\',\'html_6fbdad192f36587cf7e7653280253d3f\',\'\',17,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette((isset($Pile[$SP]['ajax'])?$Pile[$SP]['ajax']:(@$Pile[0]['ajax']))) . '))?$v:true), _request("connect"));
?'.'>
					')) :
			'') .
	'
				')) :
		''));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriqueshtml_6fbdad192f36587cf7e7653280253d3f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['pagination'] = array((isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : null), (($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.statut",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'rubriques.id_parent', sql_quote($Pile[0]['id_parent'],'','bigint(21) NOT NULL DEFAULT \'0\'')), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('rubriques.id_rubrique',sql_quote($in)) : 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')))), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/inclure/plan-rubriques.html','html_6fbdad192f36587cf7e7653280253d3f','_rubriques',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_rubriques']['compteur_boucle'] = 0;
	$Numrows['_rubriques']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : _request('debut'.table_valeur($Pile["vars"], (string)'nomp', null));
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] = quete_debut_pagination('id_rubrique',$Pile[0]['@id_rubrique'] = substr($debut_boucle,1),(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_rubriques']['total']-1)/((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10)))*((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_rubriques']['total'] : $debut_boucle+(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10) - 1), $Numrows['_rubriques']['total'] - 1);
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
			<li class="item">
				<a href="' .
parametre_url(self(),'id_rubrique',$Pile[$SP]['id_rubrique']) .
'"
				title="' .
(($t1 = strval(_T(objet_info('rubrique','texte_objet'))))!=='' ?
		($t1 . (	' ' .
	$Pile[$SP]['id_rubrique'])) :
		'') .
'"
				onclick="jQuery(\'#reloadmain\').attr(\'href\',this.href).followLink();return false;"
				><strong>' .
(($t1 = strval(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'rubrique'))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(((($a = couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'100')) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</strong></a>

				' .
BOUCLE_objetshtml_6fbdad192f36587cf7e7653280253d3f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plan-rubriques') . ', array_merge('.var_export($Pile[0],1).',array(\'id_parent\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'id_rubrique\' => ' . argumenter_squelette('') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/inclure/plan-rubriques.html\',\'html_6fbdad192f36587cf7e7653280253d3f\',\'\',20,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
			</li>
		');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/plan-rubriques.html
// Temps de compilation total: 8.126 ms
//

function html_6fbdad192f36587cf7e7653280253d3f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'nomp'] = (	'rubrub' .
	@$Pile[0]['id_rubrique'])) .
vide($Pile['vars'][(string)'nb'] = '50') .
(($t1 = BOUCLE_rubriqueshtml_6fbdad192f36587cf7e7653280253d3f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_rubriques"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('rubrique','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
	<ul class="menu-items rubriques">
		') . $t1 . (	'
	</ul>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_rubriques"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('rubrique','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_6fbdad192f36587cf7e7653280253d3f', $Cache, $page, '../prive/squelettes/inclure/plan-rubriques.html');
}
?>