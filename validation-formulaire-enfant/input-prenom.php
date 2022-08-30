<?php
if (!empty($prenom)){
    if (strlen($prenom)<=3) {
        $error["prenom"] = "<span class=text-red-500>3 caractères minimum</span>";
    }elseif (strlen($prenom)>100) {
        $error["prenom"] = "<span class=text-red-500>100 caractères maximun</span>";
    }
}else {
    $error["prenom"] = $errorMessage;
}