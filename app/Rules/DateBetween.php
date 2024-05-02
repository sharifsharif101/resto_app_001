<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DateBetween implements Rule
{
 
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        $pickupDate = Carbon::parse($value);
        $lastDate = Carbon::now()->addWeek();

        return $value >= now() && $value <= $lastDate;
        //لازم يكون الوقت الذي اخترته اكثر من الوقت الحالي  او يساوي الوقت الحالي مع انو انا مدري كيف راح تكون في المطعم في الوقت الحالي 
        // معنى لاست ديت النقطة اللي انت واقف فيها الان بعد اسبوع من الان يعني مفهوم متحرك اختار اي نقطة او اي يوم انت واقف فيهو الان واضف  عليه اسبوع هذه مفهوم التاريخ الأخير 
        // اذا انت لازم تكون اقل من اخر يوم في  هذا الاسبوع 
    }

   
    public function message()
    {
        return 'Pleas  choose the date between a week from now.';
    }
}
