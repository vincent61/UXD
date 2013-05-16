<?php

/*
 * Squelette : ../prive/objets/contenu/rubrique-enfants.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 17:32:21 GMT
 * Boucles :   _verifierrub
 */ 

function BOUCLE_verifierrubhtml_81ee502bfaf7eaf0ee0070c30d229aad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creerarticledans', 'rubrique', invalideur_session($Cache, @$Pile[0]['id_rubrique']))?" ":""));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_verifierrub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('REGEXP', 'rubriques.statut', "'.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/contenu/rubrique-enfants.html','html_81ee502bfaf7eaf0ee0070c30d229aad','_verifierrub',40,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('article_edit','new=oui'),'id_rubrique',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true))),_T('public|spip|ecrire:icone_ecrire_article'),'article','new','right') .
'
	<div class="nettoyeur"></div>
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/contenu/rubrique-enfants.html
// Temps de compilation total: 7.404 ms
//

function html_81ee502bfaf7eaf0ee0070c30d229aad($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
filtre_afficher_enfant_rub_dist(@$Pile[0]['id_rubrique']) .
'
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creerrubriquedans', 'rubrique', invalideur_session($Cache, @$Pile[0]['id_rubrique']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(@$Pile[0]['id_rubrique'] ? (	filtre_icone_verticale_dist(generer_url_ecrire('rubrique_edit',(	'new=oui&id_parent=' .
			@$Pile[0]['id_rubrique'])),_T('public|spip|ecrire:icone_creer_sous_rubrique'),'rubrique','new','right clearright') .
		'
	'):(	filtre_icone_verticale_dist(generer_url_ecrire('rubrique_edit','new=oui'),_T('public|spip|ecrire:icone_creer_rubrique'),'secteur','new','right clearright') .
		'
		')) .
	'
')) :
		'') .
'
<div class="nettoyeur"></div>
' .
((@$Pile[0]['id_rubrique'])  ?
		(' ' . (	'

	
	' .
	(($t2 = strval(pipeline( 'rubrique_encours' , array('args' => array('type' => 'rubrique', 'id_objet' => @$Pile[0]['id_rubrique']), 'data' => recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_articles_proposes') ,
	'statut' => 'prop' ,
	'id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'par' => 'date' )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/objets/contenu/rubrique-enfants.html','html_81ee502bfaf7eaf0ee0070c30d229aad','',0,$GLOBALS['spip_lang'])), '')) )))!=='' ?
			((	'
		' .
		boite_ouvrir(_T('public|spip|ecrire:texte_en_cours_validation'), 'basic highlight') .
		'
		') . $t2 . (	'
		' .
		boite_fermer() .
		'
	')) :
			'') .
	'

	
	' .
	(($t2 = strval(invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('publierdans', 'rubrique', invalideur_session($Cache, @$Pile[0]['id_rubrique']))?" ":"") ? invalideur_session($Cache, recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_tous_articles_en_redaction') ,
	'statut' => 'prepa' ,
	'id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'par' => 'date' )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/objets/contenu/rubrique-enfants.html','html_81ee502bfaf7eaf0ee0070c30d229aad','',0,$GLOBALS['spip_lang'])), '')):invalideur_session($Cache, recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_tous_articles_en_redaction') ,
	'statut' => 'prepa' ,
	'id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'id_auteur' => interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))) ,
	'par' => 'date' )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/objets/contenu/rubrique-enfants.html','html_81ee502bfaf7eaf0ee0070c30d229aad','',0,$GLOBALS['spip_lang'])), ''))))))!=='' ?
			($t2 . '
	') :
			'') .
	'

	
	' .
	((($a = recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_tous_articles_presents') ,
	'statut' => 'publie' ,
	'id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'par' => 'date' )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/objets/contenu/rubrique-enfants.html','html_81ee502bfaf7eaf0ee0070c30d229aad','',15,$GLOBALS['spip_lang'])), '')) OR (is_string($a) AND strlen($a))) ? $a : recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_tous_articles_refuses') ,
	'statut' => 'refuse' ,
	'id_rubrique' => @$Pile[0]['id_rubrique'] ,
	'par' => 'date' )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../prive/objets/contenu/rubrique-enfants.html','html_81ee502bfaf7eaf0ee0070c30d229aad','',0,$GLOBALS['spip_lang'])), '')) .
	'
')) :
		'') .
'
' .
BOUCLE_verifierrubhtml_81ee502bfaf7eaf0ee0070c30d229aad($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_81ee502bfaf7eaf0ee0070c30d229aad', $Cache, $page, '../prive/objets/contenu/rubrique-enfants.html');
}
?>