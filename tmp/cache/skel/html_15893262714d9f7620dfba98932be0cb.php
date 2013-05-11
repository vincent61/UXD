<?php

/*
 * Squelette : ../prive/objets/liste/auteurs_associer.html
 * Date :      Sat, 27 Apr 2013 18:44:57 GMT
 * Compile :   Wed, 08 May 2013 14:06:39 GMT
 * Boucles :   _lettre, _liste_aut
 */ 

function BOUCLE_lettrehtml_15893262714d9f7620dfba98932be0cb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'exclus', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "auteurs", "?","",array (
  'tout' => true,
  'criteres' => 
  array (
    'id_auteur' => true,
  ),
),"id_auteur");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_lettre']))?$Pile[0]['tri'.'_lettre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_lettre']))?$Pile[0]['sens'.'_lettre']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lettre']))?$Pile[0]['tri'.'_lettre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_lettre';
		$command['from'] = array('auteurs' => 'spip_auteurs','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array('resultats' => array('auteurs','id','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("auteurs.id_auteur",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"auteurs.nom");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array(
			array('NOT', sql_in('auteurs.id_auteur',sql_quote($in))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('auteurs.statut',sql_quote($in1)) : 
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'],'','varchar(255) NOT NULL DEFAULT \'0\'')))), 
			array('REGEXP', 'auteurs.id_auteur', sql_quote((table_valeur($Pile["vars"], (string)'afficher_lettres', null) ? '.*':'A'))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/auteurs_associer.html','html_15893262714d9f7620dfba98932be0cb','_lettre',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_lettre']['compteur_boucle'] = 0;
	$Numrows['_lettre']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_lettre']['compteur_boucle']++;
		$t0 .= (
((unique(initiale(extraire_multi($Pile[$SP]['nom']))))  ?
		('
		' . ' ' . (	'
		' .
	vide($Pile['vars'][(string)'p'] = concat(table_valeur($Pile["vars"], (string)'p', null),afficher_initiale(ancre_url(parametre_url(self(),'debutauta',(	'@' .
				$Pile[$SP]['id_auteur'])),'paginationauta'),initiale(extraire_multi($Pile[$SP]['nom'])),$Numrows['_lettre']['compteur_boucle'],table_valeur($Pile["vars"], (string)'debut', null),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true))))) .
	'
		')) :
		'') .
vide($Numrows['_lettre']['compteur_boucle']=$iter->skip(interdire_scripts(moins(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true),(($Numrows['_lettre']['compteur_boucle'] == '1') ? '2':'1'))),$Numrows['_lettre']['total'])));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_liste_authtml_15893262714d9f7620dfba98932be0cb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'exclus', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "auteurs", "?","",array (
  'tout' => true,
  'criteres' => 
  array (
    'id_auteur' => true,
  ),
),"id_auteur");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debutauta']) ? $Pile[0]['debutauta'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_liste_aut';
		$command['from'] = array('auteurs' => 'spip_auteurs','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array('resultats' => array('auteurs','id','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("auteurs.id_auteur",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"auteurs.nom",
		"auteurs.statut",
		"auteurs.bio",
		"auteurs.nom AS titre_rang",
		"auteurs.email");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array(
			array('NOT', sql_in('auteurs.id_auteur',sql_quote($in))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('auteurs.statut',sql_quote($in1)) : 
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'],'','varchar(255) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/auteurs_associer.html','html_15893262714d9f7620dfba98932be0cb','_liste_aut',11,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_aut']['compteur_boucle'] = 0;
	$Numrows['_liste_aut']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debutauta']) ? $Pile[0]['debutauta'] : _request('debutauta');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debutauta'] = quete_debut_pagination('id_auteur',$Pile[0]['@id_auteur'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_aut']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_liste_aut']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_aut']['total'] - 1);
	$Numrows['_liste_aut']['grand_total'] = $Numrows['_liste_aut']['total'];
	$Numrows['_liste_aut']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_aut']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_aut']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:texte_vide');
	$l2 = _T('public|spip|ecrire:lien_ajouter_auteur');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_aut']['compteur_boucle']++;
		if ($Numrows['_liste_aut']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_aut']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_liste_aut']['compteur_boucle'],'row_odd','row_even') .
(($t1 = strval(unique((calcul_exposer($Pile[$SP]['id_auteur'], 'id_auteur', $Pile[0], '', 'id_auteur', '') ? 'on' : ''))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(unique(((initiale(extraire_multi($Pile[$SP]['nom'])) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'i', null),true))) ? 'on':''))))!=='' ?
		(' ' . $t1) :
		'') .
'">
			<td class=\'statut\'>' .
interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'auteur')) .
'</td>
			<td class=\'nom' .
(($t1 = strval(interdire_scripts(((typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) ?'' :' '))))!=='' ?
		(' ' . $t1 . 'vide') :
		'') .
