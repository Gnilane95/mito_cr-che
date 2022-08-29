<?php
    include ('helpers/functions.php');
    //inclure PDO pour la connexion à la BDD
    require_once ("helpers/pdo.php");

    require_once ("sql/selectEnfants.php");
    #debug_array($enfants);

    $error = [];
    $errorMessage = "<span class=text-red-500>Ce champs est obligatoire</span>";
    $success = false ;
    
?>


<div class="ml-28 py-10">
                <h1 class="text-2xl text-red-500 font-black pb-10">Liste des enfants</h1>
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
                                        <td><?php include ('partials/_modify.php') ?></td>
                                        <td><?php include ('partials/_modal.php') ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                        
                            <?php } ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>