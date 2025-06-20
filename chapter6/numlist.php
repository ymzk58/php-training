<?php
    require_once("ablist.php");
    class NumList extends AbList {
        function startList(){
            echo "<ol>\n";
        }
        function endList(){
            echo "</ol>\n";
        }
    }
?>