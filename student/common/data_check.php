<?php
    function check_input($id, $name, $grade, &$error) {
        $error = "";
        if($id === "" or $name === ""){
            $error = "入力されていない値があります";
            return false;
        }
        if(preg_match("/^[1-3][0-9]{3}$/", $id) != 1) {
            $error = "idには1~3の値を入力してください";
            return false;
        }
        return true;
    }
    //
?>