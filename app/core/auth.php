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
        $userId,
        $userType,
        $userName;

    public function __construct()
    {
        if (self::isLoggedIn()) {
            $userinfo = explode(":", $_SESSION['login']);
            self::$userId = $userinfo[0];
            self::$userName = $userinfo[1];
            self::$userType = $userinfo[2];
        }
    }

    static public function isLoggedIn()
    { //checking for user is logged
        if (!empty($_SESSION['login'])) {
            self::$loggedIn = true;
        }
        return self::$loggedIn;
    }

    private function connectDatabase()
    {
        $this->database = new authmodel();
    }

    public static function getUserName()
    {
        return self::$userName;
    }

    public static function getUserId()
    {
        return self::$userId;
    }
    public static function getUserTypeText()
    {
        $userTypes = array('','Admin','Editor','Reader');
        return $userTypes[self::$userType];
    }
}