<?php

/*
 * Squelette : ../plugins-dist/medias/formulaires/inc-upload_document.html
 * Date :      Wed, 17 Apr 2013 16:48:52 GMT
 * Compile :   Fri, 10 May 2013 10:13:18 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/formulaires/inc-upload_document.html
// Temps de compilation total: 21.060 ms
//

function html_2c47771bc5a3b82dec07d84f34bf7f72($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'domid'] = (	'_' .
	interdire_scripts(concat(entites_html(table_valeur(@$Pile[0], (string)'mode', null),true),'_',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'new'),true)))))) .
vide($Pile['vars'][(string)'methode'] = 'upload') .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'joindre_mediatheque', null),true)) ?' ' :''))))!=='' ?
		($t1 . vide($Pile['vars'][(string)'methode'] = 'mediatheque')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'joindre_distant', null),true)) ?' ' :''))))!=='' ?
		($t1 . vide($Pile['vars'][(string)'methode'] = 'distant')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'joindre_ftp', null),true)) ?' ' :''))))!=='' ?
		($t1 . vide($Pile['vars'][(string)'methode'] = 'ftp')) :
		'') .
'

<div id="defaultsubmit' .
table_valeur($Pile["vars"], (string)'domid', null) .
'" class="none"></div>
' .
'<div class=\'joindre_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
(!((table_valeur($Pile["vars"], (string)'methode', null) == 'upload'))  ?
		(' ' . 'none-js') :
		'') .
'\' id=\'joindre_upload' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\'>
	<ul>
		<li class=\'editer editer_fichier_upload' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'fichier_upload'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
			<label for=\'fichier_upload' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\'>' .
_T('public|spip|ecrire:bouton_upload') .
'</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'fichier_upload')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input class=\'file multi\' type="file" name="fichier_upload[]" value=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'fichier_upload', null),true)) .
'\' id="fichier_upload' .
table_valeur($Pile["vars"], (string)'domid', null) .
'" size=\'11\' />
			<!--editer_fichier_upload-->
		</li>
	</ul>
	<div class=\'sourceup\'>
		' .
_T('medias:bouton_download_depuis') .
'
		' .
_T('medias:bouton_download_local') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'mediatheque', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		| <a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'mediatheque\');return false;">' .
	_T('medias:bouton_download_par_mediatheque') .
	'</a>')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'proposer_ftp', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		| <a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'ftp\');return false;">' .
	_T('medias:bouton_download_par_ftp') .
	'</a>')) :
		'') .
'
		| <a href=\'#\' onclick="change_methode(\'' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\',\'distant\');return false;">' .
_T('medias:bouton_download_sur_le_web') .
'</a>
	</div>
	<p class=\'boutons\'><input class=\'submit\' type="submit" name="joindre_upload" value="' .
_T('public|spip|ecrire:bouton_upload') .
'"/></p>
</div>' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'mediatheque', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class=\'joindre_mode' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	(!((table_valeur($Pile["vars"], (string)'methode', null) == 'mediatheque'))  ?
			(' ' . 'none-js') :
			'') .
	'\' id=\'joindre_mediatheque' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\'>
	<ul>
		<li class=\'editer editer_refdoc_joindre' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'refdoc_joindre'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'\'>
			<label for=\'refdoc_joindre' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\'>' .
	_T('medias:label_refdoc_joindre') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'refdoc_joindre')))!=='' ?
			('
			<span class=\'erreur_message\'>' . $t2 . '</span>
			') :
			'') .
	'<input class=\'text\' type="text" name="refdoc_joindre" value=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'refdoc_joindre', null),true)) .
	'\' id="refdoc_joindre' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'"/>
			<input class=\'submit\' type="button" name="parcourir" value="' .
	_T('medias:bouton_parcourir') .
	'"
				onclick="jQuery.modalboxload(\'' .
	generer_url_ecrire('popin-choisir_document',(	'var_zajax=contenu&selectfunc=mediaselect' .
		table_valeur($Pile["vars"], (string)'domid', null))) .
	'\',{autoResize: true});"
			/>
			<!--editer_refdoc_joindre-->
		</li>
	</ul>
	<script type="text/javascript">/*<![CDATA[*/
	function mediaselect' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'(id){jQuery.modalboxclose();jQuery("#refdoc_joindre' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'").attr(\'value\',\'doc\'+id).focus();jQuery(\'#joindre_mediatheque' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'>.boutons input\').get(0).click();}
	/*]]>*/</script>
	<div class=\'sourceup\'>
		' .
	_T('medias:bouton_download_depuis') .
	'
			<a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'upload\');return false;">' .
	_T('medias:bouton_download_local') .
	'</a>
		| ' .
	_T('medias:bouton_download_par_mediatheque') .
	'
		' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'proposer_ftp', null), ''),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
		| <a href=\'#\' onclick="change_methode(\'' .
		table_valeur($Pile["vars"], (string)'domid', null) .
		'\',\'ftp\');return false;">' .
		_T('medias:bouton_download_par_ftp') .
		'</a>')) :
			'') .
	'
		| <a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'distant\');return false;">' .
	_T('medias:bouton_download_sur_le_web') .
	'</a>
	</div>
	<p class=\'boutons\'><input class=\'submit\' type="submit" name="joindre_mediatheque" value="' .
	_T('medias:bouton_attacher_document') .
	'"/></p>
