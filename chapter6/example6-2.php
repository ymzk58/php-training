<?php
class Fortnite {
    private $userName;
    private $region;
    private static $count = 0;

    function __construct(){
        self::$count++;
    }

    // countは単純に現在の数を返すだけに変更（インクリメントしない）
    static function count(){
        return self::$count;
    }

    function setUserName($userName){
        $this->userName = $userName;
    }

    function setRegion($region){
        $this->region = $region;  // 修正: = に変更
    }

    function getUserName(){
        return $this->userName;
    }

    function getRegion(){
        return $this->region;
    }
}

// インスタンスを配列にまとめる
$users = [];
$users[] = new Fortnite();
$users[] = new Fortnite();
$users[] = new Fortnite();

$users[0]->setUserName("Pixie");
$users[1]->setUserName("Hero");
$users[2]->setUserName("Rapid");

$users[0]->setRegion("Europe");
$users[1]->setRegion("Middle East");
$users[2]->setRegion("NA Central");

echo "<h1>Fortnite TOP PLAYER</h1><br>";

// ループは0からcount()-1まで
for($i = 0; $i < Fortnite::count(); $i++){
    echo "UserName: " . $users[$i]->getUserName() . "  Region: " . $users[$i]->getRegion() . "<br>";
}
?>