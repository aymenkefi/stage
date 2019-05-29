<?php
//include
session_start();
include "connection.php";
//appel fonction
$base =connect();
//reccuperation des donnee
$n=$_SESSION['fn']." ".$_SESSION['ln'];
$d=$_GET['d'];

$req="INSERT INTO demande (date_d,name,id_u) VALUES ('$d','$n',".$_SESSION['id'].")";


$resp= $base->exec($req) ;
if($resp==1){
    echo "donnees jawha behi";
    header("Location: pas.php");

}
else{
    echo"bara thabet fel code"; 
}
?>