</div>
')) :
		'') .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'proposer_ftp', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class=\'joindre_mode' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	(!((table_valeur($Pile["vars"], (string)'methode', null) == 'ftp'))  ?
			(' ' . 'none-js') :
			'') .
	'\' id=\'joindre_ftp' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\'>
	' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'_options_upload_ftp', null))))!=='' ?
			((	'
	<ul>
		<li class=\'editer editer_cheminftp' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'cheminftp'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'\'>
			<label for=\'cheminftp' .
		table_valeur($Pile["vars"], (string)'domid', null) .
		'\'>' .
		_T('info_selectionner_fichier',array('upload' => interdire_scripts(table_valeur(@$Pile[0], (string)'_dir_upload_ftp', null)))) .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'cheminftp')))!=='' ?
				('
			<span class=\'erreur_message\'>' . $t3 . '</span>
			') :
				'') .
		'<select name=\'cheminftp\' id=\'cheminftp' .
		table_valeur($Pile["vars"], (string)'domid', null) .
		'\' size=\'1\'>
			<option value=\'\'>&gt;&gt;</option>
			') . $t2 . '
			</select>
			<!--editer_cheminftp-->
		</li>
	</ul>') :
			'') .
	(($t2 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'_dir_upload_ftp', null),true)) AND (interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_options_upload_ftp', null),true)) ?'' :' ')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . (	'
	<p class="infos">
	' .
		_T('info_installer_ftp',array('upload' => interdire_scripts(table_valeur(@$Pile[0], (string)'_dir_upload_ftp', null)))) .
		' ' .
		interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('ins_upload','../plugins-dist/medias/formulaires/inc-upload_document.html', $Pile[0]):'')) .
		'</p>
	')) :
			'') .
	'
	<div class=\'sourceup\'>
		' .
	_T('medias:bouton_download_depuis') .
	'
		<a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'upload\');return false;">' .
	_T('medias:bouton_download_local') .
	'</a>
		' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'mediatheque', null), ''),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
		| <a href=\'#\' onclick="change_methode(\'' .
		table_valeur($Pile["vars"], (string)'domid', null) .
		'\',\'mediatheque\');return false;">' .
		_T('medias:bouton_download_par_mediatheque') .
		'</a>')) :
			'') .
	'
		| ' .
	_T('medias:bouton_download_par_ftp') .
	'
		| <a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'distant\');return false;">' .
	_T('medias:bouton_download_sur_le_web') .
	'</a>
	</div>
	<p class=\'boutons\'>
		' .
	(($t2 = strval(interdire_scripts(((table_valeur(@$Pile[0], (string)'_options_upload_ftp', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
		<input class=\'submit\' type="submit" name="joindre_ftp" value="' .
		_T('public|spip|ecrire:bouton_choisir') .
		'"/>
		')) :
			'') .
	'
	</p>
</div>
')) :
		'') .
'<div class=\'joindre_mode' .
table_valeur($Pile["vars"], (string)'domid', null) .
(!((table_valeur($Pile["vars"], (string)'methode', null) == 'distant'))  ?
		(' ' . 'none-js') :
		'') .
'\' id=\'joindre_distant' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\'>
	<ul>
		<li class=\'editer editer_url' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
			<label for=\'url' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\'>' .
_T('medias:info_referencer_doc_distant') .
'</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url')))!=='' ?
		('
			<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<input class=\'text\' type="text" name="url" value=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'url', null),true)) .
'\' id="url' .
table_valeur($Pile["vars"], (string)'domid', null) .
'"/>
			<!--editer_url-->
		</li>
	</ul>
	<div class=\'sourceup\'>
		' .
_T('medias:bouton_download_depuis') .
'
			<a href=\'#\' onclick="change_methode(\'' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\',\'upload\');return false;">' .
_T('medias:bouton_download_local') .
'</a>
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'mediatheque', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		| <a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'mediatheque\');return false;">' .
	_T('medias:bouton_download_par_mediatheque') .
	'</a>')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'proposer_ftp', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		| <a href=\'#\' onclick="change_methode(\'' .
	table_valeur($Pile["vars"], (string)'domid', null) .
	'\',\'ftp\');return false;">' .
	_T('medias:bouton_download_par_ftp') .
	'</a>')) :
		'') .
'
		| ' .
_T('medias:bouton_download_sur_le_web') .
'
	</div>
	<p class=\'boutons\'><input class=\'submit\' type="submit" name="joindre_distant" value="' .
_T('public|spip|ecrire:bouton_choisir') .
'"/></p>
</div>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'lister_contenu_archive')))!=='' ?
		('<ul><li class=\'fieldset deballer_zip\'>' . $t1 . '</li></ul>') :
		'') .
'

<script type=\'text/javascript\'>/*<!' .
interdire_scripts(eval('return '.'chr(91)'.';')) .
'CDATA' .
interdire_scripts(eval('return '.'chr(91)'.';')) .
'*/
if (window.jQuery){
function change_methode(domid,methode){
	var id = "#joindre_"+methode+domid;
	if (jQuery(id).is(\':hidden\')) {
		jQuery(\'div.joindre_mode\'+domid+\':visible\').slideUp(\'fast\');
		jQuery(id).slideDown(\'fast\');
	}
	// placer en haut du formulaire les boutons submit par defaut correspondant a la methode active
	jQuery("#defaultsubmit"+domid).html(\'\').append(jQuery(id).find(\'.boutons\').eq(-1).find(\'input\').clone(true));
}
jQuery(function(){change_methode(\'' .
table_valeur($Pile["vars"], (string)'domid', null) .
'\',\'' .
table_valeur($Pile["vars"], (string)'methode', null) .
'\');});
}
/*' .
interdire_scripts(eval('return '.'chr(93)'.';')) .
interdire_scripts(eval('return '.'chr(93)'.';')) .
'>*/</script>
');

	return analyse_resultat_skel('html_2c47771bc5a3b82dec07d84f34bf7f72', $Cache, $page, '../plugins-dist/medias/formulaires/inc-upload_document.html');
}
?>