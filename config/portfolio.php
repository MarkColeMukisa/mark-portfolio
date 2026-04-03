<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Experience Start Date
    |--------------------------------------------------------------------------
    |
    | The date (YYYY-MM-DD) from which professional development experience
    | is calculated. This drives the dynamic "N+ years Experience" label
    | shown in the portfolio traits component.
    |
    | You can override this value via the PORTFOLIO_EXPERIENCE_START_DATE
    | environment variable without touching any code.
    |
    */

    'experience_start_date' => env('PORTFOLIO_EXPERIENCE_START_DATE', '2020-06-01'),

];
