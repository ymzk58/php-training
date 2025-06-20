<?php
    //文字列の設定
    $str = "HTMLとPHPの学習";
    echo "\$str=『{$str}』<br><br>";
    //文字列の長さを求める(mb_strlen)
    $lenght = mb_strlen($str);
    echo "\$strの長さは{$lenght}です。<br>";
    //文字列の5文字目から3文字切り取る(mb_substr)
    $sub = mb_substr($str, 5 , 3);
    echo "\$str5文字目から3文字→{$sub}<br>";
    //文字列の中から『学習』を検索(mb_strpos)
    $search = "学習";
    $result = mb_strpos($str, $search);
    echo "『学習』は\$strの{$result}文字目から<br>";
    //文字列をHTMLからwebに置き替える(str_replace)
    $search = "HTML";
    $replace = "web";
    $result = str_replace($search, $replace, $str);
    echo "\$strの『{$search}』を『{$replace}』にすると『{$result}』になる<br>";
?>