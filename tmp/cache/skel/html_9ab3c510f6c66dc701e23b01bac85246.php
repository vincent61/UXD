<?php

/*
 * Squelette : prive/formulaires/inc-logo_auteur.html
 * Date :      Sat, 27 Apr 2013 18:44:49 GMT
 * Compile :   Wed, 08 May 2013 09:33:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/inc-logo_auteur.html
// Temps de compilation total: 2.054 ms
//

function html_9ab3c510f6c66dc701e23b01bac85246($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("' . (	'Content-type:text/html;charset=' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'charset', null),true))) . '"); ?'.'>' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_auteur', 'ON', @$Pile[0]['id_auteur'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'40','*')) .
'
');

	return analyse_resultat_skel('html_9ab3c510f6c66dc701e23b01bac85246', $Cache, $page, 'prive/formulaires/inc-logo_auteur.html');
}
?>