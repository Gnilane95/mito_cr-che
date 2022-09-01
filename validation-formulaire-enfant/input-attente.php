<?php
if (!empty($attente)) {
        #debug_array($_POST["attente"]);
        if ($attente == "Oui" || $attente == "Non") {
            echo "";
        }
    }else {
        $error["attente"]=$errorMessage;
    }