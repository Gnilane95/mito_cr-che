<!-- header -->
<?php
//Démarrage de la session
// session_start();
// $title = "Accueil";
// include ('partials/_header.php');
include ('helpers/functions.php');
#include ('validation-formulaire/input-upload.php');
//inclure PDO pour la connexion à la BDD
require_once ("helpers/pdo.php");
//debug_array($_GET)

//1- on vérifie que id existant du jeu
    //a-On vérifie que l'id existe (ou pas vide) et qu'il est numérique
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
//2-Je nettoie mon id contre xss
    $id = clear_xss($_GET['id']);
//3-faire la requête vers BDD
    $sql = "SELECT * FROM employes WHERE id=:id";
//4-Préparation de la requête
    $query = $pdo->prepare($sql);
//5-Sécuriser la requête contre les injections sql
    $query->bindValue(':id',$id, PDO::PARAM_INT);
//6-Exécuter la requête
    $query->execute();
//7-On stock tout dans une variable
    $employe= $query->fetch();
    #debug_array($employe);
    #$employe=[];
    if (!$employe) {
        $_SESSION["error"]="Infos non disponibles";
        header("Location: backList-employes.php");
    }
} else {
    $_SESSION["error"]="URL invalide !";
    header("Location: backList-employes.php");
}

?>
<div class="">
        <div class="flex justify-center space-x-5  py-10">
            <p class="font-bold text-red-500 text-4xl"><?= $employe['nom']; ?></p>
            <p class="font-bold text-red-500 text-4xl"><?= $employe['prenom']; ?></p>
        </div>
        <div class="flex justify-center">
            <div class=" ">
                <?php
                if ($employe["url_img"] != null) { ?>
                    <img src="<?= $employe["url_img"] ?>" alt="<?=$employe["url_img"]?>" class="max-w-md">
                <?php } ?>
            </div>
            <div class="">
                <ul class="mx-36">
                    <li class="pb-4 text-lg font-medium">E-mail : <?= $employe['email']; ?></li>
                    <li class="pb-4 text-lg font-medium">Tel : <?= $employe['telephone']; ?></li>
                    <li class="pb-4 text-lg font-medium">Adresse : <?= $employe['adresse']; ?></li>
                    <li class="pb-4 text-lg font-medium">Date de début de contrat : <?= $employe['date_debut_contrat']; ?></li>
                    <li class="pb-4 text-lg font-medium">Type de contrat : <?= $employe['type_contrat']; ?></li>
                  
                </ul>
            </div>
        </div>
</div>
    <!-- boutton -->
<div class="flex justify-center pt-5">
    <!-- boutton1 -->
    <div class="pr-3">
        <?php include ('partials/_modifyEmploye.php') ?>
    </div>
    <!-- boutton2 -->
    <div class="">
        <?php include ('partials/_modalEmployes.php') ?>
    </div>
</div>

        
