<?php

/*
 * Squelette : ../prive/squelettes/contenu/articles.html
 * Date :      Sat, 27 Apr 2013 18:44:57 GMT
 * Compile :   Wed, 08 May 2013 09:34:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/articles.html
// Temps de compilation total: 4.957 ms
//

function html_d57f8a51b48c244b095a436e3c919d7a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:titre_page_articles_page') .
'</h1>
<div class=\'onglets_simple clearfix\'>
	<ul>
		<li>' .
lien_ou_expose(parametre_url(self(),'id_auteur',''),_T('public|spip|ecrire:info_articles_tous'),interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), ''),true)) ?'' :' ')),'ajax') .
'</li>
		<li>' .
lien_ou_expose(parametre_url(self(),'id_auteur',interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))),_T('public|spip|ecrire:info_articles_miens'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), ''),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))),'ajax') .
'</li>
	</ul>
</div>

' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(self(),'ajax'),
	array('../prive/squelettes/contenu/articles.html','html_d57f8a51b48c244b095a436e3c919d7a','',9,$GLOBALS['spip_lang'])) .
'<div class="nettoyeur"></div>

' .
vide($Pile['vars'][(string)'statuts'] = interdire_scripts(invalideur_session($Cache, statuts_articles_visibles(table_valeur($GLOBALS["visiteur_session"], (string)'statut', null))))) .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), ''),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][(string)'statuts'] = array_merge(table_valeur($Pile["vars"], (string)'statuts', null),array('prepa'))))) :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'statut\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'statuts', null)) . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), ''),true))) . ',
	\'nb\' => ' . argumenter_squelette('30') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/articles.html\',\'html_d57f8a51b48c244b095a436e3c919d7a\',\'\',14,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'article')?" ":""))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('article_edit','new=oui'),'id_rubrique',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true))),_T('public|spip|ecrire:icone_ecrire_article'),'article','new','right') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_d57f8a51b48c244b095a436e3c919d7a', $Cache, $page, '../prive/squelettes/contenu/articles.html');
}
?>