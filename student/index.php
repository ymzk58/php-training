<?php
    require_once("common.php");
    show_top();
    //  学生一覧の表示
    $member = $dbm->get_allstudents();
    if ($member != null) {
        show_student_list($member);
    } else{
        echo "学生情報の取得に失敗しました<br>";
    }
    echo "<a href=\"student_input.php\">新しい学生情報の追加</a>";
    show_bottom();
?>