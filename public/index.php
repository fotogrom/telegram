<?php

require_once('../vendor/autoload.php');

use App\BotApp;

try{
    $botApp = new BotApp();
    $botApp->run();
}
catch (Exception $e){
    echo $e->getMessage();
    print_r($e->getTrace(),1);
}

