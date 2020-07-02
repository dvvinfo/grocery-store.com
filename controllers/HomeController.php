<?php

namespace app\controllers;

use app\models\Product;
use app\models\Slider;

class HomeController extends AppController
{

    public function actionIndex()
    {
        //для получения всех товаров из БД по ключу is_offer
        $offers = Product::find()->where(['is_offer' => 1])->limit(4)->all();
//        $slider = Slider::find()->all();
        return $this->render('index', compact('offers'));
    }

}
