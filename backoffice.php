<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Back-office</title>
    </head>
    <?php include ('helpers/functions.php'); 
    
    ?>
    <body>
        <div class="parent flex">
            <div class="nav_left bg-gray-700 text-white h-screen sticky top-0 w-[25%] px-14 pt-10">
                <p class="text-2xl font-black pb-10">Back-Office</p>
                <ul class="menu  rounded-box">
                    <li class="list-disc">
                        <span class="font-bold">Employés</span>
                    </li>
                    <li class="pl-10"><a href="">Liste des employés</a></li>
                    <li class="pl-10"><a href="">Ajouter un employé</a></li>
                    <li class="">
                        <span class="font-bold">Enfants</span>
                    </li>
                    <li class="pl-10"><a href="partials/_liste-enfants.php">Liste des enfants</a></li>
                    <li class="pl-10"><a href="">Ajouter un enfant</a></li>
                    <li class="pl-10"><a href="">Liste d'attente</a></li>
                </ul>
            </div>
            <?php
            include ('partials/_liste-enfants.php');
            ?>
        </div>
    </body>
</html>