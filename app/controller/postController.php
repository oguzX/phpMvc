<?php
/**
 * User: OguzOzer
 * Date: 11/14/2018
 * Time: 10:43 PM
 */
require_once MDIR.'/post.php';
class postController extends controller
{
    public function postAction()
    {
        $db = new post();
        $data['allPost'] = $db ->getAll();
        $data['title'] = "That's all my post";
        $this->render('post',$data);
    }
}