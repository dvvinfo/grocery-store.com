<?php


namespace app\controllers;

use app\models\Promo;

class PromoController extends AppController
{
    public function actionIndex(){
        $promos= Promo::find()->all();
        return $this->render('index', compact('promos'));
    }

}
