<?php

/*
 * Squelette : ../plugins-dist/compresseur/formulaires/configurer_compresseur.html
 * Date :      Sat, 27 Apr 2013 18:45:47 GMT
 * Compile :   Wed, 08 May 2013 16:42:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compresseur/formulaires/configurer_compresseur.html
// Temps de compilation total: 4.611 ms
//

function html_3779dc34dda44859be9f43da5045c326($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_configurer formulaire_configurer_compresseur\' id=\'formulaire_configurer_compresseur\'>
	<h3 class=\'titrem\'>' .
interdire_scripts(filtre_balise_img_dist(find_in_path('images/compresseur-24.png'),'','cadre-icone')) .
_T('compresseur:info_compresseur_titre') .
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

	<form action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'#formulaire_configurer_compresseur" method="post"><div>
		' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>
		<ul>
			' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_editer_auto_compress_http', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
			<li class=\'fieldset\'>
				<fieldset>
					<legend>' .
	_T('compresseur:titre_compresser_flux_http') .
	'</legend>
					<p>' .
	_T('compresseur:texte_compresseur_page') .
	'</p>
					<ul>
						<li class=\'editer configurer_auto_compress_http' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_http'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'\'>
							<label>' .
	_T('compresseur:info_question_activer_compresseur') .
	'</label>
							' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_http')))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
							<div class=\'choix\'>
								<input class=\'checkbox\' type="checkbox" name="auto_compress_http" value=\'oui\' ' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auto_compress_http', null),true) == 'oui') ? 'checked':''))))!=='' ?
			('checked="' . $t2 . '"') :
			'') .
	' id="auto_compress_http"/>
								<label for="auto_compress_http">' .
	_T('compresseur:item_compresseur_html') .
	'</label>
							</div>
						</li>			
					</ul>
				</fieldset>
			</li>
			')) :
		'') .
'
			<li class=\'fieldset\'>
				<fieldset>
					<legend>' .
_T('compresseur:titre_compacter_script_css') .
'</legend>
					<p>' .
_T('compresseur:texte_compacter_script_css') .
'</p>
					<ul>
						<li class=\'editer configurer_auto_compress_js' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_js'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
							<label>' .
_T('compresseur:info_question_activer_compactage_js') .
'</label>
							' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_js')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
							<div class=\'choix\'>
								<input class=\'checkbox\' type="checkbox" name="auto_compress_js" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auto_compress_js', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="auto_compress_js"/>
								<label for="auto_compress_js">' .
_T('compresseur:item_compresseur_js') .
'</label>
							</div>
							<div class=\'choix\'>
								<input class=\'checkbox\' type="checkbox" name="auto_compress_closure" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auto_compress_closure', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="auto_compress_closure"/>
								<label for="auto_compress_closure">' .
_T('compresseur:item_compresseur_closure') .
'</label>
							</div>
						</li>
						<li class=\'editer configurer_auto_compress_css' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_css'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
							<label>' .
_T('compresseur:info_question_activer_compactage_css') .
'</label>
							' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_css')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
							<div class=\'choix\'>
								<input class=\'checkbox\' type="checkbox" name="auto_compress_css" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auto_compress_css', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="auto_compress_css"/>
								<label for="auto_compress_css">' .
_T('compresseur:item_compresseur_css') .
'</label>
							</div>
						</li>
					</ul>
					<p class=\'notice\'>' .
_T('compresseur:texte_compacter_avertissement') .
'</p>
				</fieldset>
			</li>
		</ul>
		<p class=\'boutons\'><input class=\'submit\' type="submit" name="ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'"/></p>
	</div></form>

</div>
');

	return analyse_resultat_skel('html_3779dc34dda44859be9f43da5045c326', $Cache, $page, '../plugins-dist/compresseur/formulaires/configurer_compresseur.html');
}
?>