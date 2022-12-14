<?php
    include ('helpers/functions.php');
    //inclure PDO pour la connexion à la BDD
    require_once ("helpers/pdo.php");

    require_once ("sql-enfant/selectEnfants-sql.php");
    #debug_array($enfants);

    $error = [];
    $errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
    $success = false ;
    
?>


            <div class="ml-28 py-10">
                <?php 
                $h1 = "Liste des Enfants"; 
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
                                    echo "<tr><td class=text-center>Données indisponibles.</td></tr>";
                                } else { ?>
                                    <?php foreach ($enfants as $enfant) : ?>
                                    <tr class="hover:text-blue-500 hover:font-bold">
                                        <th class="text-red-500"><?= $index++ ?></th>
                                        <td><a href="singleEnfant.php?id=<?= $enfant['id']?>&nom=<?= $enfant['nom']?>"><?= $enfant ['nom'] ?></a></td>
                                        <td><a href="singleEnfant.php?id=<?= $enfant['id']?>&nom=<?= $enfant['nom']?>"><?= $enfant ['prenom'] ?></a></td>
                                        <td><a href="singleEnfant.php?id=<?= $enfant['id']?>&nom=<?= $enfant['nom']?>"><?= $enfant ['liste_attente'] ?></a></td>
                                       
                                        <td><?php include ('partials/_modifyEnfant.php') ?></td>
                                        <td><?php include ('partials/_modalEnfants.php') ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                        
                            <?php } ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>