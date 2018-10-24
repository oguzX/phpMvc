<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:27 AM
 */

class post extends model
{
    public function getAll(){
        return $this->fetchAll('SELECT * FROM post');
    }
}