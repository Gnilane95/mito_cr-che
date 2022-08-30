<?php
 if (!empty ($tel)){
			if (!is_numeric($tel) ) {
				$error["tel"] = "<span class=text-red-500>Veuillez rentrez num de tel</span>";
			}
    }else{
        $error["tel"] = $errorMessage;
    }