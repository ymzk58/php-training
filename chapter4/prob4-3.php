<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>簡単なテーブルのサンプル</h1>
    <table border="1" style="border-collapse:collapse">
        <tr><th>名前</th><th>ふりがな</th><th>性別</th><th>年齢</th><th>住所</th></tr>
        <?php
            $member = [
                ["山田太郎", "やまだたろう", "男", 18, "東京都"],
                ["佐藤花子", "さとうはなこ", "女", 16, "大阪府"],
                ["鈴木大拙", "すずきだいせつ", "男", 96, "石川県"],
                ["太田智子", "おおたともこ", "女", 17, "北海道"]
            ];
            foreach($member as $v) {
                echo <<< LOOP
                    <tr><td>{$v[0]}</td><td>{$v[1]}</td><td>{$v[2]}</td><td>{$v[3]}</td><td>{$v[4]}</td></tr>
                LOOP;
            }
        ?>
    </table>
</body>
</html>