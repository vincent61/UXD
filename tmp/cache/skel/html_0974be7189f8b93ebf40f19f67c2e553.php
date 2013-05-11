<?php

/*
 * Squelette : ../prive/squelettes/contenu/admin_tech.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 16:41:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/admin_tech.html
// Temps de compilation total: 16.910 ms
//

function html_0974be7189f8b93ebf40f19f67c2e553($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('detruire')?" ":""))) .
'

<h1 class="grostitre">' .
_T('public|spip|ecrire:titre_admin_tech') .
'</h1>


' .
(($t1 = strval(interdire_scripts((((((verifier_htaccess(eval('return '.'_DIR_TMP'.';'),'1')) AND (interdire_scripts(verifier_htaccess(eval('return '.'_DIR_CONNECT'.';'),'1')))) ?' ' :'')) ?'' :' '))))!=='' ?
		($t1 . (	'

	' .
	boite_ouvrir(wrap(_T('htaccess_inoperant'),'<h3>'), 'notice', 'titrem') .
	vide($Pile['vars'][(string)'htaccess'] = (($t3 = strval(interdire_scripts(eval('return '.'_ACCESS_FILE_NAME'.';'))))!=='' ?
				('<tt>' . $t3 . '</tt>') :
				'')) .
	'
		' .
	vide($Pile['vars'][(string)'constantes'] = '<tt>_DIR_TMP &amp; _DIR_CONNECT</tt>') .
	'
		' .
	vide($Pile['vars'][(string)'document_root'] = (($t3 = strval(interdire_scripts(eval('return '.'table_valeur($_SERVER,\'DOCUMENT_ROOT\')'.';'))))!=='' ?
				('<tt>' . $t3 . '</tt>') :
				'')) .
	'
		<p>' .
	_T('public|spip|ecrire:htaccess_a_simuler', array('htaccess' => table_valeur($Pile["vars"], (string)'htaccess', null),
'constantes' => table_valeur($Pile["vars"], (string)'constantes', null),
'document_root' => table_valeur($Pile["vars"], (string)'document_root', null))) .
	'</p>
	' .
	boite_fermer() .
	'

')) :
		'') .
'




' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('reparer', 'base')?" ":""))))!=='' ?
		($t1 . (	'
	<!--reparer_base-->
	' .
	boite_ouvrir(wrap(_T('texte_recuperer_base'),'<h3>'), 'simple', 'titrem') .
	'<p>' .
	_T('public|spip|ecrire:texte_crash_base') .
	'</p>
	' .
	boite_pied() .
	'
		' .
	bouton_action(_T('public|spip|ecrire:bouton_tenter_recuperation'),generer_url_ecrire('base_repair')) .
	'
	' .
	boite_fermer() .
	'
	<!--/reparer_base-->
')) :
		'') .
'

' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('detruire')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	<!--declarer_base-->
	<div class="ajax">
		' .
	executer_balise_dynamique('FORMULAIRE_DECLARER_BASES',
	array(),
	array('../prive/squelettes/contenu/admin_tech.html','html_0974be7189f8b93ebf40f19f67c2e553','',18,$GLOBALS['spip_lang'])) .
	'
	</div>
	<!--/declarer_base-->
')) :
		'') .
'

<!--effacer_base-->
' .
boite_ouvrir(wrap(_T('texte_effacer_base'),'<h3>'), 'error', 'titrem') .
'<p>' .
_T('public|spip|ecrire:info_avertissement') .
'</p>
	<p>' .
_T('public|spip|ecrire:texte_admin_effacer_01') .
'</p>
	<p><strong>' .
_T('public|spip|ecrire:avis_suppression_base') .
'</strong></p>
' .
boite_pied() .
'
	' .
bouton_action(_T('public|spip|ecrire:bouton_effacer_tout'),generer_url_ecrire('base_delete_all','reinstall=non')) .
'
' .
boite_fermer() .
'
<!--/effacer_base-->
');

	return analyse_resultat_skel('html_0974be7189f8b93ebf40f19f67c2e553', $Cache, $page, '../prive/squelettes/contenu/admin_tech.html');
}
?>