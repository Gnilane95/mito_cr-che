<?php
if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error["email"]="<span class=text-red-500>E-mail invalide </span>";
        }
    }else{
        $error["email"]=$errorMessage;
    }