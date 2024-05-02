<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class TimeBetween implements Rule
{
  
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
         $pickupDate= Carbon::parse($value);
     
         $pickupTime= Carbon::createFromTime($pickupDate->hour,$pickupDate->minute,$pickupDate->second);
 

         $earliestTime = Carbon::createFromTimeString('17:00:00');
         $lastTime = Carbon::createFromTimeString('23:00:00');

         return $pickupTime->between($earliestTime,$lastTime) ?true:false;
    }


    
 
    public function message()
    {
        return 'please chose the time between 17:00 - 23:00';
    }
}
