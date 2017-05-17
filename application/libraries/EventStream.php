<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.05.2017
 * Time: 17:07
 */
class EventStream
{
   public function createEventStreamMessage($id, $data, $retry = 30000) {
        $otp = "id: $id" . PHP_EOL;
        $otp .= "retry: $retry ". PHP_EOL;
        $otp .= "data: {".PHP_EOL;
        foreach($data as $key => $item){
            $otp.= 'data: ';
            $otp.= '"'.$key.'"'. ": " . '"'.$item .'"';
           if (next($data)==true) $otp .= ",";
            $otp.= PHP_EOL;
        }

        $otp .= "data: }".PHP_EOL;
        $otp.= PHP_EOL;
        return $otp;
    }
}