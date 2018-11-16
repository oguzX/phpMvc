<?php
/**
 * User: OguzOzer
 * Date: 11/15/2018
 * Time: 9:44 PM
 */

class auth
{
    static private $loggedIn = false,
        $database,
        $userType,
        $userName;
    static public function isLoggedIn(){
        if(!empty($_SESSION)){
            self::$loggedIn= true;
        }
        return self::$loggedIn;
    }
    private function connectDatabase(){
        $this->database = new authmodel();
    }
    public static function login(){
        $_SESSION['login']=1;
    }
    public static function logout(){
        session_destroy();
        self::$loggedIn=false;
    }
}