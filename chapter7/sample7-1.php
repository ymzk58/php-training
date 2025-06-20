<?php
    try {
        //接続
        $db = new PDO('mysql:host=localhost;dbname=school','root','root');
        //SQLクエリ文
        $stmt = $db->prepare("SELECT * FROM student;");
        //クエリ実行
        $res = $stmt->execute();
        if($res) {
            //該当するデータを取得
            $all = $stmt->fetchAll();
            foreach($all as $loop) {
                //結果を表示
                echo "id&nbsp;=&nbsp;" . $loop["id"];
                echo "&nbsp;name&nbsp;=" . $loop["name"];
                echo "&nbsp;grade&nbsp;=" . $loop["grade"] . "<br>";
            }
        }
        //切断
        $db = null;
    } catch(PDOException $e) {
        echo "データベース接続失敗<br>";
        echo $e->getMessage();
    }
?>