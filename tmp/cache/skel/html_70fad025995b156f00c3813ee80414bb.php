<?php

/*
 * Squelette : ../plugins-dist/statistiques/formulaires/configurer_compteur.html
 * Date :      Sat, 27 Apr 2013 18:45:12 GMT
 * Compile :   Wed, 08 May 2013 16:42:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/formulaires/configurer_compteur.html
// Temps de compilation total: 3.169 ms
//

function html_70fad025995b156f00c3813ee80414bb($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_configurer formulaire_configurer_compteur\' id=\'formulaire_configurer_compteur\'>
	<h3 class=\'titrem\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('statistique-24.png'),'','cadre-icone')) .
_T('statistiques:info_forum_statistiques') .
' ' .
interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('confstat','../plugins-dist/statistiques/formulaires/configurer_compteur.html', $Pile[0]):'')) .
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
'#formulaire_configurer_compteur" method="post"><div>
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
			<li class=\'editer configurer_activer_statistiques' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_statistiques'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_statistiques')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				<div class=\'choix\'>
					<input class=\'checkbox\' type="checkbox" name="activer_statistiques" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'activer_statistiques', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="activer_statistiques"/>
					<label for="activer_statistiques">' .
_T('statistiques:item_gerer_statistiques') .
'</label>
				</div>
			</li>			
			<li class=\'editer configurer_activer_captures_referers' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_captures_referers'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				<div class=\'explication\'>' .
_T('statistiques:info_question_vignettes_referer') .
'</div>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_captures_referers')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				<div class=\'choix\'>
					<input class=\'checkbox\' type="checkbox" name="activer_captures_referers" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'activer_captures_referers', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="activer_captures_referers"/>
					<label for="activer_captures_referers">' .
_T('statistiques:info_question_vignettes_referer_oui') .
'</label>
				</div>
			</li>			

		</ul>
		<p class=\'boutons\'><input class=\'submit\' type="submit" name="ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'"/></p>
	</div></form>

</div>
<script type=\'text/javascript\'>
function actualise_capture_referers(){
	if (jQuery(\'#activer_statistiques\').prop(\'checked\'))
		jQuery(\'#formulaire_configurer_compteur li.configurer_activer_captures_referers\').show();
	else
		jQuery(\'#formulaire_configurer_compteur li.configurer_activer_captures_referers\').hide();
}
jQuery(document).ready(function(){
	jQuery(\'#activer_statistiques\').bind(\'change\',actualise_capture_referers);
	actualise_capture_referers();
});
</script>
');

	return analyse_resultat_skel('html_70fad025995b156f00c3813ee80414bb', $Cache, $page, '../plugins-dist/statistiques/formulaires/configurer_compteur.html');
}
?>