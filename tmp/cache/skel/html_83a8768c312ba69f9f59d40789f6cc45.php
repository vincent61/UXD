<?php

/*
 * Squelette : ../prive/formulaires/configurer_reducteur.html
 * Date :      Sat, 27 Apr 2013 18:44:50 GMT
 * Compile :   Wed, 08 May 2013 16:42:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/configurer_reducteur.html
// Temps de compilation total: 17.574 ms
//

function html_83a8768c312ba69f9f59d40789f6cc45($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
interdire_scripts(chemin_image('image-24.png')) .
'" class="cadre-icone" />' .
_T('public|spip|ecrire:info_generation_miniatures_images') .
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
	'</div>' .
	'<input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' style="display:none;"/>
		<ul>
			' .
	vide($Pile['vars'][(string)'name'] = 'image_process') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer haut editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_image_process') .
	interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('logoart','../prive/formulaires/configurer_reducteur.html', $Pile[0]):'')) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'
				<div class="vignettes_reducteur clearfix">
				' .
	vide($Pile['vars'][(string)'process'] = 'gd1') .
	(($t2 = strval(url_vignette_choix(table_valeur($Pile["vars"], (string)'process', null))))!=='' ?
			((	'<button
					type="submit"
					class="vignette_reducteur' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'image_process', null),true) == table_valeur($Pile["vars"], (string)'process', null))) ?' ' :''))))!=='' ?
				($t3 . 'on') :
				'') .
		'"
					style="background-image:url(') . $t2 . (	');"
					name="image_process_' .
		interdire_scripts(eval('return '.'chr(91)'.';')) .
		table_valeur($Pile["vars"], (string)'process', null) .
		interdire_scripts(eval('return '.'chr(93)'.';')) .
		'">
				' .
		strtoupper(table_valeur($Pile["vars"], (string)'process', null)) .
		'
				</button>')) :
			'') .
	'
				' .
	vide($Pile['vars'][(string)'process'] = 'gd2') .
	(($t2 = strval(url_vignette_choix(table_valeur($Pile["vars"], (string)'process', null))))!=='' ?
			((	'<button
					type="submit"
					class="vignette_reducteur' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'image_process', null),true) == table_valeur($Pile["vars"], (string)'process', null))) ?' ' :''))))!=='' ?
				($t3 . 'on') :
				'') .
		'"
					style="background-image:url(') . $t2 . (	');"
					name="image_process_' .
		interdire_scripts(eval('return '.'chr(91)'.';')) .
		table_valeur($Pile["vars"], (string)'process', null) .
		interdire_scripts(eval('return '.'chr(93)'.';')) .
		'">
				' .
		strtoupper(table_valeur($Pile["vars"], (string)'process', null)) .
		'
				</button>')) :
			'') .
	'
				' .
	vide($Pile['vars'][(string)'process'] = 'netpbm') .
	(($t2 = strval(url_vignette_choix(table_valeur($Pile["vars"], (string)'process', null))))!=='' ?
			((	'<button
					type="submit"
					class="vignette_reducteur' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'image_process', null),true) == table_valeur($Pile["vars"], (string)'process', null))) ?' ' :''))))!=='' ?
				($t3 . 'on') :
				'') .
		'"
					style="background-image:url(') . $t2 . (	');"
					name="image_process_' .
		interdire_scripts(eval('return '.'chr(91)'.';')) .
		table_valeur($Pile["vars"], (string)'process', null) .
		interdire_scripts(eval('return '.'chr(93)'.';')) .
		'">
				' .
		strtoupper(table_valeur($Pile["vars"], (string)'process', null)) .
		'
				</button>')) :
			'') .
	'
				' .
	vide($Pile['vars'][(string)'process'] = 'imagick') .
	(($t2 = strval(url_vignette_choix(table_valeur($Pile["vars"], (string)'process', null))))!=='' ?
			((	'<button
					type="submit"
					class="vignette_reducteur' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'image_process', null),true) == table_valeur($Pile["vars"], (string)'process', null))) ?' ' :''))))!=='' ?
				($t3 . 'on') :
				'') .
		'"
					style="background-image:url(') . $t2 . (	');"
					name="image_process_' .
		interdire_scripts(eval('return '.'chr(91)'.';')) .
		table_valeur($Pile["vars"], (string)'process', null) .
		interdire_scripts(eval('return '.'chr(93)'.';')) .
		'">
				' .
		strtoupper(table_valeur($Pile["vars"], (string)'process', null)) .
		'
				</button>')) :
			'') .
	'
				' .
	vide($Pile['vars'][(string)'process'] = 'convert') .
	(($t2 = strval(url_vignette_choix(table_valeur($Pile["vars"], (string)'process', null))))!=='' ?
			((	'<button
					type="submit"
					class="vignette_reducteur' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'image_process', null),true) == table_valeur($Pile["vars"], (string)'process', null))) ?' ' :''))))!=='' ?
				($t3 . 'on') :
				'') .
		'"
					style="background-image:url(') . $t2 . (	');"
					name="image_process_' .
		interdire_scripts(eval('return '.'chr(91)'.';')) .
		table_valeur($Pile["vars"], (string)'process', null) .
		interdire_scripts(eval('return '.'chr(93)'.';')) .
		'">
				' .
		strtoupper(table_valeur($Pile["vars"], (string)'process', null)) .
		'
				</button>')) :
			'') .
	'
				</div>
				<p class="explication">' .
	_T('public|spip|ecrire:info_image_process2') .
	'</p>
			</li>
			' .
	(($t2 = strval(interdire_scripts(((match(entites_html(table_valeur(@$Pile[0], (string)'image_process', null),true),'^(gd1|gd2)$')) ?' ' :''))))!=='' ?
			($t2 . (	'
			' .
		vide($Pile['vars'][(string)'name'] = 'max_taille_vignettes') .
		vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<li class="editer long_label editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'">' .
		_T('public|spip|ecrire:info_taille_maximale_images') .
		'</label>' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<iframe style=\'border:0;height:3em;overflow:hidden;\' src=\'' .
		parametre_url(parametre_url(parametre_url(self(),'action','tester_taille'),'arg','3000'),'time',interdire_scripts(eval('return '.'time()'.';'))) .
		'\'></iframe>
			</li>
			')) :
			'') .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'formats_graphiques', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
			<li class="editer fieldset">
				<fieldset><legend>' .
		_T('public|spip|ecrire:info_generation_miniatures_images') .
		'</legend>
					<p>' .
		_T('public|spip|ecrire:info_ajout_image') .
		'</p>
					<ul>
						' .
		vide($Pile['vars'][(string)'name'] = 'creer_preview') .
		vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<li class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
							' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<div class="choix">
								<input type="radio" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'" id="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_non" value="non"
									onchange="if ($(this).prop(\'checked\')) $(\'.editer_taille_preview\').hide(\'fast\');"
									' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		' /><label for="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_non">' .
		_T('public|spip|ecrire:item_choix_non_generation_miniature') .
		'</label>
							</div>
							<div class="choix">
								<input type="radio" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'" id="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui" value="oui"
									onchange="if ($(this).prop(\'checked\')) $(\'.editer_taille_preview\').show(\'fast\');"
									' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		' /><label for="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_oui">' .
		_T('public|spip|ecrire:item_choix_generation_miniature') .
		'</label>
							</div>
						</li>
						' .
		vide($Pile['vars'][(string)'name'] = 'taille_preview') .
		vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
		'<li class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'"' .
		(($t3 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'creer_preview', null),true) == 'oui')) ?'' :' '))))!=='' ?
				($t3 . 'style=\'display:none;\'') :
				'') .
		'>
							<label for="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'">' .
		_T('public|spip|ecrire:info_taille_maximale_vignette') .
		'</label>' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<input type=\'text\' name=\'' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'\' id=\'' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'\' value=\'' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
		'\' />
						</li>
					</ul>
				</fieldset>
			</li>
			')) :
			'') .
	'
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
</div>');

	return analyse_resultat_skel('html_83a8768c312ba69f9f59d40789f6cc45', $Cache, $page, '../prive/formulaires/configurer_reducteur.html');
}
?>