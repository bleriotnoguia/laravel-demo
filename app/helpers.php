<?php

if(!function_exists('format_price')){
    function format_price($event){
        if($event->isFree()){
            return '<b>GRATUIT !</b>';
        }else{
            return sprintf('%.2f euros', $event->price);
        }
    }
}