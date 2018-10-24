
<?php
/**
 * User: OguzOzer
 * Date: 10/23/2018
 * Time: 9:48 PM
 */
define('ROOT_DIR',str_replace("\\","/",__DIR__));
define('APP_DIR',ROOT_DIR.'/app');
define('CORE_DIR',APP_DIR.'/core');
define('CDIR',APP_DIR.'/controller');
define('MDIR',APP_DIR.'/model');
define('VDIR',APP_DIR.'/view');
define('URL','http://localhost/blog');
define('ASSETS_DIR',URL.'/assets');
define('CSSDIR',ASSETS_DIR.'/css');
define('JSDIR',ASSETS_DIR.'/assets');

define('DB_DSN','mysql:host=localhost;dbname=blog;charset=utf8');
define('DB_USR','root');
define('DB_PWD','');

require CORE_DIR.'/app.php';
require CORE_DIR.'/model.php';
require CORE_DIR.'/view.php';
require CORE_DIR.'/controller.php';
$app = new app();
$app->run();