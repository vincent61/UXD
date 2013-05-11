<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/inclure/plan-syndic.html
 * Date :      Sat, 27 Apr 2013 18:45:33 GMT
 * Compile :   Fri, 10 May 2013 20:41:36 GMT
 * Boucles :   _sites
 */ 

function BOUCLE_siteshtml_e7f347f933a3a70fee71252a6910037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : null), (($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'syndic';
		$command['id'] = '_sites';
		$command['from'] = array('syndic' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic.nom_site",
		"syndic.id_syndic",
		"syndic.statut",
		"syndic.id_rubrique",
		"syndic.url_site");
		$command['orderby'] = array('syndic.nom_site');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'syndic.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'syndic.statut', "'.?'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/sites/prive/squelettes/inclure/plan-syndic.html','html_e7f347f933a3a70fee71252a6910037d','_sites',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_sites']['compteur_boucle'] = 0;
	$Numrows['_sites']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : _request('debut'.table_valeur($Pile["vars"], (string)'nomp', null));
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] = quete_debut_pagination('id_syndic',$Pile[0]['@id_syndic'] = substr($debut_boucle,1),(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_sites']['total']-1)/((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10)))*((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_sites']['total'] : $debut_boucle+(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10) - 1), $Numrows['_sites']['total'] - 1);
	$Numrows['_sites']['grand_total'] = $Numrows['_sites']['total'];
	$Numrows['_sites']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_sites']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_sites']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_sans_titre');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_sites']['compteur_boucle']++;
		if ($Numrows['_sites']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_sites']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
				<li class="item"><a href="' .
generer_url_entite($Pile[$SP]['id_syndic'],'site') .
'"
							title="' .
(($t1 = strval(_T(objet_info('site','texte_objet'))))!=='' ?
		($t1 . (	' ' .
	$Pile[$SP]['id_syndic'])) :
		'') .
'">' .
(($t1 = strval(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'site',$Pile[$SP]['id_syndic'],$Pile[$SP]['id_rubrique']))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(((($a = couper(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0]),'80')) OR (is_string($a) AND strlen($a))) ? $a : $l1)) .
'</a></li>
			');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/inclure/plan-syndic.html
// Temps de compilation total: 5.143 ms
//

function html_e7f347f933a3a70fee71252a6910037d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'nomp'] = (	'sitrub' .
	@$Pile[0]['id_rubrique'])) .
vide($Pile['vars'][(string)'nb'] = '50') .
(($t1 = BOUCLE_siteshtml_e7f347f933a3a70fee71252a6910037d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="menu">
		<h4>' .
		_T('public|spip|ecrire:sites_web') .
		'</h4>
		' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_sites"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('site','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
		<ul class="menu-items sites syndic">
			') . $t1 . (	'
		</ul>
		' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_sites"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('site','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
	</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_e7f347f933a3a70fee71252a6910037d', $Cache, $page, '../plugins-dist/sites/prive/squelettes/inclure/plan-syndic.html');
}
?>