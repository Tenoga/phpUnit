<?php 
namespace app\Helpers;
    class Email{
        public static function validate($email){
            return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);            
        }
    }
?>