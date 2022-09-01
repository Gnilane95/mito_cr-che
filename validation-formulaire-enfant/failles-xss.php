<?php
$nom = clear_xss($_POST["nom"]);
$prenom = clear_xss($_POST["prenom"]);
$naissance = clear_xss($_POST["naissance"]);
$entree = clear_xss($_POST["entree"]);
$pere = clear_xss($_POST["pere"]);
$mere = clear_xss($_POST["mere"]);
$adresse = clear_xss($_POST["adresse"]);
$email = clear_xss($_POST["email"]);
$tel = clear_xss($_POST["tel"]);
$attente = clear_xss($_POST["attente"]);
$url_img = $img_upload_path;
 
