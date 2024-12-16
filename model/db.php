<?php

function getCONNEXION(){
    $host='localhost';
    $user='root';
    $psw='';
    $dbname='ges_rdv';
    $connex= mysqli_connect($host, $user,$psw, $dbname);
    
    return $connex;
}
function executeSQL($sql){
    $exec = mysqli_query(getCONNEXION(), $sql);
    return $exec;
}

?>