<?php
    require_once("ablist.php");
    class UlList extends abList {
        function startList() {
            echo "<ul>\n";
        }
        function endList() {
            echo "</ul>\n";
        }
    }
?>