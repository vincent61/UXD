<?php

/*
 * Squelette : ../prive/squelettes/contenu/aide.html
 * Date :      Sat, 27 Apr 2013 18:44:57 GMT
 * Compile :   Wed, 08 May 2013 13:18:02 GMT
 * Boucles :   _menu
 */ 

function BOUCLE_menuhtml_5705b1215eadbf5ad6725bee5857f154(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(interdire_scripts(aide_menu(entites_html(table_valeur(@$Pile[0], (string)'aide', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menu';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/contenu/aide.html','html_5705b1215eadbf5ad6725bee5857f154','_menu',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts((((safehtml(table_valeur($Pile[$SP]['valeur'], '1')) == '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	table_valeur($Pile["vars"], (string)'close', null) .
	'<div class=\'liste\'><h3>' .
	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], '2'))) .
	'</h3>
			<ul class="liste-items">
			' .
	vide($Pile['vars'][(string)'close'] = '</ul></div>'))) :
		'') .
(($t1 = strval(interdire_scripts((((safehtml(table_valeur($Pile[$SP]['valeur'], '1')) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	(((table_valeur($Pile["vars"], (string)'next', null) == 'next'))  ?
			(' ' . vide($Pile['vars'][(string)'next'] = interdire_scripts(safehtml($Pile[$SP]['valeur'])))) :
			'') .
	'
			<li class="item' .
	(($t2 = strval(interdire_scripts((((safehtml(table_valeur($Pile[$SP]['valeur'], '2')) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'aide', null),true)))) ?' ' :''))))!=='' ?
			($t2 . (	'on' .
		vide($Pile['vars'][(string)'next'] = 'next'))) :
			'') .
	'"><a
							onclick="jQuery(this).closest(\'#cboxLoadedContent\').scrollTop(0);"
							href=\'' .
	parametre_url(self(),'aide',interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], '2')))) .
	'#contenu-aide\' class="ajax">' .
	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], '3'))) .
	'</a></li>
			' .
	(!(table_valeur($Pile["vars"], (string)'next', null))  ?
			(' ' . vide($Pile['vars'][(string)'prev'] = interdire_scripts(safehtml($Pile[$SP]['valeur'])))) :
			'') .
	'
		')) :
		'') .
'
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/aide.html
// Temps de compilation total: 18.310 ms
//

function html_5705b1215eadbf5ad6725bee5857f154($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div style="float:left;width:200px;">
	' .
vide($Pile['vars'][(string)'close'] = '') .
vide($Pile['vars'][(string)'prev'] = '') .
vide($Pile['vars'][(string)'next'] = '') .
'<ul>
	' .
BOUCLE_menuhtml_5705b1215eadbf5ad6725bee5857f154($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		' .
table_valeur($Pile["vars"], (string)'close', null) .
'</ul>
</div>
' .
(!(table_valeur($Pile["vars"], (string)'next', null))  ?
		(' ' . vide($Pile['vars'][(string)'prev'] = '')) :
		'') .
'
<div class="contenu-aide" id="contenu-aide" lang="' .
interdire_scripts(aide_changer_langue(eval('return '.'_request(\'var_lang_r\')'.';'),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang_r', null),true)))) .
'" style="position:relative;margin-left:220px;">
	' .
interdire_scripts(((($a = filtrer('image_graver', filtrer('image_reduire',aide_extrait_section(entites_html(table_valeur(@$Pile[0], (string)'aide', null),true)),'500'))) OR (is_string($a) AND strlen($a))) ? $a : (	(($t2 = strval(interdire_scripts(filtre_balise_img_dist(chemin_image('logo-spip.gif'),'SPIP'))))!=='' ?
			('<div style=\'text-align:center;\'>
			' . $t2 . (	'
			<div style=\'font-variant: small-caps;\'>
			Syst&egrave;me de publication pour l\'Internet
			</div>
		</div>
		<p>
		' .
		vide($Pile['vars'][(string)'doc'] = interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',interdire_scripts(table_valeur(eval('return '.'$GLOBALS'.';'),'spip_lang'))))) .
		_T('public|spip|ecrire:info_copyright_doc', array('spipnet' => table_valeur($Pile["vars"], (string)'doc', null),
'spipnet_affiche' => table_valeur($Pile["vars"], (string)'doc', null))) .
		'
		</p>')) :
			'') .
	'
	'))) .
'
	<p>
		' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'prev', null),'3')))!=='' ?
		((	'<a onclick="jQuery(this).closest(\'#cboxLoadedContent\').scrollTop(0);"
				href="' .
	parametre_url(self(),'aide',table_valeur(table_valeur($Pile["vars"], (string)'prev', null),'2')) .
	'#contenu-aide" class="ajax">&lt; ') . $t1 . '</a> | ') :
		'') .
'
		' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'next', null),'3')))!=='' ?
		((	'<a onclick="jQuery(this).closest(\'#cboxLoadedContent\').scrollTop(0);"
				href="' .
	parametre_url(self(),'aide',table_valeur(table_valeur($Pile["vars"], (string)'next', null),'2')) .
	'#contenu-aide" class="ajax">') . $t1 . ' &gt;</a>') :
		'') .
'
	</p>
</div>


');

	return analyse_resultat_skel('html_5705b1215eadbf5ad6725bee5857f154', $Cache, $page, '../prive/squelettes/contenu/aide.html');
}
?>