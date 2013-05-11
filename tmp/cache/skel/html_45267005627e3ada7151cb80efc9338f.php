<?php

/*
 * Squelette : ../plugins-dist/breves/prive/squelettes/inclure/plan-breves.html
 * Date :      Sat, 27 Apr 2013 18:45:29 GMT
 * Compile :   Fri, 10 May 2013 20:41:36 GMT
 * Boucles :   _breves
 */ 

function BOUCLE_breveshtml_45267005627e3ada7151cb80efc9338f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : null), (($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.date_heure",
		"breves.id_breve",
		"breves.statut",
		"breves.id_rubrique",
		"breves.titre",
		"breves.lang");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'breves.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'breves.statut', "'.?'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/breves/prive/squelettes/inclure/plan-breves.html','html_45267005627e3ada7151cb80efc9338f','_breves',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_breves']['compteur_boucle'] = 0;
	$Numrows['_breves']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]) ? $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] : _request('debut'.table_valeur($Pile["vars"], (string)'nomp', null));
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)] = quete_debut_pagination('id_breve',$Pile[0]['@id_breve'] = substr($debut_boucle,1),(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_breves']['total']-1)/((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10)))*((($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_breves']['total'] : $debut_boucle+(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10) - 1), $Numrows['_breves']['total'] - 1);
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
			<li class="item"><a href="' .
generer_url_entite($Pile[$SP]['id_breve'],'breve') .
'"
						title="' .
(($t1 = strval(_T(objet_info('breve','texte_objet'))))!=='' ?
		($t1 . (	' ' .
	$Pile[$SP]['id_breve'])) :
		'') .
'">' .
(($t1 = strval(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'breve',$Pile[$SP]['id_breve'],$Pile[$SP]['id_rubrique']))))!=='' ?
		($t1 . ' ') :
		'') .
interdire_scripts(((($a = couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</a></li>
		');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/breves/prive/squelettes/inclure/plan-breves.html
// Temps de compilation total: 5.421 ms
//

function html_45267005627e3ada7151cb80efc9338f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'nomp'] = (	'sitrub' .
	@$Pile[0]['id_rubrique'])) .
vide($Pile['vars'][(string)'nb'] = '50') .
(($t1 = BOUCLE_breveshtml_45267005627e3ada7151cb80efc9338f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="menu">
	<h4>' .
		_T('breves:breves') .
		'</h4>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_breves"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('breve','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
	<ul class="menu-items breves">
		') . $t1 . (	'
	</ul>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_breves"]["grand_total"],
 		table_valeur($Pile["vars"], (string)'nomp', null),
		isset($Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)])?$Pile[0]['debut'.table_valeur($Pile["vars"], (string)'nomp', null)]:intval(_request('debut'.table_valeur($Pile["vars"], (string)'nomp', null))),
		(($a = intval(table_valeur($Pile["vars"], (string)'nb', null))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				((	'<p class="pagination">' .
			(($t4 = strval(_T(objet_info('breve','texte_objets'))))!=='' ?
					('<em>' . $t4 . '</em>') :
					'')) . $t3 . '</p>') :
				'') .
		'
	</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_45267005627e3ada7151cb80efc9338f', $Cache, $page, '../plugins-dist/breves/prive/squelettes/inclure/plan-breves.html');
}
?>