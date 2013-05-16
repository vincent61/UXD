<?php

/*
 * Squelette : squelettes-dist/inclure/header.html
 * Date :      Wed, 15 May 2013 18:19:35 GMT
 * Compile :   Thu, 16 May 2013 17:33:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes-dist/inclure/header.html
// Temps de compilation total: 3.303 ms
//

function html_52dc69e75e354d1386d61f031577ac78($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="clearfix header">
	' .
interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'home', null), 'non'),true) == 'oui') ? (	'<h1 id="logo">' .
	(($t2 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'40','*'))))!=='' ?
			($t2 . ' ') :
			'') .
	interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
	'</h1>
	'):(	'<strong class="h1" id="logo"><a rel="start home" href="' .
	htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'/" title="' .
	_T('public|spip|ecrire:accueil_site') .
	'">' .
	(($t2 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'40','*'))))!=='' ?
			($t2 . ' ') :
			'') .
	interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
	'</a></strong>
	'))) .
(($t1 = strval(interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0]))))!=='' ?
		('<p id="slogan">' . $t1 . '</p>') :
		'') .
'
</div>');

	return analyse_resultat_skel('html_52dc69e75e354d1386d61f031577ac78', $Cache, $page, 'squelettes-dist/inclure/header.html');
}
?>