<?php

/*
 * Squelette : squelettes-dist/inclure/nav.html
 * Date :      Sat, 27 Apr 2013 18:45:08 GMT
 * Compile :   Fri, 10 May 2013 18:49:02 GMT
 * Boucles :   _nav
 */ 

function BOUCLE_navhtml_71110a4d981e8cd60fa6e0a4839d2215(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_nav';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
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
		array('squelettes-dist/inclure/nav.html','html_71110a4d981e8cd60fa6e0a4839d2215','_nav',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_nav']['total'] = @intval($iter->count());
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<li' .
(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'><a href="' .
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

//
// Fonction principale du squelette squelettes-dist/inclure/nav.html
// Temps de compilation total: 2.281 ms
//

function html_71110a4d981e8cd60fa6e0a4839d2215($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_navhtml_71110a4d981e8cd60fa6e0a4839d2215($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="nav clearfix' .
		((($Numrows['_nav']['total'] == '1'))  ?
				(' ' . ' ' . 'none') :
				'') .
		'" id="nav">
	<ul>
		') . $t1 . '
	</ul>
</div>
') :
		'');

	return analyse_resultat_skel('html_71110a4d981e8cd60fa6e0a4839d2215', $Cache, $page, 'squelettes-dist/inclure/nav.html');
}
?>