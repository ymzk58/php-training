<?php
    try {
        //接続
        $db = new PDO('mysql:host=localhost;dbname=school','root','root');
        //データの作成
        $id = 3003;
        $name = "山崎友輔";
        $grade = 3;
        //クエリ作成
        $stmt = $db->prepare("INSERT INTO student VALUES(?, ?, ?);");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->bindParam(2, $name, PDO::PARAM_STR);
        $stmt->bindParam(3, $grade, PDO::PARAM_INT);
        //SQLクエリ実行
        $res = $stmt->execute();
        //切断
        $db = null;
    } catch(PDOException $e) {
        echo "データベース接続失敗<br>";
        echo $e->getMessage();
    }
?>