<?php

/*
 * Squelette : ../prive/squelettes/navigation/auteur.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 13:37:17 GMT
 * Boucles :   _nav
 */ 

function BOUCLE_navhtml_7410a50c6af0d58581105fb916a3b2ea(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'auteur'));

	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_nav';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'auteurs.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('auteurs.statut',sql_quote($in)) : 
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'],'','varchar(255) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/navigation/auteur.html','html_7410a50c6af0d58581105fb916a3b2ea','_nav',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir('', 'info') .
pipeline( 'boite_infos' , array('data' => '', 'args' => array('type' => 'auteur', 'id' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)))) ) .
boite_fermer() .
'

<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_EDITER_LOGO',
	array('auteur',$Pile[$SP]['id_auteur'],'',@serialize($Pile[0])),
	array('../prive/squelettes/navigation/auteur.html','html_7410a50c6af0d58581105fb916a3b2ea','_nav',5,$GLOBALS['spip_lang'])) .
'</div>

');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/navigation/auteur.html
// Temps de compilation total: 14.401 ms
//

function html_7410a50c6af0d58581105fb916a3b2ea($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_navhtml_7410a50c6af0d58581105fb916a3b2ea($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'auteur_edit')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/auteur_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/auteur.html\',\'html_7410a50c6af0d58581105fb916a3b2ea\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
')));

	return analyse_resultat_skel('html_7410a50c6af0d58581105fb916a3b2ea', $Cache, $page, '../prive/squelettes/navigation/auteur.html');
}
?>