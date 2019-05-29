<?php
//include
include "connection.php";
//appel fonction
session_start();
$base =connect();
$req="SELECT * from users";
$result =$base->query($req);
$i=-1;

$e=$_GET['email'];
$mdp=$_GET['password'];
if( $e=="aymenkefi1919@gmail.com" && $mdp=="0000")
{
  header("Location: doct.php");
}

else if($e=="blabla@gmail.com" && $mdp=="1234"){
    header("Location: sec.php");
}
else {
while($user = $result->fetchObject()){
if( $user->email==$e && $user->pass==$mdp)
{
    $i=1;
    $_SESSION['id']=$user->ID;
    $_SESSION['fn']=$user->fname;
    $_SESSION['ln']=$user->lname;
}
else{ $i=0;}
}
}

if($i==1)
{
   header("Location: pas.php");
}
else { 
    echo "compte mech mawjoud";
}

?>