<?php
if (!empty($mere)){
    if (strlen($mere)<=3) {
        $error["mere"] = "<span class=text-red-500>3 caractères minimum</span>";
    }elseif (strlen($mere)>100) {
        $error["mere"] = "<span class=text-red-500>100 caractères maximun</span>";
    }
}else {
    $error["mere"] = $errorMessage;
}