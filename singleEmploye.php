
<?php
session_start();
$title = "Employés";
include ('partials/_header.php');


?>
        <div>
            
            <div class="parent flex gap-50">
                <div class="nav_left bg-gray-700 text-white h-screen sticky top-0 w-[25%] px-14 pt-10">
                    <?php include ('partials/_backLeft.php') ; ?>
                </div>
                <div>
                    <?php 
                    $h1 ;
                    require_once('partials/_alert.php');
                    include ('partials/_singleEmploye.php') ; 
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
