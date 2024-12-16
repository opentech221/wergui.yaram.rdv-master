<?php

function ADDsecretaire($prenom_sec, $nom_sec, $dn_sec, $pseudo_sec,$mdp_sec){
    $sql = "INSERT INTO secretaire VALUES(NULL, '$prenom_sec', '$nom_sec', '$dn_sec', '$pseudo_sec', '$mdp_sec')";
    return executeSQL($sql);
}

?>