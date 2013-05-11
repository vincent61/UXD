<?php

/*
 * Squelette : ../prive/squelettes/contenu/plan.html
 * Date :      Sat, 27 Apr 2013 18:44:57 GMT
 * Compile :   Fri, 10 May 2013 20:41:36 GMT
 * Boucles :   _rub
 */ 

function BOUCLE_rubhtml_62ec308a7f5d55c3ca782d4a2a7d1296(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.id_parent",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/plan.html','html_62ec308a7f5d55c3ca782d4a2a7d1296','_rub',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
boite_ouvrir('', 'note') .
'<a class=\'annule_filtre' .
(($t1 = strval(interdire_scripts(((eval('return '.'_AJAX'.';')) ?' ' :''))))!=='' ?
		($t1 . 'ajax') :
		'') .
'\'
			 href=\'' .
parametre_url(self(),'id_rubrique','') .
'\' title="' .
attribut_html(_T('public|spip|ecrire:lien_tout_afficher')) .
'">' .
interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('fermer-16.png')),'alt',_T('public|spip|ecrire:lien_tout_afficher'))) .
'</a>
		' .
_T('public|spip|ecrire:entree_interieur_rubrique') .
'
		<h3><a href="' .
generer_url_entite($Pile[$SP]['id_rubrique'],'rubrique') .
'">' .
interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))) .
'</a></h3>
	' .
boite_fermer() .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plan-rubriques') . ', array(\'id_rubrique\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true))) . ',
	\'id_parent\' => ' . argumenter_squelette($Pile[$SP]['id_parent']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/contenu/plan.html\',\'html_62ec308a7f5d55c3ca782d4a2a7d1296\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/plan.html
// Temps de compilation total: 15.167 ms
//

function html_62ec308a7f5d55c3ca782d4a2a7d1296($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_rubhtml_62ec308a7f5d55c3ca782d4a2a7d1296($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'

	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plan-rubriques') . ', array(\'id_parent\' => ' . argumenter_squelette('0') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/contenu/plan.html\',\'html_62ec308a7f5d55c3ca782d4a2a7d1296\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
'))) .
'
<a id="reloadmain" href="' .
self() .
'" class="ajax none">reload</a>');

	return analyse_resultat_skel('html_62ec308a7f5d55c3ca782d4a2a7d1296', $Cache, $page, '../prive/squelettes/contenu/plan.html');
}
?>