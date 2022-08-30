<?php
$title = "Ajouter_Enfant";
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
            $sql = "SELECT * FROM enfants WHERE id=:id";
        //d-Préparation de la requête
            $query = $pdo->prepare($sql);
        //e-Sécuriser la requête contre les injections sql
            $query->bindValue(':id',$id, PDO::PARAM_INT);
        //f-Exécuter la requête
            $query->execute();
        //g-On stock dans une variable enfants récupéré
            $enfant= $query->fetch();
            #debug_array($enfant);
            #$enfant=[];
            if (!$enfant) {
                $_SESSION["error"]="Ce jeu est indisponible !";
                header("Location: backoffice.php");
            }
        } else {
            $_SESSION["error"]="URL invalide !";
            header("Location: backoffice.php");
        };

if (!empty($_POST["submited"])) {
    //2-Faille xss
        require_once("validation-formulaire-enfant/include.php");
        #debug_array($_FILES);
        if (count($error) == 0){
            require_once("sql-enfant/updatEnfant-sql.php");
        }
        #var_dump (count($error));
}

?>
                <div class="pt-10 pl-20">
                    <?php 
                    $h1 = "Ajouter un enfant "; 
                    include ('partials/_h1.php'); 
                    ?>
                </div>
                <!-- formulaire Enfant -->
                <form class="py-8 pl-20" method="POST">
                    <!-- input nom -->
                    <div class="p-5">

                        <label class="text-red-500 font-semibold block pb-3" for="nom"> Nom :</label>
                        <input name="nom" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" value="<?= $enfant["nom"] ?>" />
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
                        <input name="prenom" type="text" placeholder="Prenom" class="input input-bordered w-full max-w-xs" value="<?= $enfant["prenom"] ?>" />
                        <p>
                            <?php
                            if(!empty($error["prenom"])){
                                echo $error["prenom"];
                            } ?>
                        </p>
                    </div>
                    <!-- input date de naissance -->
                    <div class="p-5">
                        <?php 
                            $dateNaissance = date("Y-m-d", strtotime($enfant['date_naissance']))
                        ?>

                        <label class="text-red-500 font-semibold block pb-3" for="naissance"> Date de naissance :</label>
                        <input class="input input-bordered w-full max-w-xs" name="naissance" type="date" value="<?=  $dateNaissance ?>"/>
                        <p>
                            <?php
                            if(!empty($error["naissance"])){
                                echo $error["naissance"];
                            } ?>
                        </p>

                    </div>
                    <!-- input entree en creche -->
                    <div class="p-5 ">
                        <?php 
                            $dateEntree = date("Y-m-d", strtotime($enfant['entree_en_creche']))
                        ?>
                        <label class="text-red-500 font-semibold block pb-3" for="entree">Date d'entrée en creche :</label>
                        <input name="entree" type="date" class="input input-bordered w-full max-w-xs" value="<?= $dateEntree ?>" />
                        <p>
                            <?php
                            if(!empty($error["entree"])){
                                echo $error["entree"];
                            } ?>
                        </p>
                    </div>
                    <!-- input name pere -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="pere"> Prénom et Nom du Père :</label>
                        <input name="pere" type="text" placeholder="Duyère Daniel" class="input input-bordered w-full max-w-xs" value="<?= $enfant["prenom_nom_du_pere"] ?>"/>
                        <p>
                            <?php
                            if(!empty($error["pere"])){
                                echo $error["pere"];
                            } ?>
                        </p>

                    </div>
                    <!-- input name mere -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="mere"> Prénom et Nom de la mère :</label>
                        <input name="mere" type="text" placeholder="Lavache Margerite" class="input input-bordered w-full max-w-xs"  value="<?= $enfant["prenom_nom_de_la_mere"] ?>" />
                        <p>
                            <?php
                            if(!empty($error["mere"])){
                                echo $error["mere"];
                            } ?>
                        </p>
                    </div>
                    <!-- adress -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="adresse"> Adresse :</label>
                        <input name="adresse" type="text" class="input input-bordered w-full max-w-xs"
                         value="<?= $enfant["adresse"] ?>"  />
                        <p>
                            <?php
                            if(!empty($error["adresse"])){
                                echo $error["adresse"];
                            } ?>
                        </p>

                    </div>
                    <!-- email -->
                    <div class="p-5">
                        <label class="text-red-500 font-semibold block pb-3" for="email"> E-mail :</label>
                        <input name="email" type="email" placeholder="info@site.com" class="input input-bordered w-full max-w-xs" value="<?= $enfant["email"] ?>" />
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
                        <input name="tel" type="tel" placeholder="00 00 00 00 00" class="input input-bordered w-full max-w-xs" value="<?= $enfant["telephone"] ?>">
                        <p>
                            <?php
                            if(!empty($error["tel"])){
                                echo $error["tel"];
                            } ?>
                        </p>

                    </div>
                    <!-- liste d'attente -->
                    <label class="text-red-500 font-semibold block pb-3" for="attente "> Liste d'attente :</label>
                    <div class="p-5 flex items-center space-x-10">

                        <div class="form-control ">
                            <label class="label cursor-pointer block flex items-center  pb-3">
                                <input type="radio" name="attente" class="radio checked:bg-black-500" <?php
                                if ($enfant['liste_attente'] == "Oui") echo 'checked = "checked"'
                                ?> />
                                <span class="label-text  pl-3">Oui</span>
                            </label>
                        </div>
                        <div class="form-control ">
                            <label class=" label cursor-pointer block flex items-center pb-3">
                                <input type="radio" name="attente" class="radio checked:bg-black-500" <?php
                                if ($enfant['liste_attente'] == "Non") echo 'checked = "checked"'
                                ?>/>
                                <span class="label-text pl-3">Non</span>
                            </label>

                        </div>

                        <p>
                            <?php
                            if(!empty($error["attente"])){
                                echo $error["attente"];
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