<?php
/**
 * User: OguzOzer
 * Date: 10/23/2018
 * Time: 9:53 PM
 */

class model
{
    public $db;
    public function __construct()
    {
        $this->db = new PDO(DB_DSN,DB_USR,DB_PWD);
    }
    public function query($query,array $params=[]){
        $sth = $this->db->prepare($query);
        return execute($params);
    }
    public function fetch($query,array $params=[]){
        return $this->query($query,$params)->fetch();
    }
    public function fetchAll($query,array $params=[]){
        return $this->query($query,$params)->fetchAll();
    }


}