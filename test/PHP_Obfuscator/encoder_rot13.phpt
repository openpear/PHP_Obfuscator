--TEST--
php-obfuscator -f target.php -e Rot13
--FILE--
<?php
ini_set("include_path", dirname(dirname(dirname(__FILE__))) . PATH_SEPARATOR . ini_get("include_path"));
require_once 'PHP/Obfuscator/Command.php';
PHP_Obfuscator_Command::main(array(dirname(__FILE__) . '/file.php',
                             '-f', dirname(__FILE__) . '/target.php',
                             '-e', 'Rot13',
                             ));
--EXPECTF--
<?php $l1ll=count_chars("",4);$lll1=$l1ll[101].$l1ll[118].$l1ll[97].$l1ll[108];$ll1l=$l1ll[98].$l1ll[97].$l1ll[115].$l1ll[101].$l1ll[54].$l1ll[52].$l1ll[95].$l1ll[100].$l1ll[101].$l1ll[99].$l1ll[111].$l1ll[100].$l1ll[101];$l11l=__FILE__;eval($ll1l("JF9fZj1mb3BlbigkbDExbCwicmIiKTtmZ2V0cygkX19mKTtldmFsKHN0cl9yb3QxMyhmcmVhZCgkX19mLCA1NikpKTs"));return; ?>
?>ubtrubtr
<?cuc
rpub qngr('L/z/q U:v:f') . CUC_RBY;
