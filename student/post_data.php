<?php
    require_once("common.php");
    if (isset($_POST["data"])) {
        //POSTで送られたデータ取得
        if(isset($_POST["id"])) {
            $id = $_POST["id"];
        }
        if(isset($_POST["name"])) {
            $name = $_POST["name"];
        }
        if(isset($_POST["grade"])) {
            $grade = $_POST["grade"];
        }
        if(isset($_POST["old_id"])) {
            $old_id = $_POST["old_id"];
        }
        //データ挿入処理
        if($_POST["data"] == "create") {
            if (check_input($id, $name, $grade, $error) == false) {
                header("Location: student_input.php?error={$error}");
                exit();
            }
            if ($dbm->if_id_exists($id) == true){
                $error = "すでに使用されているIDです";
                header("Location: student_input.php?error={$error}");
                exit();
            }
            if ($dbm->insert_student($id, $name, $grade) == false) {
                $error = "dbエラー";
                header("Location: student_input.php?error={$error}");
                exit();
            }
            header("Location: index.php");
            exit();
        //データ更新処理
        } else if($_POST["data"] == "update") {
            if (check_input($id, $name, $grade, $error) == false) {
                //※参照渡しの為、check_input()側で$errorの値をセットしてくれる
                header("Location: student_update.php?error={$error}&id={$old_id}");
                exit();
            }
            if ($dbm->if_id_exists($id) == true and $id != $old_id) {
                //old_id(編集しているid)でないのに、POSTされたidが既に存在していたらエラーを返す
                $error = "すでに使用されているIDです";
                header("Location: student_update.php?error={$error}&id={$old_id}");
                exit();
            }
            //エラーが無ければok
            $dbm->update_student($id, $name, $grade, $old_id);
            header("Location: index.php");
            exit();
        //データ削除処理
        } else if ($_POST["data"] == "delete") {
            $id = $_POST["id"];
            echo $id."<br>";
            if ($dbm->delete_student($id) == false) {
                $error = "DBエラー";
                header("Location: student_delete.php?error={$error}&id={$id}");
                exit();
            }
            header("Location: index.php");
            exit();
        } else{
            header("Location: index.php");
            exit();
        }
    }
?>