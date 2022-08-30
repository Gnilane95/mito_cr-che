<?php
//1- Ecriture de la requête
$sql = "UPDATE employes SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, adresse = :adresse, date_debut_contrat = :date_debut_contrat, type_contrat= :type_contrat, updated_at = NOW() WHERE id= :id";

//2- On prépare la requête
$query = $pdo->prepare($sql);

//3- On associe chaque requête à sa valeur et on protège contre les injections sql
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->bindValue(':telephone', $tel, PDO::PARAM_STMT);
$query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
$query->bindValue(':date_debut_contrat', $date, PDO::PARAM_STMT);
$query->bindValue(':type_contrat', $type, PDO::PARAM_STR);

//4- On exécute la requête
$query->execute();

//5- Redirection
$_SESSION["success"] = "Le jeu a bien été modifié";
header("Location: backList-employes.php");