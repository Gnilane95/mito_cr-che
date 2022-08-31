<?php
    include ('helpers/functions.php');
    //inclure PDO pour la connexion à la BDD
    require_once ("helpers/pdo.php");

    //1-Requête pour récupérer les enfants
    $sql = "SELECT id, nom, prenom, liste_attente FROM enfants WHERE liste_attente ='Oui'";
    //2-on prépare la requête (preformatter une requête)
    $query = $pdo->prepare($sql);
    //3-Execute ma requête
    $query->execute();
    //4-On stock le résultat dans une variable
    $enfants = $query->fetchAll();
    #debug_array($enfants);

    $error = [];
    $errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
    $success = false ;
    
?>


<div class="ml-28 py-10">
                <?php
                $h1 = "Liste d'attente "; 
                include ('partials/_h1.php'); 
                ?>                
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Liste d'attente</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                            <?php
                                $index = 1 ;
                                if (count($enfants) == 0) {
                                    echo "<tr><td class=text-center>Pas de jeux disponibles actuellement.</td></tr>";
                                } else { ?>
                                    <?php foreach ($enfants as $enfant) : ?>
                                    <tr class="hover:text-blue-500 hover:font-bold">
                                        <th class="text-red-500"><?= $index++ ?></th>
                                        <td><?= $enfant ['nom'] ?></td>
                                        <td><?= $enfant ['prenom'] ?></td>
                                        <td><?= $enfant ['liste_attente'] ?></td>
                                        <td><?php include ('partials/_modifyEnfant.php') ?></td>
                                        <td><?php include ('partials/_modalEnfants.php') ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                        
                            <?php } ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>