<?php

/*
 * Squelette : prive/informer_auteur.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 07:54:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/informer_auteur.html
// Temps de compilation total: 0.563 ms
//

function html_640a16ae992aa445da84f9a4f5d5b6f2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("' . 'Content-Type: text/plain' . '"); ?'.'>' .
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?>' .
interdire_scripts(informer_auteur(normaliser_date(@$Pile[0]['date']))));

	return analyse_resultat_skel('html_640a16ae992aa445da84f9a4f5d5b6f2', $Cache, $page, 'prive/informer_auteur.html');
}
?>