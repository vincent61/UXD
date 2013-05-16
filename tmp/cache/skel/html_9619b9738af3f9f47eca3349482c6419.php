<?php

/*
 * Squelette : squelettes/sommaire.html
 * Date :      Thu, 16 May 2013 09:35:31 GMT
 * Compile :   Thu, 16 May 2013 09:35:40 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/sommaire.html
// Temps de compilation total: 5.588 ms
//

function html_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
<title>' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
(($t1 = strval(interdire_scripts(textebrut(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		(' - ' . $t1) :
		'') .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/reset.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/sommaire.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
 <script>
    $(function () { 
    $(\'#rubriqueEnseignement .noire\').stop(true, true).slideUp(0);
    $(\'#rubriqueInternational .noire\').stop(true, true).slideUp(0);
    $(\'#rubriqueMetiersStages .noire\').stop(true, true).slideUp(0);
    $(\'#rubriqueEquipesRecherche .noire\').stop(true, true).slideUp(0);
    $(\'#rubriqueProjets .noire\').stop(true, true).slideUp(0);
    $(\'#rubriqueInformationsPratiques .noire\').stop(true, true).slideUp(0);

    $(\'#rubriqueEnseignement\').hover(function () {
    clearTimeout($.data(this, \'timer\'));
    $(\'#rubriqueEnseignement .noire\').stop(true, true).slideDown(200);
    }, function () {
    $.data(this, \'timer\', setTimeout($.proxy(function() {
    $(\'#rubriqueEnseignement .noire\').stop(true, true).slideUp(200);
    }, this), 200));
    });
    });

    $(function () {  
    $(\'#rubriqueInternational\').hover(function () {
    clearTimeout($.data(this, \'timer\'));
    $(\'#rubriqueInternational .noire\').stop(true, true).slideDown(200);
    }, function () {
    $.data(this, \'timer\', setTimeout($.proxy(function() {
    $(\'#rubriqueInternational .noire\').stop(true, true).slideUp(200);
    }, this), 200));
    });
    });
    $(function () {  

    $(\'#rubriqueMetiersStages\').hover(function () {
    clearTimeout($.data(this, \'timer\'));
    $(\'#rubriqueMetiersStages .noire\').stop(true, true).slideDown(200);
    }, function () {
    $.data(this, \'timer\', setTimeout($.proxy(function() {
    $(\'#rubriqueMetiersStages .noire\').stop(true, true).slideUp(200);
    }, this), 200));
    });

    });

    $(function () {  

    $(\'#rubriqueEquipesRecherche\').hover(function () {
    clearTimeout($.data(this, \'timer\'));
    $(\'#rubriqueEquipesRecherche .noire\').stop(true, true).slideDown(200);
    }, function () {
    $.data(this, \'timer\', setTimeout($.proxy(function() {
    $(\'#rubriqueEquipesRecherche .noire\').stop(true, true).slideUp(200);
    }, this), 200));
    });

    });

    $(function () {  

    $(\'#rubriqueProjets\').hover(function () {
    clearTimeout($.data(this, \'timer\'));
    $(\'#rubriqueProjets .noire\').stop(true, true).slideDown(200);
    }, function () {
    $.data(this, \'timer\', setTimeout($.proxy(function() {
    $(\'#rubriqueProjets .noire\').stop(true, true).slideUp(200);
    }, this), 200));
    });
    });
    $(function () {  

    $(\'#rubriqueInformationsPratiques\').hover(function () {
    clearTimeout($.data(this, \'timer\'));
    $(\'#rubriqueInformationsPratiques .noire\').stop(true, true).slideDown(200);
    }, function () {
    $.data(this, \'timer\', setTimeout($.proxy(function() {
    $(\'#rubriqueInformationsPratiques .noire\').stop(true, true).slideUp(200);
    }, this), 200));
    });
    });

        </script>
</head>

<body class="pas_surlignable page_sommaire">
<div class="page">

	<div class="main">
        
    <div id="header">
        <h1><span>U</span>ser e<span>X</span>perience <span>D</span>esign</h1> 
        <div class="langue">Français</div>
    </div>
        
    <div id="rubriques">
        <a id="rubriqueEnseignement" class="gradient" href="http://localhost/UXD/spip.php?page=page&id_rubrique=1">
              <div class="titre">Enseignement</div>
             <img src="./squelettes/images/enseignement.jpg"  width="290" height="157">
              <img class="noire" src="./squelettes/images/noire.png"width="290" >
        </a>
        
        <a id="rubriqueInternational" class="gradient" href="http://localhost/UXD/spip.php?page=page&id_rubrique=2">
                <div class="titre">International</div>
                <img src="./squelettes/images/international.jpg" width="290" height="157">
                <img class="noire" src="./squelettes/images/noire.png"width="290">
        </a>
        
        <a id="rubriqueMetiersStages" class="gradient" href="http://localhost/UXD/spip.php?page=page&id_rubrique=7">
                <div class="titre">Métiers et stages</div>
                <img src="./squelettes/images/metiersStages.jpg" width="290" height="157">
                <img class="noire" src="./squelettes/images/noire.png"  width="290" height="157">
        </a>
        
        <a id="rubriqueEquipesRecherche" class="gradient" href="http://localhost/UXD/spip.php?page=page&id_rubrique=12">
                <div class="titre">Equipes de recherche</div>
                <img src="./squelettes/images/equipesRecherche.jpg" width="290" height="157">
                <img class="noire" src="./squelettes/images/noire.png"  width="290" height="157">
        </a>
        
        <a id="rubriqueProjets" class="gradient" href="http://localhost/UXD/spip.php?page=page&id_rubrique=16">
                <div class="titre">Projets</div>
                <img src="./squelettes/images/projets.jpg" width="290" height="157">
                <img class="noire" src="./squelettes/images/noire.png"  width="290" height="157">
        </a>
        
        <a id="rubriqueInformationsPratiques" class="gradient" href="http://localhost/UXD/spip.php?page=page&id_rubrique=20">
                <div class="titre">Informations pratiques</div>
                <img src="./squelettes/images/informationsPratiques.jpg" width="290" height="157">
                <img class="noire" src="./squelettes/images/noire.png"  width="290" height="157">
        </a>
    </div>
    <div id="footer"> 
        <div class="bienvenue"> 
            Mot de Bienvenue        
        </div>
         <div class="logoUTC"> 
             <img src="./squelettes/images/logo_UTC.jpg" width="163" height="57">
         </div>
        
    </div>
	</div><!--.main-->	 
</div><!--.page-->
</body>
</html>
');

	return analyse_resultat_skel('html_9619b9738af3f9f47eca3349482c6419', $Cache, $page, 'squelettes/sommaire.html');
}
?>