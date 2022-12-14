<?php
//1- Ecriture de la requête
$sql = "UPDATE enfants SET nom = :nom, prenom = :prenom ,email = :email ,telephone = :telephone,adresse = :adresse, entree_en_creche = :entree_en_creche, date_naissance = :date_naissance,  liste_attente = :liste_attente, prenom_nom_du_pere = :prenom_nom_du_pere, prenom_nom_de_la_mere = :prenom_nom_de_la_mere, url_img = :url_img WHERE id= :id ";

//2- On prépare la requête
$query = $pdo->prepare($sql);

//3- On associe chaque requête à sa valeur et on protège contre les injections sql
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->bindValue(':telephone', $tel, PDO::PARAM_STR);
$query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
$query->bindValue(':entree_en_creche', $entree, PDO::PARAM_STR);
$query->bindValue(':date_naissance', $naissance, PDO::PARAM_STR);
$query->bindValue(':liste_attente',$attente, PDO::PARAM_STR);
$query->bindValue(':prenom_nom_du_pere', $pere, PDO::PARAM_STR);
$query->bindValue(':prenom_nom_de_la_mere', $mere, PDO::PARAM_STR);
$query->bindValue(':url_img', $url_img, PDO::PARAM_STR);

//4- On exécute la requête
$query->execute();

//5- Redirection
$_SESSION["success"] = "Données modifiées avec succès";
header("Location: backoffice.php");