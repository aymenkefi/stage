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
    $req="SELECT * from rendezvous";
    $result =$base->query($req);
    ?>
    
<table class="table table-dark" >
    <thead>
        <tr><th>Nom</th><th>date</th></tr>
    </thead>
    
    <tbody >    
        <a href="../html/home.html" align="right"><button class="btn btn-danger">deconnecter</button></a>
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

</div>
</body>
</html>