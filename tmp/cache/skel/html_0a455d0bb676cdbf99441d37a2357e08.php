<?php

/*
 * Squelette : plugins-dist/forum/formulaires/inc-login_forum.html
 * Date :      Sat, 27 Apr 2013 18:45:24 GMT
 * Compile :   Wed, 08 May 2013 10:06:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/forum/formulaires/inc-login_forum.html
// Temps de compilation total: 4.288 ms
//

function html_0a455d0bb676cdbf99441d37a2357e08($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<fieldset class="qui' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, (table_valeur($GLOBALS["visiteur_session"], (string)'auth', null) ? 'session_qui':'saisie_qui')))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<legend>' .
_T('forum:forum_qui_etes_vous') .
'</legend>
' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'auth', null)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"], (string)'nom', null))))))!=='' ?
			((	'<p class=\'explication\'>' .
		_T('forum:forum_votre_nom') .
		' <strong>') . $t2 . (	'</strong> <span class="details"><a href="' .
		executer_balise_dynamique('URL_LOGOUT',
	array(),
	array('plugins-dist/forum/formulaires/inc-login_forum.html','html_0a455d0bb676cdbf99441d37a2357e08','',4,$GLOBALS['spip_lang'])) .
		'" rel="nofollow">' .
		_T('public|spip|ecrire:icone_deconnecter') .
		'</a></span></p>')) :
			'') .
	'
	
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'auth', null)) ?'' :' ')))))!=='' ?
		($t1 . (	'
	<ul>
		<li class=\'editer saisie_session_nom\'>
			<label for="session_nom">' .
	_T('forum:forum_votre_nom') .
	'</label>
			<input type="text" class="text" name="session_nom" id="session_nom" value="' .
	invalideur_session($Cache, entites_html(((($a = table_valeur($GLOBALS["visiteur_session"], (string)'nom', null)) OR (is_string($a) AND strlen($a))) ? $a : invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'session_nom', null))))) .
	'" size="40" autocapitalize="off" autocorrect="off" />
			' .
	(($t2 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('accepter_inscriptions',null,false):'') == 'oui') ? ' ':''))))!=='' ?
			($t2 . (	'
			<span class="details"><a href="' .
		interdire_scripts(parametre_url(generer_url_public('login', ''),'url',self())) .
		'" rel="nofollow">' .
		_T('public|spip|ecrire:lien_connecter') .
		'</a></span>
			')) :
			'') .
	'
		</li>
		<li class=\'editer saisie_session_email\'>
			<label for="session_email">' .
	_T('forum:forum_votre_email') .
	'</label>
			<input type="text" class="text" name="session_email" id="session_email" value="' .
	invalideur_session($Cache, entites_html(((($a = table_valeur($GLOBALS["visiteur_session"], (string)'email', null)) OR (is_string($a) AND strlen($a))) ? $a : invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'session_email', null))))) .
	'" size="40" autocapitalize="off" autocorrect="off" />
		</li>
' .
	interdire_scripts((((include_spip('inc/config')?lire_config('forums_urlref',null,false):'') != 'non') ? (	'<li class=\'editer saisie_url_site' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_site'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'\'>
            <label for="url_site">' .
		_T('forum:forum_url') .
		'</label>
            ' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_site')))!=='' ?
				('<span class=\'erreur_message\'>' . $t3 . '</span>') :
				'') .
		'
            <input type="text" class="text" name="url_site" id="url_site" style="text-align: left;" dir="ltr" size="40" value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'url_site', null),true)) .
		'" autocapitalize="off" autocorrect="off" />
        </li>
'):'')) .
	'
	</ul>
')) :
		'') .
'
</fieldset>');

	return analyse_resultat_skel('html_0a455d0bb676cdbf99441d37a2357e08', $Cache, $page, 'plugins-dist/forum/formulaires/inc-login_forum.html');
}
?>