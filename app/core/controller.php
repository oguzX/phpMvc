<?php
/**
 * User: OguzOzer
 * Date: 10/23/2018
 * Time: 9:59 PM
 */

class controller
{
    public function render($file,array $params = []){
        return view::render($file,$params);
    }
    public function model($model){
        if(file_exists($file = MDIR."/{$model}.php")){
            require_once $file;
            if(class_exists($model)){
                return new $model;
            }else{
                exit("{$model} class not found");
            }
        }else{
            exit("MDIR.\"/{$model}.php model not exist");
        }
    }
    public function redirect($path){
        header("Location: $path");
    }
    public static function url(){
        return URL.'/?url='.implode('/',func_get_args());
    }
}