<?php
    if(! function_exists('validate_number')){
        function validate_number($number){
            if ($number >= 10 && $number <= 50) {
                return App\Helpers\Number::validate($number);
            }
        }
    }
?>