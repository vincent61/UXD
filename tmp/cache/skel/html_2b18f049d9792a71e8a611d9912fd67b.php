<?php

/*
 * Squelette : ../plugins-dist/urls_etendues/formulaires/configurer_urls_arbo.html
 * Date :      Wed, 15 May 2013 18:19:34 GMT
 * Compile :   Thu, 16 May 2013 17:32:33 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/urls_etendues/formulaires/configurer_urls_arbo.html
// Temps de compilation total: 31.180 ms
//

function html_2b18f049d9792a71e8a611d9912fd67b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
<h3 class=\'titrem\'>' .
_T('urls:titre_type_arbo') .
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
vide($Pile['vars'][(string)'fl'] = 'urls') .
'<form method=\'post\' action=\'' .
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
vide($Pile['vars'][(string)'name'] = 'URLS_ARBO_MIN') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('urls:label_urls_nb_min_car') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), constant('_URLS_ARBO_MIN'))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
				<p class="explication">' .
_T('urls:texte_urls_nb_min_car') .
'</p>
			</li>
			' .
vide($Pile['vars'][(string)'name'] = 'URLS_ARBO_MAX') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('urls:label_urls_nb_max_car') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), constant('_URLS_ARBO_MAX'))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
				<p class="explication">' .
_T('urls:texte_urls_nb_max_car') .
'</p>
			</li>
			' .
vide($Pile['vars'][(string)'name'] = 'url_arbo_sep_id') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('urls:label_url_sep_id') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), constant('_url_arbo_sep_id'))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
			</li>
			' .
vide($Pile['vars'][(string)'name'] = 'url_arbo_minuscules') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				' .
vide($Pile['vars'][(string)'val'] = '1') .
'<div class="choix">
					<input type="radio" class="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), constant('_url_arbo_minuscules')),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T('urls:label_url_minuscules_1') .
'</label>
				</div>
				' .
vide($Pile['vars'][(string)'val'] = '0') .
'<div class="choix">
					<input type="radio" class="radio" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'val', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), constant('_url_arbo_minuscules')),true) == table_valeur($Pile["vars"], (string)'val', null))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked"') :
		'') .
' />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
table_valeur($Pile["vars"], (string)'val', null) .
'">' .
_T('urls:label_url_minuscules_0') .
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
</div>
');

	return analyse_resultat_skel('html_2b18f049d9792a71e8a611d9912fd67b', $Cache, $page, '../plugins-dist/urls_etendues/formulaires/configurer_urls_arbo.html');
}
?>