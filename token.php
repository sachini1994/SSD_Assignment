<?php
    class Token 
    {
        public static function generate_tkn($session_id){
            $_SESSION['token'] = md5($session_id);
        }
        
        public static function check_tkn($token){
            if(isset($_SESSION['token']) && $token === $_SESSION['token']){
                unset($_SESSION['token']);
                return true;
                
            }
            else{
                return false;
            }
        }
    }
    



?>