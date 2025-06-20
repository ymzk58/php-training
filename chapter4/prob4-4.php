<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>配列からリストを作る</h1>
    <ul>
        <?php
            $countory = ["日本", "アメリカ", "中国"];
            foreach($countory as $v){
                echo <<< LOOP
                    <li>{$v}</li>
                LOOP;
            }
        ?>
    </ul>
</body>
</html>