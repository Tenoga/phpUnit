<?php 
namespace app\Helpers;
    class Number{
        public static function validate($number){
            return (bool) filter_var($number, FILTER_VALIDATE_INT);          
        }
    }
?>