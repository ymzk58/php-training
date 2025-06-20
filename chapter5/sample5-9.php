<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>円の面積と円周の長さを求める</h1>
    <form method="POST" action="sample5-9.php">
        <p><b>円の半径(cm) :正の数を入力してください</b></p>
        <input type="text" name="radius" placeholder="例）1.2">
        <br>
        <p>
            <?php
                //半径が入力されているかの確認
                if (isset($_POST["radius"])){
                    //半径を$rに代入し、正規表現で型チェック
                    $r = $_POST["radius"];
                    if (preg_match("/^([1-9]\d*|0)(\.\d+)?$/", $r) == 1) {
                        $r = (float)$r;
                        if ($r > 0.0){
                            $pi = 3.14;
                            $area = $pi * $r * $r;
                            $cir = 2 * $pi * $r;
                            echo "<p>面積:{$area}cm2&nbsp; 円周:{$cir}cm</p>";
                        }else{
                            echo "<p>半径には正の数を入力してください</p>";
                        }
                    }else{
                        echo "<p>半径には正の数を入力してください</p>";
                    }
                }
            ?>
        </p>
        <input type="submit" value="計算する">
    </form>
</body>
</html>