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
    public function addAction(){
        $data['title']="Add a Post";
        $this->render('postadd',$data);
    }
    public function postaddNowAction(){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $owner = $this->getAuth()->getUserId();
        $postDb = new post();
        $postDb ->addPost($title,$text,$owner);
    }
    public function posteditNowAction(){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $postId = $_POST['postId'];
        $postDb = new post();
        $postDb ->updatePost($title,$text,$postId);
    }
    public function myPostsAction(){
        $db = new post();
        $userId = $this->getAuth()->getUserId();
        $data['allPost'] = $db ->getSentByMe($userId);
        $data['title'] = 'My Posts';
        $this->render("myposts",$data);
    }
    public function editAction($postId){
        $db = new post();
        $data['postData'] = $db->getById($postId);
        $this->render('postadd',$data);
    }
}