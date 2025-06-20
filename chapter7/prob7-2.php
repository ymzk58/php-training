<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=school', 'root', 'root');
        $id = 1001;
        $name = "山口太郎";
        $stmt = $db->prepare("UPDATE student SET name = ? WHERE id = ?;");

        $stmt->bindparam(1, $name, PDO::PARAM_STR);
        $stmt->bindparam(2, $id, PDO::PARAM_INT);
        $res = $stmt->execute();
        $db = null;
    } catch(PDOException $e){
        echo "失敗しました";
        echo $e->getMessage();
    }
?>