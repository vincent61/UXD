<?php

/*
 * Squelette : ../prive/style_prive.css.html
 * Date :      Sat, 27 Apr 2013 18:44:47 GMT
 * Compile :   Wed, 08 May 2013 09:33:12 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/style_prive.css.html
// Temps de compilation total: 1.606 ms
//

function html_52f23b121095a1227362a5b1cc47001b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
vide($Pile['vars'][(string)'fond'] = substr(find_in_theme('style_prive.css.html'),strlen(constant('_DIR_RACINE')),intval('-5'))) .
'
' .
recuperer_fond( table_valeur($Pile["vars"], (string)'fond', null) , array_merge($Pile[0],array()), array('compil'=>array('../prive/style_prive.css.html','html_52f23b121095a1227362a5b1cc47001b','',2,$GLOBALS['spip_lang'])), ''));

	return analyse_resultat_skel('html_52f23b121095a1227362a5b1cc47001b', $Cache, $page, '../prive/style_prive.css.html');
}
?>