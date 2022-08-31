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
    $sql = "SELECT * FROM enfants WHERE id=:id";
//4-Préparation de la requête
    $query = $pdo->prepare($sql);
//5-Sécuriser la requête contre les injections sql
    $query->bindValue(':id',$id, PDO::PARAM_INT);
//6-Exécuter la requête
    $query->execute();
//7-On stock tout dans une variable
    $enfant= $query->fetch();
    #debug_array($enfant);
    #$enfant=[];
    if (!$enfant) {
        $_SESSION["error"]="Infos non indisponible !";
        header("Location: backoffice.php");
    }
} else {
    $_SESSION["error"]="URL invalide !";
    header("Location: backoffice.php");
}

?>
<div class="">
        <div class="flex justify-center space-x-5  py-10">
            <p class="font-bold text-red-500 text-4xl"><?= $enfant['nom']; ?></p>
            <p class="font-bold text-red-500 text-4xl"><?= $enfant['prenom']; ?></p>
        </div>
        <div class="flex justify-center mx-36">
            <div class=" ">
                <?php
                if ($enfant["url_img"] != null) { ?>
                    <img src="<?= $enfant["url_img"] ?>" alt="<?=$enfant["url_img"]?>" class="w-48">
                <?php } ?>
            </div>
            <div class="">
                <ul class="">
                    <li class="pb-4 text-lg font-medium">Date de naissance : <?= $enfant['date_naissance']; ?></li>
                    <li class="pb-4 text-lg font-medium">Date d'entrée en creche : <?= $enfant['entree_en_creche']; ?></li>
                    <li class="pb-4 text-lg font-medium">Prénom et nom du père : <?= $enfant['prenom_nom_du_pere']; ?></li>
                    <li class="pb-4 text-lg font-medium">Prénom et nom de la mère : <?= $enfant['prenom_nom_de_la_mere']; ?></li>
                    <li class="pb-4 text-lg font-medium">Email : <?= $enfant['email']; ?></li>
                    <li class="pb-4 text-lg font-medium">Tel : <?= $enfant['telephone']; ?></li>
                    <li class="pb-4 text-lg font-medium">Adresse : <?= $enfant['adresse']; ?></li>
                    <li class="pb-4 text-lg font-medium">Liste d'attente : <?= $enfant['liste_attente']; ?></li>
                </ul>
            </div>
        </div>
</div>
    <!-- boutton -->
    <div class="">

        <div>
            <div class="flex justify-center ">
                <!-- boutton1 -->
                <div class="p-3">
                    <?php include ('partials/_modifyEnfant.php') ?>
                </div>
                <!-- boutton2 -->
                <div class="p-3">
                <?php include ('partials/_modalEnfants.php') ?>
                </div>
            </div>

        </div>
