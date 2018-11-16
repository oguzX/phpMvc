<?php
/**
 * User: OguzOzer
 * Date: 10/23/2018
 * Time: 9:53 PM
 */

class model
{
    public $db;
    private $error;
    private $sQuery;

    public function __construct()
    {
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => true
        );
        try {
            $this->db = new PDO(DB_DSN, DB_USR, DB_PWD, $options);
        } catch (PDOException $e) {
            $this -> error = $e ->getMessage();
           $this->exeptionLog($this->error);
        }
    }
    public function close(){
        $this->db = null;
    }
    private function Init($query, array $params = [])
    {
        try{
            $this->sQuery = $this->db->prepare($query);
            if(count($params)>0){
                foreach ($params as $param){
                    $explodedParamRow = explode(":",$param);
                    $this->sQuery->bindParam(':'.$explodedParamRow[0],$explodedParamRow[1]);
                }
            }
        }catch (PDOException $e) {
            $this->exeptionLog($e->getMessage(),$query);
        }
        $this->sQuery->execute();
    }
    public function query($query,$params=[],$fetchmode = PDO::FETCH_ASSOC){
        $query = trim($query);
        $this->Init($query,$params);
        $rawStatment = explode(" ",$query);
        $statement = strtolower($rawStatment[0]);
        if($statement === 'select' || 'show') {
            return $this->sQuery->fetchAll($fetchmode);
        } else if ($statement === 'inset' || $statement === 'update' || $statement === 'delete') {
            return $this->sQuery->rowCount();
        } else{
            return NULL;
        }
    }
    private function exeptionLog($message,$query=''){
        echo "<b>We handled an sql exeption</b><br/>";
        echo "<b style='color:red'>$message</b><br/>";
            if($query != '')
                echo "<b style='font-style: italic'>$query</b><br/>";
    }
}