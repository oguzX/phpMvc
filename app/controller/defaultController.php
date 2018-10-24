<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:05 AM
 */

class defaultController extends controller
{
    public function indexAction(){
        $data['title'] = 'Ana Sayfa';
        $data['text'] = 'Ana sayfadan merhaba!';
        $this->render('index',$data);
    }
}