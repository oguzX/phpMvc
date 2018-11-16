<?php
/**
 * User: OguzOzer
 * Date: 11/15/2018
 * Time: 9:47 PM
 */

class authmodel extends model
{
    public function checkInformationsIsTrue($username,$password){
        $query = $this->query("SELECT * FROM users WHERE user_username=:username AND user_password=:password",["username:$username","password:$password"]);

        return $query;
    }
}