<?php


namespace app\controllers;


use app\models\Post;

class PostController extends AppController
{
    public function actionView($id)
    {
        $post = Post::findOne($id);
        return $this->render('event', compact('post'));
    }

}
