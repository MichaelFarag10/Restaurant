<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour,$pickupDate->minute,$pickupDate->second);
        $earliestTime = Carbon::createFromTimeString('5:00 PM');
        $lastTime = Carbon::createFromTimeString('11:00 PM');
        return $pickupTime->between($earliestTime,$lastTime) ? true:false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Please choose the time between 5PM-11PM. ";
    }
}
