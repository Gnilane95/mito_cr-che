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

if (!empty($_POST["submited"])) {
    //2-Faille xss
        require_once("validation-formulaire/include.php");
        #debug_array($_FILES);
        // if (count($error) == 0){
        //     require_once("sql/ajouterEnfants-sql.php");
        // }
        #var_dump (count($error));
}

?>
            <h1 class="font-bold text-center px-5 text-red-500 text-5xl p-6"> Ajoutez Un Enfant</h1>
                <!-- formulaire Enfant -->
                <form class="py-8 pl-48" method="POST">
                    <!-- input nom -->
                    <div class="p-5">

                        <label class="text-red-500 font-semibold block pb-3" for="nom"> Nom :</label>
                        <input name="nom" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" value="<?php if(!empty($_POST["nom"])){echo $_POST["nom"];} ?>" />
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
                        <input name="prenom" type="text" placeholder="Prenom" class="input input-bordered w-full max-w-xs" value="<?php if(!empty($_POST["prenom"])){echo $_POST["prenom"];} ?>" />
                        <p>
                            <?php
                            if(!empty($error["prenom"])){
                                echo $error["prenom"];
                            } ?>
                        </p>
                    </div>
                    <!-- input date de naissance -->
                    <div class="p-5">

                        <label class="text-red-500 font-semibold block pb-3" for="naissance"> Date de naissance :</label>
                        <input name="naissance" type="date" value="DOMString" class="input input-bordered w-full max-w-xs" value="<?php if(!empty($_POST["naissance"])){echo $_POST["naissance"];} ?>"/>
                        <p>
                            <?php
                            if(!empty($error["naissance"])){
                                echo $error["naissance"];
                            } ?>
                        </p>

                    </div>
                    <!-- input entree en creche -->
                    <div class="p-5 ">
                        <label class="text-red-500 font-semibold block pb-3" for="entree">Date d'entrée en creche :</label>
                        <input name="entree" type="date" value="DOMString" class="input input-bordered w-full max-w-xs" value="<?php if(!empty($_POST["entree"])){echo $_POST["entree"];} ?>" />
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
                        <input name="pere" type="text" placeholder="Duyère Daniel" class="input input-bordered w-full max-w-xs"   value="<?php if(!empty($_POST["pere"])){echo $_POST["pere"];} ?>"/>
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
                        <input name="mere" type="text" placeholder="Lavache Margerite" class="input input-bordered w-full max-w-xs"  value="<?php if(!empty($_POST["mere"])){echo $_POST["mere"];} ?>" />
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
                         value="<?php if(!empty($_POST["adresse"])){echo $_POST["adresse"];} ?>"  />
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
                        <input name="email" type="email" placeholder="info@site.com" class="input input-bordered w-full max-w-xs" value="<?php if(!empty($_POST["email"])){echo $_POST["email"];} ?>" />
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
                        <input name="tel" type="tel" placeholder="00 00 00 00 00" class="input input-bordered w-full max-w-xs" value="<?php if(!empty($_POST["tel"])){echo $_POST["tel"];} ?>">
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
                                <input type="radio" name="attente" class="radio checked:bg-black-500" checked />
                                <span class="label-text  pl-3">Oui</span>
                            </label>
                        </div>
                        <div class="form-control ">
                            <label class=" label cursor-pointer block flex items-center pb-3">
                                <input type="radio" name="attente" class="radio checked:bg-black-500" />
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
                        <input type="submit" name="submited" value="Ajouter" class="btn btn-error">
                    </div>


                </form>
            </div>
        </div>
    </body>
</html>