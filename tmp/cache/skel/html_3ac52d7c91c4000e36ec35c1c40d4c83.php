<?php

/*
 * Squelette : ../prive/squelettes/contenu/article.html
 * Date :      Sat, 27 Apr 2013 18:44:56 GMT
 * Compile :   Wed, 08 May 2013 10:05:10 GMT
 * Boucles :   _proposer, _article
 */ 

function BOUCLE_proposerhtml_3ac52d7c91c4000e36ec35c1c40d4c83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(invalideur_session($Cache, ((((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '1comite')) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']))?" ":"")))) ?' ' :'')));

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_proposer';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('=', 'articles.statut', "'prepa'"), 
			array('=', 'L1.id_auteur', sql_quote(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))),'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/article.html','html_3ac52d7c91c4000e36ec35c1c40d4c83','_proposer',28,$GLOBALS['spip_lang'])
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
boite_ouvrir('', 'note center proposer') .
'<p>' .
_T('public|spip|ecrire:texte_proposer_publication') .
'</p>
	' .
bouton_action(_T('public|spip|ecrire:bouton_demande_publication'),invalideur_session($Cache, generer_action_auteur('instituer_objet',(	'article-' .
		invalideur_session($Cache, $Pile[$SP]['id_article']) .
		'-prop'),invalideur_session($Cache, self()))),'',_T('public|spip|ecrire:confirm_changer_statut')) .
'
' .
boite_fermer() .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_articlehtml_3ac52d7c91c4000e36ec35c1c40d4c83(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'article'));

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.surtitre",
		"articles.titre AS titre_rang",
		"articles.soustitre",
		"articles.statut",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('REGEXP', 'articles.statut', "'.*'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/article.html','html_3ac52d7c91c4000e36ec35c1c40d4c83','_article',2,$GLOBALS['spip_lang'])
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
boite_ouvrir((($t2 = strval(interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
			((	'
				
	' .
		(($t3 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']))?" ":""))))!=='' ?
				($t3 . (	'
				
		' .
			(!(afficher_qui_edite($Pile[$SP]['id_article'],'article'))  ?
					(' ' . (	'
			' .
				filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
					$Pile[$SP]['id_article'])),_T('public|spip|ecrire:icone_modifier_article'),'article','edit','right ajax preload') .
				'
		')) :
					'') .
			'
		' .
			((afficher_qui_edite($Pile[$SP]['id_article'],'article'))  ?
					(' ' . (	'
			' .
				filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
					$Pile[$SP]['id_article'])),afficher_qui_edite($Pile[$SP]['id_article'],'article'),'warning-24','','right edition_deja ajax preload') .
				'
		')) :
					'') .
			'
	')) :
				'') .
		'
	' .
		(($t3 = strval(interdire_scripts(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0]))))!=='' ?
				('<h4 class=\'surtitre\'>' . $t3 . '</h4>') :
				'') .
		'
	<h1>' .
		(($t3 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
				($t3 . '. ') :
				'')) . $t2 . (	interdire_scripts(filtre_balise_img_dist(chemin_image('article-24.png'),'article','cadre-icone')) .
		'</h1>
	' .
		(($t3 = strval(interdire_scripts(typo($Pile[$SP]['soustitre'], "TYPO", $connect, $Pile[0]))))!=='' ?
				('<h2 class=\'soustitre\'>' . $t3 . '</h2>') :
				'') .
		'
')) :
			''), 'simple fiche_objet') .
'

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_DATER',
	array('article',$Pile[$SP]['id_article']),
	array('../prive/squelettes/contenu/article.html','html_3ac52d7c91c4000e36ec35c1c40d4c83','_article',6,$GLOBALS['spip_lang'])) .
'</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_EDITER_LIENS',
	array('auteurs','article',$Pile[$SP]['id_article']),
	array('../prive/squelettes/contenu/article.html','html_3ac52d7c91c4000e36ec35c1c40d4c83','_article',9,$GLOBALS['spip_lang'])) .
'</div>

<!--affiche_milieu-->
' .
BOUCLE_proposerhtml_3ac52d7c91c4000e36ec35c1c40d4c83($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['statut'] == 'prop')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	boite_ouvrir('', 'note center propose') .
	'<p>' .
	_T('public|spip|ecrire:text_article_propose_publication') .
	'</p>
' .
	boite_fermer() .
	'
')) :
		'') .
'

<div id="wysiwyg">
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/contenu/article') . ', array(\'id\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'virtuel\' => ' . argumenter_squelette('oui') . ',
	\'wysiwyg\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/contenu/article.html\',\'html_3ac52d7c91c4000e36ec35c1c40d4c83\',\'\',42,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('wysiwyg') . '))?$v:true), _request("connect"));
?'.'>
</div>

<div class="nettoyeur"></div>

' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']))?" ":""))))!=='' ?
		($t1 . (	'

	' .
	(!(afficher_qui_edite($Pile[$SP]['id_article'],'article'))  ?
			(' ' . (	'
		' .
		filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
			$Pile[$SP]['id_article'])),_T('public|spip|ecrire:icone_modifier_article'),'article','edit','right ajax preload') .
		'
	')) :
			'') .
	'
	' .
	((afficher_qui_edite($Pile[$SP]['id_article'],'article'))  ?
			(' ' . (	'
		' .
		filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
			$Pile[$SP]['id_article'])),afficher_qui_edite($Pile[$SP]['id_article'],'article'),'warning-24','','right edition_deja ajax preload') .
		'
	')) :
			'') .
	'
')) :
		'') .
'

' .
pipeline( 'afficher_complement_objet' , array('args' => array('type' => 'article', 'id' => $Pile[$SP]['id_article']), 'data' => '<div class="nettoyeur"></div>') ) .
boite_fermer() .
'
' .
(($t1 = strval(interdire_scripts(((eval('return '.'_AJAX'.';')) ?' ' :''))))!=='' ?
		($t1 . (	'
	<script type="text/javascript">/*<![CDATA[*/reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\',\'#navigation,#chemin\');/*]]>*/</script>
')) :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/article.html
// Temps de compilation total: 19.237 ms
//

function html_3ac52d7c91c4000e36ec35c1c40d4c83($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', 'article', invalideur_session($Cache, @$Pile[0]['id_article']))?" ":""))) .
'
' .
(($t1 = BOUCLE_articlehtml_3ac52d7c91c4000e36ec35c1c40d4c83($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	((table_valeur(@$Pile[0], (string)'exec', null) == 'article_edit') ? recuperer_fond( 'prive/squelettes/contenu/article_edit' , array_merge($Pile[0],array('redirect' => '' ,
	'retourajax' => 'oui' )), array('compil'=>array('../prive/squelettes/contenu/article.html','html_3ac52d7c91c4000e36ec35c1c40d4c83','',0,$GLOBALS['spip_lang'])), ''):sinon_interdire_acces('')) .
	'
'))) .
'
');

	return analyse_resultat_skel('html_3ac52d7c91c4000e36ec35c1c40d4c83', $Cache, $page, '../prive/squelettes/contenu/article.html');
}
?>