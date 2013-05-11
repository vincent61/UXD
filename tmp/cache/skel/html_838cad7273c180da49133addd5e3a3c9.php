<?php

/*
 * Squelette : ../prive/squelettes/navigation/admin_tech.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 16:41:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/admin_tech.html
// Temps de compilation total: 0.417 ms
//

function html_838cad7273c180da49133addd5e3a3c9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir('', 'info') .
'<p>
' .
_T('public|spip|ecrire:info_gauche_admin_tech') .
'
</p>
' .
boite_fermer());

	return analyse_resultat_skel('html_838cad7273c180da49133addd5e3a3c9', $Cache, $page, '../prive/squelettes/navigation/admin_tech.html');
}
?>