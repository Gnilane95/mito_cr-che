<?php
if (!empty($attente)) {
        #$attente = $_POST["attente"];
        if ($attente == "Oui" || $attente == "Non") {
            echo "";
        }
    }else {
        $error["attente"]=$errorMessage;
    }