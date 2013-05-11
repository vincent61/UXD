<?php

/*
 * Squelette : ../prive/squelettes/ajax.html
 * Date :      Sat, 27 Apr 2013 18:44:55 GMT
 * Compile :   Wed, 08 May 2013 13:18:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/ajax.html
// Temps de compilation total: 1.185 ms
//

function html_aeb1d48ce679eb7ab9d8d81d0a4ec087($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'zajax'] = replace(_request('var_zajax'),'\\W','')) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/' .
	concat(table_valeur($Pile["vars"], (string)'zajax', null),'/',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type-page', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/ajax.html\',\'html_aeb1d48ce679eb7ab9d8d81d0a4ec087\',\'\',3,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'zajax', null)) . '))?$v:true), _request("connect"));
?'.'>');

	return analyse_resultat_skel('html_aeb1d48ce679eb7ab9d8d81d0a4ec087', $Cache, $page, '../prive/squelettes/ajax.html');
}
?>