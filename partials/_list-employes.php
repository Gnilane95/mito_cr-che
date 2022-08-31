<?php
    include ('helpers/functions.php');
    //inclure PDO pour la connexion à la BDD
    require_once ("helpers/pdo.php");

    require_once ("sql-employe/selectEmploye-sql.php");
    #debug_array($enfants);

    $error = [];
    $errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
    $success = false ;
    
?>


            <div class="ml-28 py-10">
                <?php 
                $h1 = "Liste des Employés"; 
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
                                <th>E-mail</th>
                                <th>Type de contrat</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                            <?php
                                $index = 1 ;
                                if (count($employes) == 0) {
                                    echo "<tr><td class=text-center>Pas de jeux disponibles actuellement.</td></tr>";
                                } else { ?>
                                    <?php foreach ($employes as $employe) : ?>
                                    <tr class="hover:text-blue-500 hover:font-bold">
                                        <th class="text-red-500"><?= $index++ ?></th>
                                        <td><a href="singleEmploye.php?id=<?= $employe['id']?>&nom=<?= $employe['nom']?>"><?= $employe ['nom'] ?></a></td>
                                        <td><a href="singleEmploye.php?id=<?= $employe['id']?>&nom=<?= $employe['nom']?>"><?= $employe ['prenom'] ?></a></td>
                                        <td><a href="singleEmploye.php?id=<?= $employe['id']?>&nom=<?= $employe['nom']?>"><?= $employe ['email'] ?></a></td>
                                        <td><a href="singleEmploye.php?id=<?= $employe['id']?>&nom=<?= $employe['nom']?>"><?= $employe ['type_contrat'] ?></a></td>
                                        <td><?php include ('partials/_modifyEmploye.php') ?></td>
                                        <td><?php include ('partials/_modalEmployes.php') ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                        
                            <?php } ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>