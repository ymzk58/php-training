<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>簡単なテーブル</h1>
    <table border="1" style="border-collapse: collapse;">
        <tr><th>名前</th><th>性別</th></tr>
        
        <?php
            $member = [
                ["上原ひろみ", "女"],
                ["JohnColtrane", "男"]
            ];
            foreach ($member as $v) {
                echo <<< LOOP
                <tr>
                    <td>{$v[0]}</td><td>{$v[1]}</td>
                </tr>
                LOOP;
            }
        ?>
    </table>
</body>
</html>