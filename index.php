<?php
//echo "sez";
//print_r($_GET);

$config['route'] = 'home';
$config['lang'] ='tr';

if(isset($_GET['route'])){
    $desen = '@(?<lang>\b[a-z]{2}\b)?/?(?<route>.+)/@';
    preg_match($desen,$_GET['route'],$result);
   // print_r($sonuc);
}
if(isset($result['lang'])){
    if(file_exists(__DIR__.'/language/'.$result['lang'].'php')){
        $config['lang'] = $result['lang'];
    }else{
        $config['lang'] ='tr';
    }

}
require __DIR__.'/language/'.$config['lang'].'php';
echo $lang['title'];