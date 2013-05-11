<?php

/*
 * Squelette : ../prive/squelettes/hierarchie/auteur.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 13:37:17 GMT
 * Boucles :   _ariane
 */ 

function BOUCLE_arianehtml_eb69744a61703f4f42a0501bfca4aaba(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_ariane';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.statut",
		"auteurs.id_auteur",
		"auteurs.nom");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/hierarchie/auteur.html','html_eb69744a61703f4f42a0501bfca4aaba','_ariane',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_auteurs');
	$l2 = _T('public|spip|ecrire:info_visiteurs');
	$l3 = _T('ecrire:info_sans_titre');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['statut'],auteurs_lister_statuts('redacteurs'))) ?' ' :''))))!=='' ?
		($t1 . (	'
<a href="' .
	generer_url_ecrire('auteurs') .
	'">' .
	$l1 .
	'</a>
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['statut'],auteurs_lister_statuts('redacteurs'))) ?'' :' '))))!=='' ?
		($t1 . (	'
<a href="' .
	generer_url_ecrire('visiteurs') .
	'">' .
	$l2 .
	'</a>
')) :
		'') .
'
&gt; ' .
lien_ou_expose(generer_url_entite($Pile[$SP]['id_auteur'],'auteur'),interdire_scripts(((($a = couper(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]),'80')) OR (is_string($a) AND strlen($a))) ? $a : $l3)),'1') .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/hierarchie/auteur.html
// Temps de compilation total: 5.734 ms
//

function html_eb69744a61703f4f42a0501bfca4aaba($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_arianehtml_eb69744a61703f4f42a0501bfca4aaba($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
<a href="' .
	generer_url_ecrire('auteurs') .
	'">' .
	_T('public|spip|ecrire:info_auteurs') .
	'</a>
' .
	(($t2 = strval(interdire_scripts(((match(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true),'_edit$')) ?' ' :''))))!=='' ?
			($t2 . (	'
&gt; <strong>' .
		_T('ecrire:item_nouvel_auteur') .
		'</strong>
')) :
			'') .
	'
')));

	return analyse_resultat_skel('html_eb69744a61703f4f42a0501bfca4aaba', $Cache, $page, '../prive/squelettes/hierarchie/auteur.html');
}
?>