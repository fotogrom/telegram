<?php

namespace App;

use TelegramBot\Api\Client;
use Telegram\Bot\Objects\Update;

class BotApp
{
    function run():void{
        $token = getenv('BOT_TOKEN');

        $bot = new Client($token);

        $bot->command('start', function ($message) use ($bot){
            $answer = "Herzliche Willkommen!";
            $bot->sendMessage($message->getChat()->getId(), $answer);
        });

        $bot->command('help',function ($message) use ($bot){
            $answer = 'Команды:
            /help - вызов справки';
            $bot->sendMessage($message->getChat()->getId(),$answer);
        });

        $bot->command('hello',function($message) use ($bot){
           $answer = 'Ich bin das Robot! Ich bin der Android!';
           $bot->sendMessage($message->getChat()->getId(), $answer);

        });

        $bot->run();
    }
}