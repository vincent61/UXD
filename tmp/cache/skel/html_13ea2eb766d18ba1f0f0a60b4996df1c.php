<?php

/*
 * Squelette : ../prive/squelettes/contenu/rubrique_edit.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 17:32:23 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/rubrique_edit.html
// Temps de compilation total: 0.515 ms
//

function html_13ea2eb766d18ba1f0f0a60b4996df1c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/contenu/objet_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette('rubrique') . ',
	\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/rubrique_edit.html\',\'html_13ea2eb766d18ba1f0f0a60b4996df1c\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_13ea2eb766d18ba1f0f0a60b4996df1c', $Cache, $page, '../prive/squelettes/contenu/rubrique_edit.html');
}
?>