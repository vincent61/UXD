<?php

/*
 * Squelette : ../prive/formulaires/declarer_bases.html
 * Date :      Sat, 27 Apr 2013 18:44:49 GMT
 * Compile :   Wed, 08 May 2013 16:41:46 GMT
 * Boucles :   _serv
 */ 

function BOUCLE_servhtml_470bcad73fa4e4a71c5ba440dad8fcb6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(table_valeur(@$Pile[0], (string)'_serveurs', null)));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_serv';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/formulaires/declarer_bases.html','html_470bcad73fa4e4a71c5ba440dad8fcb6','_serv',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						<option value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'>' .
interdire_scripts(_T($Pile[$SP]['valeur'])) .
'</option>
					');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/formulaires/declarer_bases.html
// Temps de compilation total: 15.278 ms
//

function html_470bcad73fa4e4a71c5ba440dad8fcb6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
	<h3 class="titrem">' .
_T('public|spip|ecrire:onglet_declarer_une_autre_base') .
'  (1/3)</h3>
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
(($t1 = strval(interdire_scripts(filtre_implode_dist(table_valeur(@$Pile[0], (string)'_bases_deja', null),', '))))!=='' ?
		((	'<p><strong>' .
	_T('public|spip|ecrire:config_info_base_sup_disponibles') .
	'</strong><br />
		') . $t1 . '
	</p>') :
		'') .
'
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
	'</div><p class="explication">' .
_T('public|spip|ecrire:config_info_base_sup') .
'</p>
		<ul>
			' .
vide($Pile['vars'][(string)'name'] = 'sql_serveur_db') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
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
_T('public|spip|ecrire:install_select_type_db') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				<select class="select" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">
					' .
BOUCLE_servhtml_470bcad73fa4e4a71c5ba440dad8fcb6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				</select>
				<p>' .
_T('public|spip|ecrire:install_types_db_connus') .
'</p>
				<p class="small">' .
_T('public|spip|ecrire:install_types_db_connus_avertissement') .
'</p>
			</li>
			<li class="fieldset connexion_db">
				<fieldset>
					<legend>' .
_T('public|spip|ecrire:install_adresse_base_hebergeur') .
'</legend>
					' .
vide($Pile['vars'][(string)'name'] = 'adresse_db') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
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
_T('public|spip|ecrire:entree_base_donnee_1') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
						<span class=\'erreur_message\'>' . $t1 . '</span>
						') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
					</li>
					' .
vide($Pile['vars'][(string)'name'] = 'login_db') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
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
_T('public|spip|ecrire:entree_login_connexion_1') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
						<span class=\'erreur_message\'>' . $t1 . '</span>
						') :
		'') .
'<input type="text" class="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
					</li>
					' .
vide($Pile['vars'][(string)'name'] = 'pass_db') .
vide($Pile['vars'][(string)'obli'] = '') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer editer_' .
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
_T('public|spip|ecrire:entree_mot_passe_1') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
						<span class=\'erreur_message\'>' . $t1 . '</span>
						') :
		'') .
'<input type="password" class="text password" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" value="' .
interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'"/>
					</li>
				</fieldset>
			</li>
		</ul>

	  ' .
'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span>
			<input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_suivant') .
'\' /></p>
	</div></form>

</div>
<script type="text/javascript">
$(document).ready(function() {
	if ($("#sql_serveur_db").attr("value").match("sqlite*"))
			$("#sql_serveur_db").parents(\'li\').siblings("li.connexion_db").hide();
		else
			$("#sql_serveur_db").parents(\'li\').siblings("li.connexion_db").show();
	$("#sql_serveur_db").change(function(){
		if ($(this).find("option:selected").attr("value").match("sqlite*"))
			$("#sql_serveur_db").parents(\'li\').siblings("li.connexion_db:visible").hide(\'fast\');
		else
			$("#sql_serveur_db").parents(\'li\').siblings("li.connexion_db:hidden").show(\'fast\');
	});
});
</script>');

	return analyse_resultat_skel('html_470bcad73fa4e4a71c5ba440dad8fcb6', $Cache, $page, '../prive/formulaires/declarer_bases.html');
}
?>