<?php
$title = "Ajouter_employe";
include('partials/_header.php');
include('helpers/functions.php');
//inclure PDO pour la connexion à la BDD
require_once("helpers/pdo.php");
//debug_array($_GET)

//Traitement du formulaire
//Création du formulaire
$error = [];
$errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
$success = false ;

if (!empty($_POST["submited"])) {
    //2-Faille xss
    require_once("validation-formulaire-employe/include-employe.php");
    // debug_array($_POST);
    if (count($error) == 0){
        require_once("sql-employe/ajouterEmploye-sql.php");
    }
    #var_dump (count($error));
}
?>
                <div class="pt-10 pl-20">
                    <?php 
                    $h1 = "Ajouter un employé "; 
                    include ('partials/_h1.php'); 
                    ?>
                </div>
<!-- formulaire employée -->
<form class="py-8 pl-20" method="POST" enctype="multipart/form-data">
    <!-- input nom -->
    <div class="p-5">

        <label class="text-red-500 font-semibold block pb-3" for="nom"> Nom :</label>
        <input name="nom" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" value="<?php if (!empty($_POST["nom"])) {
                                                                                                                echo $_POST["nom"];
                                                                                                            } ?>" />
        <p>
            <?php
            if (!empty($error["nom"])) {
                echo $error["nom"];
            } ?>
        </p>


    </div>
    <!-- input prenom -->
    <div class="p-5">

        <label class="text-red-500 font-semibold block pb-3" for="prenom"> Prenom :</label>
        <input name="prenom" type="text" placeholder="Prenom" class="input input-bordered w-full max-w-xs" value="<?php if (!empty($_POST["prenom"])) {
                                                                                                                        echo $_POST["prenom"];
                                                                                                                    } ?>" />
        <p>
            <?php
            if (!empty($error["prenom"])) {
                echo $error["prenom"];
            } ?>
        </p>
    </div>
    <!-- email -->
    <div class="p-5">
        <label class="text-red-500 font-semibold block pb-3" for="email"> Email :</label>
        <input name="email" type="text" placeholder="info@site.com" class="input input-bordered w-full max-w-xs" value="<?php if (!empty($_POST["email"])) {
                                                                                                                            echo $_POST["email"];
                                                                                                                        } ?>" />
        <p>
            <?php
            if (!empty($error["email"])) {
                echo $error["email"];
            } ?>
        </p>

    </div>
    <!-- Tel -->
    <div class="p-5">
        <label class="text-red-500 font-semibold block pb-3" for="tel"> Tel :</label>
        <input name="tel" type="text" placeholder="tel" class="input input-bordered w-full max-w-xs" value="<?php if (!empty($_POST["tel"])) {
                                                                                                                echo $_POST["tel"];
                                                                                                            } ?>" />
        <p>
            <?php
            if (!empty($error["tel"])) {
                echo $error["tel"];
            } ?>
        </p>

    </div>

    <!-- adress -->
    <div class="p-5">
        <label class="text-red-500 font-semibold block pb-3" for="adresse"> Adress :</label>
        <input name="adresse" type="text" placeholder="Adress" class="input input-bordered w-full max-w-xs" value="<?php if (!empty($_POST["adresse"])) {
                                                                                                                        echo $_POST["adresse"];
                                                                                                                    } ?>" />
        <p>
            <?php
            if (!empty($error["adresse"])) {
                echo $error["adresse"];
            } ?>
        </p>

    </div>
    <!-- type de contrat -->
    <?php
    $typeArray = [
        ["nom" => "CDD"],
        ["nom" => "CDI"],
        ["nom" => "INTERIM"],

    ];
    ?>

    <div class="p-5">
        <p class="text-red-500 font-semibold block pb-3">Type de contrat</p>
        <select class="select select-bordered w-full max-w-xs" name="type">
            <option disabled selected>Choisir</option>
            <?php foreach ($typeArray as $type) : ?>
                <option value="<?= $type["nom"] ?>" 
                    <?php
                        //Je sauvegarde en mémoire type selectionne
                        if (!empty($_POST["type"])) {
                            if ($_POST["type"] == $type["nom"]) echo 'selected="selected"';
                        } 
                    ?>> 
                    <?= $type["nom"] ?> 
                </option>
            <?php endforeach ?>

        </select>
        <p>
            <?php
            if (!empty($error["type"])) {
                echo $error["type"];
            } ?>
        </p>

    </div>
    <!-- date de debut de contrat -->

    <div class="p-5">

        <label class="text-red-500 font-semibold block pb-3" for="date"> Date de début de contrat :</label>
        <input name="date" type="date" value="DOMString" placeholder="date de debut de contrat" class="input input-bordered w-full max-w-xs" value="<?php if (!empty($_POST["date"])) {
                                                                                                                                                        echo $_POST["date"];
                                                                                                                                                    } ?>" />
        <p>
            <?php
            if (!empty($error["date"])) {
                echo $error["date"];
            } ?>
        </p>

    </div>
    <!-- upload img -->
    <div class="p-5">
                        <label for="url_img" class="text-red-500 font-semibold block pb-3">Téléchargez une image</label>
                        <input type="file" name="url_img" id="url_img" class="pt-3">
                        <p>
                            <?php
                            if(!empty($error["url_img"])){
                                echo $error["url_img"];
                            } ?>
                        </p>
                    </div>
    <!-- button -->
    <div class="p-5">
        <input type="submit" name="submited" value="Ajouter" class="btn btn-error">
    </div>

</form>
</body>