<?php
session_start();
$title = "Backoffice";
include ('partials/_header.php');

?>
        
        <div class="parent flex gap-50">
            <div class="nav_left bg-gray-700 text-white h-screen sticky top-0 w-[25%] px-14 pt-10">
                <?php include ('partials/_backLeft.php') ; ?>
            </div>
            <div>
                <?php require_once('partials/_alert.php') ?>
                <?php include ('partials/_list-employes.php') ; ?>
            </div>
        </div>
    </body>
</html>