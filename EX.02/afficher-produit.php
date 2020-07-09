<?php

function connect_to_database()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "baseTest01";


    $pdo = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    foreach($pdo->query("SELECT * from produit")as $row)
    {
        echo"<ul>";
        foreach($row as $cle=>$valeur)
        {
            echo "<li>";
            echo $valeur;
            echo "</li>";

        }
        echo "</ul>";
    }
    return $pdo;

}
connect_to_database();