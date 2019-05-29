<?php
//include
include "connection.php";
//appel fonction
$base =connect();
//reccuperation des donnee
$f=$_GET['firstname'];
$l=$_GET['lastname'];
$e=$_GET['email'];
$p=$_GET['phone'];
$m=$_GET['password'];


$req="INSERT INTO users (fname,lname,phone,email, pass) VALUES ('$f','$l',$p,'$e','$m')";
//exec INSERT , UPDATE , DELETE
//type retour exec int|boolean
//trajaa int itha requ jawha behii : int fih nbr de ligne li aamaltelhom insertion
//trajaa boolean false en cas d echec
$resp= $base->exec($req) ;
if($resp==1){
    echo "donnees jawha behi";
}
else{
    echo"bara thabet fel code"; 
}
?>