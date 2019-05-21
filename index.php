<?php


require_once 'includes/fct.inc.php';//inclure un dossier dans l'application sans ce dossier ça commence pas (toute les fonctions nécessaire au projet)
require_once 'includes/class.pdogsb.inc.php';//inclu tout ce qui concerne la base de donné
session_start();//on demarre une cession par utilisateur(chaqun son tour)
$pdo = PdoGsb::getPdoGsb();//"$"sert au variable en php
$estConnecte = estConnecte();//contenu de estConnecte
require'vues/v_entete.php';
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);//filter_imput: filtre du contenu sur des paramettres enregistré afin de récupéré que ce que l'on désir
if ($uc && !$estConnecte) {//il faut qu'il yest uc et qu'il ne soit pas connecté
    $uc = 'connexion';
} elseif (empty($uc)) {//sinon uc va dans accueil
    $uc = 'accueil';
}

switch ($uc) {//test sur uc avec plusieurs choix 
case 'connexion'://uc doit aller dans connexion
    include 'controleurs/c_connexion.php';//inclure cette page php
    break;//fin de la case
case 'accueil':
    include 'controleurs/c_accueil.php';
    break;
case 'gererFrais':
    include 'controleurs/c_gererFrais.php';
    break;
case 'etatFrais':
    include 'controleurs/c_etatFrais.php';
    break;
case 'deconnexion':
    include 'controleurs/c_deconnexion.php';
    break;
case'validFrais':
    include'controleurs/c_validFrais.php';
    break;
}
require 'vues/v_pied.php';//inclu cette page


