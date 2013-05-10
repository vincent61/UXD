<?php

/*
 * Squelette : ../prive/squelettes/contenu/suivi_edito.html
 * Date :      Wed, 17 Apr 2013 16:32:00 GMT
 * Compile :   Fri, 10 May 2013 10:12:54 GMT
 * Boucles :   _haspostdate
 */ 

function BOUCLE_haspostdatehtml_6f44bb8fee5e53583e390021acff1fb3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_haspostdate';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'articles.statut', "'publie'"));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/suivi_edito.html','html_6f44bb8fee5e53583e390021acff1fb3','_haspostdate',3,$GLOBALS['spip_lang'])
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
vide($Pile['vars'][(string)'recentwhere'] = (($t2 = strval(quete_condition_postdates('date')))!=='' ?
			('NOT (' . $t2 . ')') :
			'')) .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_article_a_paraitre')) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'date_sens\' => ' . argumenter_squelette('1') . ',
	\'nb\' => ' . argumenter_squelette('5') . ',
	\'where\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'recentwhere', null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/suivi_edito.html\',\'html_6f44bb8fee5e53583e390021acff1fb3\',\'\',5,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
	' .
vide($Pile['vars'][(string)'recentwhere'] = quete_condition_postdates('date')) .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/suivi_edito.html
// Temps de compilation total: 4.059 ms
//

function html_6f44bb8fee5e53583e390021acff1fb3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:info_suivi_activite') .
'</h1>
' .
vide($Pile['vars'][(string)'recentwhere'] = '') .
BOUCLE_haspostdatehtml_6f44bb8fee5e53583e390021acff1fb3($Cache, $Pile, $doublons, $Numrows, $SP) .
'


' .
(($t1 = strval(pipeline( 'accueil_encours' , recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_articles_proposes') ,
	'statut' => 'prop' ,
	'id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'par' => 'date' )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/squelettes/contenu/suivi_edito.html','html_6f44bb8fee5e53583e390021acff1fb3','',0,$GLOBALS['spip_lang'])), '') )))!=='' ?
		((	'
	' .
	boite_ouvrir(_T('public|spip|ecrire:texte_en_cours_validation'), 'basic highlight') .
	'
	') . $t1 . (	'

	' .
	bouton_spip_rss('a_suivre') .
	'

	' .
	boite_fermer() .
	'
')) :
		'') .
'


' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:articles_recents')) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'where\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'recentwhere', null)) . ',
	\'nb\' => ' . argumenter_squelette('5') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/suivi_edito.html\',\'html_6f44bb8fee5e53583e390021acff1fb3\',\'\',13,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

');

	return analyse_resultat_skel('html_6f44bb8fee5e53583e390021acff1fb3', $Cache, $page, '../prive/squelettes/contenu/suivi_edito.html');
}
?>