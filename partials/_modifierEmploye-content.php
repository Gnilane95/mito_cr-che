<?php
$title = "Ajouter_Employe";
include ('partials/_header.php');
include ('helpers/functions.php');
//inclure PDO pour la connexion à la BDD
require_once ("helpers/pdo.php");
//debug_array($_GET)

//Traitement du formulaire
//Création du formulaire
$error = [];
$errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
$success = false ;

//1- Je récupère données enfant avec le bon id
    //a-On vérifie que l'id existe (ou pas vide) et qu'il est numérique
    if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
        //b-Je nettoie mon id contre xss
            $id = clear_xss($_GET['id']);
        //c-faire la requête vers BDD
            $sql = "SELECT * FROM employes WHERE id=:id";
        //d-Préparation de la requête
            $query = $pdo->prepare($sql);
        //e-Sécuriser la requête contre les injections sql
            $query->bindValue(':id',$id, PDO::PARAM_INT);
        //f-Exécuter la requête
            $query->execute();
        //g-On stock dans une variable employe récupéré
            $employe= $query->fetch();
            #debug_array($employe);
            #$employe=[];
            if (!$employe) {
                $_SESSION["error"]="employe non enregistré!";
                header("Location: backList-employes.php");
            }
        } else {
            $_SESSION["error"]="URL invalide !";
            header("Location: backList-employes.php");
        };

if (!empty($_POST["submited"])) {
    //2-Faille xss
        require_once("validation-formulaire-employe/include-employe.php");
        #debug_array($_FILES);
        if (count($error) == 0){
            require_once("sql-employe/updatEmploye-sql.php");
        }
        #var_dump (count($error));
}

?>
                <div class="pt-10 pl-20">
                    <?php 
                    $h1 = "Ajouter un employe "; 
                    include ('partials/_h1.php'); 
                    ?>
                </div>
                <!-- formulaire Enfant -->
                <form class="py-8 pl-20" method="POST">
                    <!-- input nom -->
                    <div class="p-5">

                        <label class="text-red-500 font-semibold block pb-3" for="nom"> Nom :</label>
                        <input name="nom" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" value="<?= $employe["nom"] ?>" />
                        <p>
                            <?php
                            if(!empty($error["nom"])){
                                echo $error["nom"];
                            } ?>
                        </p>
                    </div>
                    <!-- input prenom -->
                    <div class="p-5">

                        <label class="text-red-500 font-semibold block pb-3" for="prenom"> Prenom :</label>
                        <input name="prenom" type="text" placeholder="Prenom" class="input input-bordered w-full max-w-xs" value="<?= $employe["prenom"] ?>" />
                        <p>
                            <?php
                            if(!empty($error["prenom"])){
                                echo $error["prenom"];
                            } ?>
                        </p>
                    </div>
                    <!-- email -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="email"> E-mail :</label>
                        <input name="email" type="email" placeholder="info@site.com" class="input input-bordered w-full max-w-xs" value="<?= $employe["email"] ?>" />
                        <p>
                            <?php
                            if(!empty($error["email"])){
                                echo $error["email"];
                            } ?>
                        </p>

                    </div>
                    <!-- Tel -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="tel"> Tel :</label>
                        <input name="tel" type="tel" placeholder="00 00 00 00 00" class="input input-bordered w-full max-w-xs" value="<?= $employe["telephone"] ?>">
                        <p>
                            <?php
                            if(!empty($error["tel"])){
                                echo $error["tel"];
                            } ?>
                        </p>

                    </div>
                    <!-- adress -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="adresse"> Adresse :</label>
                        <input name="adresse" type="text" class="input input-bordered w-full max-w-xs"
                         value="<?= $employe["adresse"] ?>"  />
                        <p>
                            <?php
                            if(!empty($error["adresse"])){
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
                                <option value="<?= $type["nom"] ?>" <?php if ($employe["type_contrat"] == $type["nom"]) echo 'selected = "selected"'; ?> > 
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
                    <!-- input date début contrat -->
                    <div class="p-5">
                        <?php 
                            $dateContrat = date("Y-m-d", strtotime($employe['date_debut_contrat']))
                        ?>
                        <label class="text-red-500 font-semibold block pb-3" for="date"> Date de début de contrat :</label>
                                <input name="date" type="date" placeholder="" class="input input-bordered w-full max-w-xs" value="<?= $dateContrat ?>" />
                                <p>
                                    <?php
                                    if (!empty($error["date"])) {
                                        echo $error["date"];
                                    } ?>
                                </p>

                    </div>
                    <div class="p-5">
                        <input type="submit" name="submited" value="Modifier" class="btn btn-error">
                    </div>


                </form>
            </div>
        </div>
    </body>
</html>