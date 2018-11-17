<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:27 AM
 */

class post extends model
{
    public function getAll(){
        $query = $this->query('SELECT * FROM posts ORDER BY post_id DESC');
        return $query;
    }
    public function getSentByMe($userId){
        $query = $this->query('SELECT * FROM posts WHERE post_owner=:userid ORDER BY post_id DESC ',["userid:$userId"]);
        return $query;
    }
    public function getById($postid){
        $query = $this->query('SELECT * FROM posts WHERE post_id=:postid ',["postid:$postid"]);
        return $query;
    }
    public function addPost($title,$text){
        $dataTime = date('d/m/Y');
        $addQuery = $this->query("INSERT into posts (post_title,post_text,post_date) VALUES (:title,:text,:datetime) ",["title:$title","text:$text","datetime:$dataTime"]);
        echo $addQuery;
    }
    public function updatePost($title,$text,$postid){
        $dataTime = date('d/m/Y');
        $addQuery = $this->query("UPDATE posts SET post_title=:title, post_text=:text,post_date=:datetime WHERE post_id=:postid ",["title:$title","text:$text","datetime:$dataTime","postid:$postid"]);
        echo $addQuery;
    }
}