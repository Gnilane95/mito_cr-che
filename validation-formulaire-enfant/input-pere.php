<?php
if (!empty($pere)){
    if (strlen($pere)<=3) {
        $error["pere"] = "<span class=text-red-500>3 caractères minimum</span>";
    }elseif (strlen($pere)>100) {
        $error["pere"] = "<span class=text-red-500>100 caractères maximun</span>";
    }
}else {
    $error["pere"] = $errorMessage;
}