<?php
session_start();
//include
include "connection.php";
//appel fonctions
$base =connect();
$req="SELECT * from users where ID=".$_SESSION['id'];
$result =$base->query($req);
while($user = $result->fetchObject()){
    echo $user->fname ."<br>" ;
    echo $user->lname ."<br>" ;
   echo $user->phone ."<br>" ;
}
?>
<html>
    <head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
    <a href="../html/home.html" align="right"><button class="btn btn-danger">deconnecter</button></a>
        <form name="DemandeForm" method="GET" action="demande.php" >
        <table align="center" >
            <tr>
                <td align="center">
                    <h2>Demander un rendez_vous</h2>
                </td>
            </tr>
            <tr>	
                <td>
                    <input type="date" name="d" placeholder="jj-mm-aaaa" >
                </td>	
            </tr>
            <br>
            <tr>
                
                <td>
                    <input type="submit" name="login" value="Valider" class="click">
                </td>
            </tr>
        </table>
        </form>
        <?php


    $req="SELECT * from rendezvous where id_urv=".$_SESSION['id'];
    $result =$base->query($req);
    ?>
<br><br>
<center> <h3>Vos Rendez-vous  </h3> </center> <br>
<table class="table table-dark" >
    <thead>
        <tr><th>Nom</th><th>date</th></tr>
    </thead>
    
    <tbody >    
            <?php
            while($rv = $result->fetchObject()){
            ?>
        <tr>
            <td><?php echo $rv->name ?></td>
            <td><?php echo $rv->date_rv ?></td>
        
       </tr>
        <?php }?>
    </tbody>
</table>
    </body>
</html>