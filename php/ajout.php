<?php
    //include
    include "connection.php";
    //appel fonction
    $base =connect();
    $req="INSERT INTO rendezvous SELECT * FROM demande WHERE id_demande=".$_GET['id'];
    $result =$base->query($req);
    $resp= $base->exec($req) ;
    if($resp==1){
        echo "donnees jawha behi";
    }
    else{
        echo"bara thabet fel code"; 
    }
?>