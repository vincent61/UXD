<?php

/*
 * Squelette : ../plugins-dist/petitions/formulaires/activer_petition_article.html
 * Date :      Wed, 17 Apr 2013 16:49:02 GMT
 * Compile :   Fri, 10 May 2013 10:13:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/petitions/formulaires/activer_petition_article.html
// Temps de compilation total: 5.426 ms
//

function html_608da0e63ad68cae4e823fa881f7553f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'\' id=\'formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'\'>
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_controle_petition', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	filtre_icone_horizontale_dist(generer_url_ecrire('controler_petition',(	'id_article=' .
		@$Pile[0]['id_article'])),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_controle_petition', null),true)),'petition') .
	'
')) :
		'') .
'
' .
vide($Pile['vars'][(string)'petition'] = interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'petition', null),true)) AND (interdire_scripts((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'petition', null),true),'statut') == 'publie')) ?' ' :'')))) ?' ' :''))) .
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
	<form action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'#formulaire_configurer_forums_article_moderation" method="post"><div>
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
		<ul>
			<li class=\'editer configurer_change_petition' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'change_petition'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'\'>
				<label for=\'change_petition\'>' .
	_T('petitions:info_fonctionnement_petition') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'change_petition')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<select name=\'change_petition\' id=\'change_petition\'>
					<option value=\'off\'' .
	(!(table_valeur($Pile["vars"], (string)'petition', null))  ?
			(' ' . ' ' . 'selected=\'selected\'') :
			'') .
	'>
					' .
	(table_valeur($Pile["vars"], (string)'petition', null) ? (	_T('bouton_radio_supprimer_petition') .
		'
						'):(	_T('bouton_radio_pas_petition') .
		'
					')) .
	'
					</option>
					<option value=\'on\'' .
	((table_valeur($Pile["vars"], (string)'petition', null))  ?
			(' ' . ' ' . 'selected=\'selected\'') :
			'') .
	'>
					' .
	(table_valeur($Pile["vars"], (string)'petition', null) ? (	_T('bouton_radio_petition_activee') .
		'
						'):(	_T('bouton_radio_activer_petition') .
		'
					')) .
	'
					</option>
				</select>
			</li>
			' .
	((table_valeur($Pile["vars"], (string)'petition', null))  ?
			(' ' . (	'
			<li class="editer editer_email_unique' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'email_unique'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<div class=\'choix\'>
					<input type="checkbox" name="email_unique" id="email_unique" value="oui"' .
		(($t3 = strval(interdire_scripts((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'petition', null),true),'email_unique') == 'oui')) ?' ' :''))))!=='' ?
				(' ' . $t3 . ' checked="checked"') :
				'') .
		' />
					<label for="email_unique">' .
		_T('petitions:bouton_checkbox_signature_unique_email') .
		'</label>
				</div>
			</li>
			<li class="editer editer_site_obli' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'site_obli'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<div class=\'choix\'>
					<input type="checkbox" name="site_obli" id="site_obli" value="oui"' .
		(($t3 = strval(interdire_scripts((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'petition', null),true),'site_obli') == 'oui')) ?' ' :''))))!=='' ?
				(' ' . $t3 . ' checked="checked"') :
				'') .
		'/>
					<label for="site_obli">' .
		_T('petitions:bouton_checkbox_indiquer_site') .
		'</label>
				</div>
			</li>
			<li class="editer editer_siteunique' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'siteunique'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<div class=\'choix\'>
					<input type="checkbox" name="siteunique" id="siteunique" value="oui"' .
		(($t3 = strval(interdire_scripts((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'petition', null),true),'siteunique') == 'oui')) ?' ' :''))))!=='' ?
				(' ' . $t3 . ' checked="checked"') :
				'') .
		'/>
					<label for="siteunique">' .
		_T('petitions:bouton_checkbox_signature_unique_site') .
		'</label>
				</div>
			</li>
			<li class="editer editer_message' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'message'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<div class=\'choix\'>
					<input type="checkbox" name="message" id="message" value="oui"' .
		(($t3 = strval(interdire_scripts((((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'petition', null),true),'message') == 'oui')) ?' ' :''))))!=='' ?
				(' ' . $t3 . ' checked="checked"') :
				'') .
		'/>
					<label for="message">' .
		_T('petitions:bouton_checkbox_envoi_message') .
		'</label>
				</div>
			</li>
			<li class="editer editer_texte_petition' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte_petition'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
					<label for="texte_petition">' .
		_T('petitions:texte_descriptif_petition') .
		'</label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte_petition')))!=='' ?
				('
					<span class=\'erreur_message\'>' . $t3 . '</span>
					') :
				'') .
		'<textarea name=\'texte_petition\' id=\'texte_petition\' rows=\'4\' cols=\'10\'>' .
		interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'petition', null),true),'texte')) .
		'</textarea>
			</li>')) :
			'') .
	'
		</ul>
		<p class=\'boutons\'><input class=\'submit\' type="submit" name="ok" value="' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'"/></p>
	</div></form>')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_608da0e63ad68cae4e823fa881f7553f', $Cache, $page, '../plugins-dist/petitions/formulaires/activer_petition_article.html');
}
?>