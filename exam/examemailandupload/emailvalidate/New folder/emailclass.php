<?php

        class Email{
            private $email;

            public function __construct($_email) {
                $this->email = $_email;
            }
            function emailvalidate(){
                $a="/^[a-zA-Z0-9._%-+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
                if(preg_match($a,$this->email)){
                    return true;
                }else{
                    return false;
                }
            }
        }
?>