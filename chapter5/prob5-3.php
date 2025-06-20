<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>郵便番号の確認</h1>
    <form method="POST" action="prob5-3.php">
        <p><b>郵便番号を入力してください</b></p>
        <input type="text" name="zipcode" placeholder="例) 101-0051">
        <input type="submit" value="確認">
    </form>

    <?php
        if(isset($_POST["zipcode"])){
            //郵便番号が入力されているか
            $zipcode = $_POST["zipcode"];
            if (preg_match('/^\d{3}-?\d{4}$/', $zipcode)) {
                echo "{$zipcode}は郵便番号です。";
            } else {
                echo "{$zipcode}は郵便番号ではありません";
            }
        } else{
            echo "値を入力してください。";
        }
    ?>
</body>
</html>