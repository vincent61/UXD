<?php

/*
 * Squelette : ../prive/objets/liste/articles-memerubrique.html
 * Date :      Wed, 17 Apr 2013 16:32:00 GMT
 * Compile :   Fri, 10 May 2013 10:13:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/liste/articles-memerubrique.html
// Temps de compilation total: 0.320 ms
//

function html_41a0f309a9d21372a17f52c62898e8a9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'id_article\' => ' . argumenter_squelette('') . ',
	\'pagination\' => ' . argumenter_squelette('page') . ',
	\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_meme_rubrique')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/objets/liste/articles-memerubrique.html\',\'html_41a0f309a9d21372a17f52c62898e8a9\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_41a0f309a9d21372a17f52c62898e8a9', $Cache, $page, '../prive/objets/liste/articles-memerubrique.html');
}
?>