<?php
    function job_func1($param){
        $param = "ニート";
    }
    function job_func2(&$param){
        $param = "ニート";
    }

    $taro_job = "会社員";
    $jiro_job = "会社員";

    job_func1($taro_job);
    job_func2($jiro_job);

    echo "太郎の職業:{$taro_job}<br>";
    echo "次郎の職業:{$jiro_job}<br>";
?>