<?php

/*
 * Squelette : ../prive/squelettes/inclure/plan-articles.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Fri, 10 May 2013 20:41:36 GMT
 * Boucles :   _articles
 */ 

function BOUCLE_articleshtml_a4bfe930d33837aedb330ce78aa7f9c9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (interdire_scripts(invalideur_session($Cache, statuts_articles_visibles(table_valeur($GLOBALS["visiteur_session"], (string)'statut', null))))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['pagination'] = array((isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : null), (($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.id_article",
		"articles.statut",
		"articles.id_rubrique");
		$command['orderby'] = array('articles.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('articles.statut',sql_quote($in)));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/inclure/plan-articles.html','html_a4bfe930d33837aedb330ce78aa7f9c9','_articles',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_articles']['compteur_boucle'] = 0;
	$Numrows['_articles']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : _request('debut'.table_valeur($Pile["vars"], (string)'nomp', null));
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_articles']['total']-1)/((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10)))*((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_articles']['total'] : $debut_boucle+(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10) - 1), $Numrows['_articles']['total'] - 1);
	$Numrows['_articles']['grand_total'] = $Numrows['_articles']['total'];
	$Numrows['_articles']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_articles']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_articles']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_sans_titre');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_articles']['compteur_boucle']++;
		if ($Numrows['_articles']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_articles']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
			<li class="item"><a href="' .
generer_url_entite($Pile[$SP]['id_article'],'article') .
'"
							title="' .
(($t1 = strval(_T(objet_info('article','texte_objet'))))!=='' ?
		($t1 . (	' ' .
	$Pile[$SP]['id_article'])) :
		'') .
'">' .
(($t1 = strval(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'article',$Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique']))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(((($a = couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) OR (is_string($a) AND strlen($a))) ? $a : $l1)) .
'</a></li>
		');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/plan-articles.html
// Temps de compilation total: 7.884 ms
//

function html_a4bfe930d33837aedb330ce78aa7f9c9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'nomp'] = (	'artrub' .
	@$Pile[0]['id_rubrique'])) .
vide($Pile['vars'][(string)'nb'] = '50') .
(($t1 = BOUCLE_articleshtml_a4bfe930d33837aedb330ce78aa7f9c9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="menu">
	<h4>' .
		_T('public|spip|ecrire:articles') .
		'</h4>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('article','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
	<ul class="menu-items articles">
		') . $t1 . (	'
	</ul>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_articles"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('article','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
	</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_a4bfe930d33837aedb330ce78aa7f9c9', $Cache, $page, '../prive/squelettes/inclure/plan-articles.html');
}
?>