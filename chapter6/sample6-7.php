<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>都道府県のリスト</h1>
    <?php
        require_once("ullist.php");
        $list = new UlList();
        
        $data = ["東京", "神奈川", "大阪"];
        $list->show($data);
    ?>
</body>
</html>