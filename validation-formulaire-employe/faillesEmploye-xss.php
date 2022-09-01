<?php
$nom = clear_xss($_POST["nom"]);
$prenom = clear_xss($_POST["prenom"]);
$email = clear_xss($_POST["email"]);
$adresse = clear_xss($_POST["adresse"]);
$tel = clear_xss($_POST["tel"]);
$date = clear_xss($_POST["date"]);
$type = !empty($_POST["type"]) ? clear_xss($_POST["type"]) : [] ;
$url_img = $img_upload_path ;

