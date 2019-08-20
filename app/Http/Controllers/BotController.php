<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;



class BotController extends Controller
{
    //

    public function getUpdates(){

        /*

        $updates = Telegram::getUpdates();
        $updates = json_decode(json_encode($updates), true);

        foreach ($updates as $update => $item){
            echo "<pre>";
            print_r($item['message']['chat']['id']);
        }
        $response = Telegram::sendMessage([
            'chat_id' => 125441763,
            'text' => 'Hello World'
          ]);

          $messageId = $response->getMessageId();
          */
    }
}
