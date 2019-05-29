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

    </head>
    <body>
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
    </body>
</html>