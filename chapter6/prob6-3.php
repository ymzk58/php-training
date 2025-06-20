<?php
    class ZipCheck {
        private $zipcode;
        function __construct($zipcode){
            $this->zipcode = $zipcode;
        }
        function getZipcode() {
            return $this->zipcode;
        }

        function isZip() {
            $zipcode = $this->zipcode;
            if(preg_match("/^[0-9]{3}-[0-9]{4}$/", $this->zipcode) == 1){
                return true;
            } else {
                return false;
            }
        }
    }

    $zip = new ZipCheck("111-1111");
    $result = $zip->isZip();
    if($result == true){
        $zipcode = $zip->getZipcode();
        echo "{$zipcode}は郵便番号です";
    } else {
        $zipcode = $zip->getZipcode();
        echo "{$zipcode}は郵便番号ではありません";
    }
?>