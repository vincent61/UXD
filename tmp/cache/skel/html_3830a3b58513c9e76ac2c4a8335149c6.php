<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Sat, 27 Apr 2013 18:44:55 GMT
 * Compile :   Wed, 08 May 2013 09:33:15 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.165 ms
//

function html_3830a3b58513c9e76ac2c4a8335149c6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_3830a3b58513c9e76ac2c4a8335149c6', $Cache, $page, '../prive/squelettes/top/dist.html');
}
?>