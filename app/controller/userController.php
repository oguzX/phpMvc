<?php
/**
 * User: OguzOzer
 * Date: 11/16/2018
 * Time: 1:20 AM
 */

require_once MDIR."/authmodel.php";

class userController extends controller
{
    public function loginAction(){
        $this->render("login");
    }
    public function checkloginAction(){
        if(!empty($_POST)){
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $authModel = new authmodel();
            if(count($userInfo = $authModel->checkInformationsIsTrue($username,$password))>0){
                $_SESSION['login']=$userInfo[0]['user_id'].':'.$username.':'.$userInfo[0]['user_type'];
                $this->redirect(URL."/");
            }
        }
    }
    public function profileAction(){
        $data['title'] = "Profile";
        $auth = $this->getAuth();
        $data['userName'] = $auth->getUserName();
        $data['userType'] = $auth->getUserTypeText();
        $this->render("profile",$data);
    }
    public function logoutAction(){
        session_destroy();
        $this->redirect(URL."/");
    }
}