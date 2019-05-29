<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="bd">
    <br><br>
    <?php
    //include
    session_start();
    include "connection.php";
    //appel fonction
    $base =connect();
    $req="SELECT * from demande";
    $result =$base->query($req);
    ?>
    
<table class="table table-dark" >
    <thead>
        <tr><th>Nom</th><th>date</th><th  align="center" >action</th></tr>
    </thead>
    
    <tbody >
    <a href="../html/home.html" align="right"><button class="btn btn-danger">deconnecter</button></a>
            <?php
            while($dem = $result->fetchObject()){
                $id=$dem->id_demande;
            ?>
        <tr>
            <td><?php echo $dem->name ?></td>
            <td><?php echo $dem->date_d ?></td>
            <td><a href="ajout.php?id=<?php echo $id; ?>"><button class="btn btn-success" >Accepter</button></a></td>
            <td><a href="supp.php?id=<?php echo $id; ?>"><button class="btn btn-danger">annuler</button></a></td>
       </tr>
        <?php }?>
    </tbody>
</table>

</div>
</body>
</html>