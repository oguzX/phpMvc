<?php
/**
 * User: OguzOzer
 * Date: 10/23/2018
 * Time: 10:27 PM
 */

class app
{
    public $action, $controller, $params;

    public function __construct()
    {
        $url = isset($_GET['url']) && !empty($_GET['url']) ? trim($_GET['url'], '/') : 'default/index';
        $url = explode('/', $url);
        $this->controller = isset($url[0]) ? $url[0] . 'Controller' : 'defaultController';
        $this->action = isset($url[1]) ? $url[1] . 'Action' : 'indexAction';
        array_shift($url);
        array_shift($url);
        $this->params = $url;
    }

    public function run()
    {
        if (file_exists($file = CDIR . "/{$this->controller}.php")) {
            require_once $file;
            if (class_exists($this->controller)) {
                $controller = new $this->controller;
                if (method_exists($controller, $this->action)) {
                    call_user_func_array([$controller, $this->action], $this->params);
                } else {
                    exit("<b class='err'>$this->action method not exist.</b>");
                }
            } else {
                exit("<b class='err'>{$this->controller}.php</b> class not exist");
            }
        } else {
            exit("<b class='err'>{$this->controller}.php</b> controller not found");
        }

    }
}