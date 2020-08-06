<?php


namespace app\controllers;


use app\models\Testimonials;

class TestimonialsController extends AppController
{
    public function actionIndex()
    {
        $testimonials = Testimonials::find()->all();
        return $this->render('about', compact('testimonials'));
    }

}