'\'>' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'20','20')) .
'<a href="' .
generer_url_entite($Pile[$SP]['id_auteur'],'auteur') .
'"' .
(($t1 = strval(interdire_scripts(attribut_html(couper($Pile[$SP]['bio'],'200')))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
(($t1 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
		($t1 . '. ') :
		'') .
interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : $l1)) .
'</a></td>
			<td class=\'email\'>' .
(($t1 = strval(interdire_scripts($Pile[$SP]['email'])))!=='' ?
		('<a href=\'mailto:' . $t1 . (	'\'>' .
	interdire_scripts(couper($Pile[$SP]['email'],'30')) .
	'</a>')) :
		'') .
'</td>
			<td class=\'action\'><button class="button" name="ajouter_lien[auteur-' .
$Pile[$SP]['id_auteur'] .
'-' .
interdire_scripts(@$Pile[0]['objet']) .
'-' .
@$Pile[0]['id_objet'] .
']" value="+">' .
$l2 .
' ' .
interdire_scripts(filtre_balise_img_dist(chemin_image('ajouter-12.png'),'+')) .
'</button></td>
		</tr>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/liste/auteurs_associer.html
// Temps de compilation total: 28.587 ms
//

function html_15893262714d9f7620dfba98932be0cb($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][(string)'defaut_tri'] = array('statut' => '1', 'multi nom' => '1', 'site' => '1', 'compteur_articles' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
'
' .
vide($Pile['vars'][(string)'exclus'] = interdire_scripts(lister_objets_lies(entites_html(table_valeur(@$Pile[0], (string)'objet_source', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_objet_lien', null),true))))) .
vide($Pile['vars'][(string)'debut'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'debutauta', null), interdire_scripts(eval('return '.'_request("debutauta");'.';'))),true))) .
'<input type="hidden" name="debutauta" value="' .
table_valeur($Pile["vars"], (string)'debut', null) .
'" />
' .
(($t1 = BOUCLE_liste_authtml_15893262714d9f7620dfba98932be0cb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'

' .
		vide($Pile['vars'][(string)'debut'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'debutauta', null), interdire_scripts(eval('return '.'_request("debutauta");'.';'))),true))) .
		vide($Pile['vars'][(string)'afficher_lettres'] = interdire_scripts(((((($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'') == 'multi nom')) ?' ' :''))) .
		filtre_pagination_dist($Numrows["_liste_aut"]["grand_total"],
 		'auta',
		isset($Pile[0]['debutauta'])?$Pile[0]['debutauta']:intval(_request('debutauta')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true))))!=='' ?
				((	'<h3>' .
			_T('public|spip|ecrire:info_resultat_recherche') .
			' &laquo;') . $t3 . '&raquo;</h3>') :
				'') .
		'
<div class="liste-objets liste-objets-associer auteurs">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_aut']['grand_total'])
			? $Numrows['_liste_aut']['grand_total'] : $Numrows['_liste_aut']['total']),'info_1_auteur','info_nb_auteurs')))))!=='' ?
				('<caption><span class="caption"><strong>' . $t3 . (	'</strong>
<span class="recherche">
	<label for="recherche-' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
			'">' .
			_T('public|spip|ecrire:info_rechercher_02') .
			'</label>
	<input type="text" class="recherche" name="recherche" id="recherche-' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
			'" value="' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)) .
			'" />
	<input type="submit" class="tout_voir" name="tout_voir" value="' .
			_T('public|spip|ecrire:info_tout_afficher') .
			'" />
</span>
</span>
</caption>')) :
				'') .
		'
	<thead>

		' .
		vide($Pile['vars'][(string)'p'] = '') .
		(($t3 = BOUCLE_lettrehtml_15893262714d9f7620dfba98932be0cb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				($t3 . (($t5 = strval(vide($Pile['vars'][(string)'p'] = concat(table_valeur($Pile["vars"], (string)'p', null),afficher_initiale('','',$Numrows['_lettre']['total'],table_valeur($Pile["vars"], (string)'debut', null),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))))))!=='' ?
						('
		' . $t5) :
						'')) :
				'') .
		'
		' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'p', null)))!=='' ?
				('<tr><td colspan="5"><p class=\'pagination\'>' . $t3 . '</p></td></tr>') :
				'') .
		'
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_aut',$s?(strpos('< >','statut')-1):'statut'),interdire_scripts(filtre_balise_img_dist(chemin_image('auteur-0minirezo-16.png'),attribut_html(_T('public|spip|ecrire:lien_trier_statut')))),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'nom\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('multi nom',array('>','<')))?'sens':'tri').'_liste_aut',$s?(strpos('< >','multi nom')-1):'multi nom'),_T('public|spip|ecrire:info_nom'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','multi nom')-1)):((($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')=='multi nom'),'ajax') .
		'</th>
			<th class=\'email\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('email',array('>','<')))?'sens':'tri').'_liste_aut',$s?(strpos('< >','email')-1):'email'),_T('public|spip|ecrire:email'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','email')-1)):((($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'multi nom'),true)))?tri_protege_champ($t):'')=='email'),'ajax') .
		'</th>
			<th class=\'action\' scope=\'col\'>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_aut"]["grand_total"],
 		'auta',
		isset($Pile[0]['debutauta'])?$Pile[0]['debutauta']:intval(_request('debutauta')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((	'
' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
<div class="liste-objets liste-objets-associer auteurs caption-wrap">
<span class="caption"><strong>' .
		_T('info_recherche_auteur_zero',array('cherche_auteur' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)))) .
		'</strong>
<span class="recherche">
	<label for="recherche-' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
		'">' .
		_T('public|spip|ecrire:info_rechercher_02') .
		'</label>
	<input type="text" class="recherche" name="recherche" id="recherche-' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
		'" value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)) .
		'" />
	<input type="submit" class="tout_voir" name="tout_voir" value="' .
		_T('public|spip|ecrire:info_tout_afficher') .
		'" />
</span>
</span>
</div>
')) :
			'')))) .
'
');

	return analyse_resultat_skel('html_15893262714d9f7620dfba98932be0cb', $Cache, $page, '../prive/objets/liste/auteurs_associer.html');
}
?>