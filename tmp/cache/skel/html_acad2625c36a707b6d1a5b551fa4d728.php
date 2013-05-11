<?php

/*
 * Squelette : ../prive/formulaires/inc-choisir-objets.html
 * Date :      Sat, 27 Apr 2013 18:44:49 GMT
 * Compile :   Wed, 08 May 2013 16:42:25 GMT
 * Boucles :   _objets
 */ 

function BOUCLE_objetshtml_acad2625c36a707b6d1a5b551fa4d728(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'exclus', null), ''),true))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['source'] = array(lister_tables_objets_sql(''));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('cle',sql_quote($in),'NOT'));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/formulaires/inc-choisir-objets.html','html_acad2625c36a707b6d1a5b551fa4d728','_objets',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(((table_valeur($Pile[$SP]['valeur'], 'editable')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][(string)'id'] = interdire_scripts(concat(replace(entites_html(table_valeur(@$Pile[0], (string)'name', null),true),'\\W','_'),'_',interdire_scripts($Pile[$SP]['cle'])))) .
	'<div class="choix choix_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'">
	<input type="checkbox"  id="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'" name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
	'[]" value="' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"' .
	(($t2 = strval(interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'selected', null),true) == 'all')) OR (interdire_scripts(in_any($Pile[$SP]['cle'],interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'selected', null),true)))))) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' />
	<label for="' .
	table_valeur($Pile["vars"], (string)'id', null) .
	'">' .
	interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'texte_objets'))) .
	'</label>
</div>
')) :
		'');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/formulaires/inc-choisir-objets.html
// Temps de compilation total: 4.645 ms
//

function html_acad2625c36a707b6d1a5b551fa4d728($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_objetshtml_acad2625c36a707b6d1a5b551fa4d728($Cache, $Pile, $doublons, $Numrows, $SP) .
'
<input type="hidden" name="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true)) .
'[]" value="" />
');

	return analyse_resultat_skel('html_acad2625c36a707b6d1a5b551fa4d728', $Cache, $page, '../prive/formulaires/inc-choisir-objets.html');
}
?>