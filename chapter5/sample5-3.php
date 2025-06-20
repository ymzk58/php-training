<?php
    function job($shokugyo = "会社員"){
        return "職業は{$shokugyo}です。<br>";
    }
    echo job("公務員");
    echo job();
?>