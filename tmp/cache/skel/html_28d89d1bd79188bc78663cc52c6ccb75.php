<?php

/*
 * Squelette : ../prive/formulaires/configurer_previsualiseur.html
 * Date :      Sat, 27 Apr 2013 18:44:49 GMT
 * Compile :   Wed, 08 May 2013 16:42:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/configurer_previsualiseur.html
// Temps de compilation total: 5.478 ms
//

function html_28d89d1bd79188bc78663cc52c6ccb75($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
<h3 class=\'titrem\'><img src="' .
interdire_scripts(chemin_image('preview-24.png')) .
'" class="cadre-icone" />' .
_T('public|spip|ecrire:previsualisation') .
interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('previsu','../prive/formulaires/configurer_previsualiseur.html', $Pile[0]):'')) .
'</h3>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<p>' .
	_T('public|spip|ecrire:info_preview_texte') .
	'</p>
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><ul>
			' .
	vide($Pile['vars'][(string)'name'] = 'preview') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'
				<div class="choix">
					<input type="checkbox" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	interdire_scripts(eval('return '.'chr(91)'.';')) .
	interdire_scripts(eval('return '.'chr(93)'.';')) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_0minirezo" value="0minirezo"
					' .
	((in_any('0minirezo',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
			(' ' . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_0minirezo">' .
	_T('public|spip|ecrire:info_administrateurs') .
	'</label>
				</div>
				<div class="choix">
					<input type="checkbox" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	interdire_scripts(eval('return '.'chr(91)'.';')) .
	interdire_scripts(eval('return '.'chr(93)'.';')) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_1comite" value="1comite"
					' .
	((in_any('1comite',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true))))  ?
			(' ' . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_1comite">' .
	_T('public|spip|ecrire:info_redacteurs') .
	'</label>
				</div>
			</li>
		</ul>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_28d89d1bd79188bc78663cc52c6ccb75', $Cache, $page, '../prive/formulaires/configurer_previsualiseur.html');
}
?>