<?php

namespace App\Channels;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class SmsChannel{

    public function send($notifiable , Notification $notification){
        return "done!";
        $receptor = $notifiable->cellphone;
        $type = 1;
        $template = "behnegaran";
        $param1 = $notification->code;
        $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
        $api->verify($receptor,$type,$template,$param1);
    }

}
