<?php

namespace App\Helpers;

use App\Models\Event;
use Carbon\Carbon;

class EventsHelpers
{
    
        public static function formatPrice(Event $event) {
            if($event ->isFree()) {
                return '<strong>Gratuit</strong>';
            } else {
                return sprintf("%.2f euros", $event->price);
            }
        }
   
    
    
        public static function formatDate(Carbon $date) {
           return $date->format('d/m/Y H:i');
        }
    
}