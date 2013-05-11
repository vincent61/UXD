<?php

/*
 * Squelette : squelettes-dist/modeles/article_mots.html
 * Date :      Sat, 27 Apr 2013 18:45:08 GMT
 * Compile :   Wed, 08 May 2013 10:06:50 GMT
 * Boucles :   _mots
 */ 

function BOUCLE_motshtml_898611563cfbb3d3a01a6645d5e94066(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/modeles/article_mots.html','html_898611563cfbb3d3a01a6645d5e94066','_mots',10,$GLOBALS['spip_lang'])
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
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
		');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/modeles/article_mots.html
// Temps de compilation total: 5.972 ms
//

function html_898611563cfbb3d3a01a6645d5e94066($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_motshtml_898611563cfbb3d3a01a6645d5e94066($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="menu"' .
		(($t3 = strval(interdire_scripts(match(entites_html(table_valeur(@$Pile[0], (string)'align', null),true),'left|right'))))!=='' ?
				(' style=\'float:' . $t3 . ';\'') :
				'') .
		'>
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
');

	return analyse_resultat_skel('html_898611563cfbb3d3a01a6645d5e94066', $Cache, $page, 'squelettes-dist/modeles/article_mots.html');
}
?>