<?php
//1-Requête pour récupérer les enfants
$sql = "SELECT * FROM enfants";

//2-on prépare la requête (preformatter une requête)
$query = $pdo->prepare($sql);
//3-Execute ma requête
$query->execute();
//4-On stock le résultat dans une variable
$enfants = $query->fetchAll();