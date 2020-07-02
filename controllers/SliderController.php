<?php


namespace app\controllers;


use app\models\Slider;

class SliderController extends AppController
{
    public function actionIndex()
    {
        $slider = Slider::find()->all();
        return $this->render('products', compact('slider'));
    }
}
