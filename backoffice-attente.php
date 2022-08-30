<?php
session_start();
include ('partials/_header.php');
$title = "BackOffice-attente";

?>
        <?php require_once('partials/_alert.php') ?>
        <div class="parent flex gap-50">
            <div class="nav_left bg-gray-700 text-white h-screen sticky top-0 w-[25%] px-14 pt-10">
                <?php include ('partials/_backLeft.php') ; ?>
            </div>
            <div>
            <?php include ('partials/_listeAttente-enfants.php') ; ?>
            </div>
        </div>
    </body>
</html>