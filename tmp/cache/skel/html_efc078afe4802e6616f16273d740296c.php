<?php

/*
 * Squelette : ../prive/objets/contenu/auteur.html
 * Date :      Sat, 27 Apr 2013 18:44:58 GMT
 * Compile :   Wed, 08 May 2013 13:37:17 GMT
 * Boucles :   _afficher_contenu
 */ 

function BOUCLE_afficher_contenuhtml_efc078afe4802e6616f16273d740296c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_afficher_contenu';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.nom",
		"auteurs.lang",
		"auteurs.email",
		"auteurs.nom_site",
		"auteurs.url_site",
		"auteurs.bio",
		"auteurs.pgp");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'auteurs.id_auteur', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)),'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('auteurs.statut',sql_quote($in)) : 
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'],'','varchar(255) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/contenu/auteur.html','html_efc078afe4802e6616f16273d740296c','_afficher_contenu',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_nom');
	$l2 = _T('public|spip|ecrire:email_2');
	$l3 = _T('public|spip|ecrire:info_site_2');
	$l4 = _T('public|spip|ecrire:info_site');
	$l5 = _T('public|spip|ecrire:info_bio');
	$l6 = _T('public|spip|ecrire:info_notes');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="champ contenu_nom' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['nom']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l1 .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'nom\'>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</div>
</div>
<div class="champ contenu_email' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['email']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l2 .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'email\'><a href=\'mailto:' .
interdire_scripts(htmlspecialchars($Pile[$SP]['email'])) .
'\'>' .
interdire_scripts($Pile[$SP]['email']) .
'</a></div>
</div>
<div class="champ contenu_nom_site' .
(($t1 = strval(interdire_scripts((strlen(((($a = $Pile[$SP]['nom_site']) OR (is_string($a) AND strlen($a))) ? $a : $Pile[$SP]['url_site'])) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l3 .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'nom_site\'>' .
(($t1 = strval(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))!=='' ?
		('<a href=\'' . $t1 . '\'>') :
		'') .
interdire_scripts(((($a = typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : $l4)) .
((calculer_url($Pile[$SP]['url_site'],'','url', $connect))  ?
		(' ' . '</a>') :
		'') .
'</div>
</div>
<div class="champ contenu_bio' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['bio']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l5 .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'bio\'>' .
interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['bio'], $connect, $Pile[0]),'500','0'))) .
'</div>
</div>
<div class="champ contenu_pgp' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['pgp']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>PGP</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'pgp\'>' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',$Pile[$SP]['pgp'],'500','0')))))!=='' ?
		('<code>' . $t1 . '</code>') :
		'') .
'</div>
</div>
' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		((	'<div class="champ contenu_notes">
<div class=\'label\'>' .
	$l6 .
	'</div>
<div dir=\'' .
	lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
	'\' class=\'' .
	'notes\'>') . $t1 . '</div>
</div>') :
		'') .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/contenu/auteur.html
// Temps de compilation total: 6.350 ms
//

function html_efc078afe4802e6616f16273d740296c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_afficher_contenuhtml_efc078afe4802e6616f16273d740296c($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_efc078afe4802e6616f16273d740296c', $Cache, $page, '../prive/objets/contenu/auteur.html');
}
?>