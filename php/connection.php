<?php
function connect (){
   $server = "localhost";
   $base ="stage";
   $username ="root";
   $pass="";
   try {
       // code ..
       $con =new PDO("mysql:host=$server;dbname=$base",$username,$pass);

       return $con;
      }catch(PDOException $e){
        //exeception ..

    die("erreuuuuuuur !! :o ". $e->getMessage()." :o");
    }
    }
?>