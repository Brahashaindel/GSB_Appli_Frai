<?php


$estVisiteurConnecte = estVisiteurConnecte();
$estComptableConnecte = estComptableConnecte();

if ($estVisiteurConnecte) {
include
    'vues/v_accueilVisiteurs.php';
}
  elseif 
    ($estComptableConnecte){
     include 'vues/v_accueilComptable.php';
} else {
    include 'vues/v_connexion.php';
}