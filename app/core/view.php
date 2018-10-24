<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:00 AM
 */

class view
{
    public static function render($view,array $params = []){
        if(file_exists($file = VDIR."/{$view}.php")){
            extract($params);
            ob_start();
            require $file;
            echo ob_get_clean();
        }else{
            exit(VDIR."/{$view}.php not exist");
        }
    }
}