<?php

/*
 * Squelette : ../prive/squelettes/navigation/suivi_edito.html
 * Date :      Wed, 17 Apr 2013 16:32:00 GMT
 * Compile :   Fri, 10 May 2013 10:12:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/suivi_edito.html
// Temps de compilation total: 1.688 ms
//

function html_1ccb2889909514cf97d495038c114bca($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir((($t2 = strval(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))))!=='' ?
			((	'
	' .
		interdire_scripts(filtre_balise_img_dist(chemin_image('racine-24.png'),'','cadre-icone')) .
		'
	') . $t2 . '
') :
			''), 'simple etat_base') .
'

	' .
(($t1 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'170','170'))))!=='' ?
		('<div class="logo_du_site">' . $t1 . '</div>') :
		'') .
'
	<div class="descriptif_du_site">' .
interdire_scripts(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])) .
'</div>

	' .
pipeline( 'accueil_informations' , recuperer_fond( 'prive/squelettes/inclure/accueil-information' , array_merge($Pile[0],array()), array('compil'=>array('../prive/squelettes/navigation/suivi_edito.html','html_1ccb2889909514cf97d495038c114bca','',0,$GLOBALS['spip_lang'])), '') ) .
boite_fermer());

	return analyse_resultat_skel('html_1ccb2889909514cf97d495038c114bca', $Cache, $page, '../prive/squelettes/navigation/suivi_edito.html');
}
?>