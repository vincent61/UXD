<?php

/*
 * Squelette : plugins-dist/forum/formulaires/forum.html
 * Date :      Sat, 27 Apr 2013 18:45:24 GMT
 * Compile :   Wed, 08 May 2013 10:06:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/forum/formulaires/forum.html
// Temps de compilation total: 11.453 ms
//

function html_173150797f5c3f00b67ea7eb0634dd61($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_forum ajax" id="formulaire_forum">

' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok success">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur error">' . $t1 . '</p>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'login_forum_abo', null),true))))!=='' ?
		($t1 . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-login_forum_abo') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins-dist/forum/formulaires/forum.html\',\'html_173150797f5c3f00b67ea7eb0634dd61\',\'\',7,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'

' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'


' .
	(($t2 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'previsu'))))!=='' ?
			((	'<form action="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
		'#formulaire_forum" method="post" class="noajax">
	<div>
	' .
			'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>' .
		'
	<input type=\'hidden\' name=\'titre\' value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'titre', null),true)) .
		'" />
	<input type=\'hidden\' name=\'texte\' value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'texte', null),true)) .
		'" />
	<input type=\'hidden\' name=\'url_site\' value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'url_site', null),true)) .
		'" />
	<input type=\'hidden\' name=\'nom_site\' value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom_site', null),true)) .
		'" />
	' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'id_forum', null))))!=='' ?
				('<input type="hidden" name="id_forum" value="' . $t3 . '" />') :
				'') .
		'
	' .
		recuperer_fond( 'formulaires/inc-forum_ajouter_mot' , array('ajouter_mot' => @$Pile[0]['ajouter_mot'] ), array('compil'=>array('plugins-dist/forum/formulaires/forum.html','html_173150797f5c3f00b67ea7eb0634dd61','',13,$GLOBALS['spip_lang'])), '') .
		'
	') . $t2 . '
	</div>
</form>') :
			'') .
	'


<form action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'#formulaire_forum" method="post" enctype=\'multipart/form-data\'><div>
' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>
' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'id_forum', null))))!=='' ?
			('<input type="hidden" name="id_forum" value="' . $t2 . '" />') :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'modere', null),true))))!=='' ?
			((	'<fieldset class="moderation_info info">
	<legend>' .
		_T('forum:bouton_radio_modere_priori') .
		'</legend>
	<p class="explication">') . $t2 . (	_T('forum:forum_info_modere') .
		'</p>
</fieldset>')) :
			'') .
	'

' .
	(($t2 = strval(choixsiegal(table_valeur(@$Pile[0], (string)'afficher_texte', null),'non',' ','')))!=='' ?
			($t2 . (	'
' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'titre', null),true))))!=='' ?
				('<input type="hidden" name="titre" value="' . $t3 . '" />') :
				'') .
		'
<p class="spip_bouton"><input type="submit" class="submit" value="' .
		_T('forum:forum_valider') .
		'" /></p>')) :
			'') .
	'

' .
	(($t2 = strval(choixsiegal(table_valeur(@$Pile[0], (string)'afficher_texte', null),'non','',' ')))!=='' ?
			($t2 . (	'

	' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-login_forum') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins-dist/forum/formulaires/forum.html\',\'html_173150797f5c3f00b67ea7eb0634dd61\',\'\',23,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

	<fieldset>
	<legend>' .
		_T('forum:forum_message') .
		'</legend>' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('forums_titre',null,false):'') != 'non')) ?'' :' '))))!=='' ?
				('
	' . $t3 . (	'
		<input type="hidden" name="titre" id="titre"' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'titre', null),true))))!=='' ?
					(' value="' . $t4 . '"') :
					'') .
			' />
	')) :
				'') .
		'<ul>
	' .
		(($t3 = strval(recuperer_fond( 'formulaires/inc-forum_bloc_choix_mots' , array('table' => interdire_scripts(table_valeur(@$Pile[0], (string)'table', null)) ,
	'ajouter_mot' => @$Pile[0]['ajouter_mot'] ), array('compil'=>array('plugins-dist/forum/formulaires/forum.html','html_173150797f5c3f00b67ea7eb0634dd61','',22,$GLOBALS['spip_lang'])), '')))!=='' ?
				('<li class=\'editer saisie_mots_forum\'>' . $t3 . '</li>') :
				'') .
		'

' .
		(($t3 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('forums_titre',null,false):'') != 'non')) ?' ' :''))))!=='' ?
				($t3 . (	'
	<li class=\'editer saisie_titre obligatoire' .
			((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre'))  ?
					(' ' . ' ' . 'erreur') :
					'') .
			'\'>
		<label for="titre">' .
			_T('forum:forum_titre') .
			' ' .
			_T('public|spip|ecrire:info_obligatoire_02') .
			'</label>
		' .
			(($t4 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre')))!=='' ?
					('<span class=\'erreur_message\'>' . $t4 . '</span>') :
					'') .
			'
		<input type="text" class="text" name="titre" id="titre"' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'titre', null),true))))!=='' ?
					(' value="' . $t4 . '"') :
					'') .
			' size="60" />
	</li>
')) :
				'') .
		'

' .
		interdire_scripts((((include_spip('inc/config')?lire_config('forums_texte',null,false):'') != 'non') ? (	'<li class=\'editer saisie_texte obligatoire' .
			((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte'))  ?
					(' ' . ' ' . 'erreur') :
					'') .
			'\'>
		<label for=\'texte\'>' .
			typo(_T('forum:forum_texte')) .
			' ' .
			_T('public|spip|ecrire:info_obligatoire_02') .
			'</label>
		' .
			(($t4 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte')))!=='' ?
					('<span class=\'erreur_message\'>' . $t4 . '</span>') :
					'') .
			'
		<textarea name="texte" id="texte" rows="10" cols="60"' .
			(($t4 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('forums_afficher_barre',null,false):'') == 'non')) ?' ' :''))))!=='' ?
					($t4 . ' class="no_barre"') :
					'') .
			'>' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'texte', null),true)) .
			'</textarea>
        ' .
			(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'afficher_barre') ? (	'<p class=\'explication\'>' .
				_T('public|spip|ecrire:info_creation_paragraphe') .
				'</p>'):(	'<p class="explication forum_saisie_texte_info">' .
				_T('forum:forum_saisie_texte_info') .
				'</p>')) .
			'
	</li>
'):'')) .
		'
	</ul></fieldset>

' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cle_ajouter_document', null),true))))!=='' ?
				((	'
	<fieldset>
	<legend>' .
			_T('medias:bouton_ajouter_document') .
			'</legend>
	<ul>
	<li class=\'editer saisie_document_forum' .
			((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'document_forum'))  ?
					(' ' . ' ' . 'erreur') :
					'') .
			'\'>
		' .
			(($t4 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'document_forum')))!=='' ?
					('<span class=\'erreur_message\'>' . $t4 . '</span>') :
					'') .
			'
		<input type="hidden" name="cle_ajouter_document" value="') . $t3 . (	'" />
		' .
			(($t4 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ajouter_document', null),true))))!=='' ?
					('<div id="ajouter_document_up">' . $t4 . (	'
		<label for="supprimer_document_ajoute"><input type=\'checkbox\' name=\'supprimer_document_ajoute\' id=\'supprimer_document_ajoute\' />
		' .
				_T('public|spip|ecrire:lien_supprimer') .
				'</label>
		</div>')) :
					'') .
			'
		<div>
		' .
			(($t4 = strval(interdire_scripts(join(entites_html(table_valeur(@$Pile[0], (string)'formats_documents_forum', null),true),', '))))!=='' ?
					('<label for="ajouter_document">' . $t4 . '</label>') :
					'') .
			'
		<input class=\'file\' type="file" name="ajouter_document" id="ajouter_document"' .
			(($t4 = strval(interdire_scripts(join(entites_html(table_valeur(@$Pile[0], (string)'formats_documents_forum', null),true),','))))!=='' ?
					('
		accept="' . $t4 . '"') :
					'') .
			' />
		</div>

		<script type=\'text/javascript\'>/*<![CDATA[*/
		if (window.jQuery) jQuery(function(){
			jQuery(\'#ajouter_document_up\')
			.next().hide()
			.prev().find(\':checkbox\').bind(\'change\', function(){
				jQuery(\'#ajouter_document_up\').hide().next().show();
			});
		});
		/*]]>*/</script>
	</li>
	</ul></fieldset>
')) :
				'') .
		'

	' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cle_ajouter_document', null),true))))!=='' ?
				('<p style="display: none;">
		<label for="' . $t3 . (	'">' .
			_T('public|spip|ecrire:antispam_champ_vide') .
			'</label>
		<input type="text" class="text" name="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cle_ajouter_document', null),true)) .
			'" id="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cle_ajouter_document', null),true)) .
			'" value="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'cle_ajouter_document', null),true)), null),true)) .
			'" size="10" />
	</p>')) :
				'') .
		'
	' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'cle_ajouter_document', null),true)) ?'' :' '))))!=='' ?
				($t3 . (	'
	<p style="display: none;">
		<label for="nobot_forum">' .
			_T('public|spip|ecrire:antispam_champ_vide') .
			'</label>
		<input type="text" class="text" name="nobot" id="nobot_forum" value="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nobot', null),true)) .
			'" size="10" />
	</p>
	')) :
				'') .
		'
	<p class="boutons"><input type="submit" class="submit" value="' .
		_T('forum:forum_voir_avant') .
		'" /></p>
')) :
			'') .
	'
</div>
</form>

')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_173150797f5c3f00b67ea7eb0634dd61', $Cache, $page, 'plugins-dist/forum/formulaires/forum.html');
}
?>