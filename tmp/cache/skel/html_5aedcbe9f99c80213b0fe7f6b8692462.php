<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 07:54:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.350 ms
//

function html_5aedcbe9f99c80213b0fe7f6b8692462($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
<!-- extra -->';

	return analyse_resultat_skel('html_5aedcbe9f99c80213b0fe7f6b8692462', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
?>