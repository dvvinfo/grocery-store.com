<?php


namespace app\controllers;


use app\models\Post;

class PostController extends AppController
{
    public function actionView()
    {
        $post = Post::find();
        return $this->render('events', ['post' => $post]);
    }

}
