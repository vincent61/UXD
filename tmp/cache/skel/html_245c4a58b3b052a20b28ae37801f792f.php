<?php

/*
 * Squelette : ../prive/modeles/object_jobs_list.html
 * Date :      Sat, 27 Apr 2013 18:44:50 GMT
 * Compile :   Wed, 08 May 2013 09:34:53 GMT
 * Boucles :   _jobs
 */ 

function BOUCLE_jobshtml_245c4a58b3b052a20b28ae37801f792f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_jobs']) ? $Pile[0]['debut_jobs'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'jobs';
		$command['id'] = '_jobs';
		$command['from'] = array('jobs' => 'spip_jobs','L1' => 'spip_jobs_liens');
		$command['type'] = array();
		$command['groupby'] = array("jobs.id_job");
		$command['select'] = array("jobs.date",
		"jobs.id_job",
		"jobs.descriptif");
		$command['orderby'] = array('jobs.date');
		$command['join'] = array('L1' => array('jobs','id_job'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'],'','varchar(25) NOT NULL DEFAULT \'\'')), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/modeles/object_jobs_list.html','html_245c4a58b3b052a20b28ae37801f792f','_jobs',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_jobs']['compteur_boucle'] = 0;
	$Numrows['_jobs']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_jobs']) ? $Pile[0]['debut_jobs'] : _request('debut_jobs');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_jobs'] = quete_debut_pagination('id_job',$Pile[0]['@id_job'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_jobs']['total']-1)/(5))*(5)));
	$fin_boucle = min(($tout ? $Numrows['_jobs']['total'] : $debut_boucle + 4), $Numrows['_jobs']['total'] - 1);
	$Numrows['_jobs']['grand_total'] = $Numrows['_jobs']['total'];
	$Numrows['_jobs']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_jobs']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_jobs']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:annuler');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_jobs']['compteur_boucle']++;
		if ($Numrows['_jobs']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_jobs']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
			<li class="item">
				<div class="date">' .
interdire_scripts(date_relative(normaliser_date($Pile[$SP]['date']))) .
'</div>
				' .
(($t1 = strval(interdire_scripts(PtoBR(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
		('<strong class="description">' . $t1 . '</strong>') :
		'') .
'
				' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('annuler', 'job', invalideur_session($Cache, $Pile[$SP]['id_job']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
				<div class="actions">' .
	bouton_action($l1,invalideur_session($Cache, generer_action_auteur('annuler_job',invalideur_session($Cache, $Pile[$SP]['id_job']),invalideur_session($Cache, self()))),'ajax') .
	'</div>
				')) :
		'') .
'
			</li>
		');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/modeles/object_jobs_list.html
// Temps de compilation total: 20.588 ms
//

function html_245c4a58b3b052a20b28ae37801f792f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_jobshtml_245c4a58b3b052a20b28ae37801f792f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="jobs_liste jobs_liste_' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) .
		'">
	' .
		filtre_pagination_dist($Numrows["_jobs"]["grand_total"],
 		'_jobs',
		isset($Pile[0]['debut_jobs'])?$Pile[0]['debut_jobs']:intval(_request('debut_jobs')),
		5, false, '', '', array()) .
		'
	<ul class="liste_items jobs">
		') . $t1 . (	'
	</ul>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_jobs"]["grand_total"],
 		'_jobs',
		isset($Pile[0]['debut_jobs'])?$Pile[0]['debut_jobs']:intval(_request('debut_jobs')),
		5, true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
	</div>
')) :
		'');

	return analyse_resultat_skel('html_245c4a58b3b052a20b28ae37801f792f', $Cache, $page, '../prive/modeles/object_jobs_list.html');
}
?>