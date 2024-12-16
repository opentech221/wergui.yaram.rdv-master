<?php

require_once'../model/db.php';
require_once'../model/function.php';

if (isset($_POST['valider'])){
    $prenom_sec = $_POST['prenom_sec'];
    $nom_sec = $_POST['nom_sec'];
    $dn_sec = $_POST['dn_sec'];
    $pseudo_sec = $_POST['pseudo_sec'];
    $mdp_sec = $_POST['mdp_sec'];
    ADDsecretaire($prenom_sec, $nom_sec, $dn_sec,$pseudo_sec, $mdp_sec);

    header("location:../view/src/admin/secretaire/liste-secretaire.php");
}

?>