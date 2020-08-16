<?php


namespace app\controllers;


class PagesController extends AppController
{
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionEvents()
    {
        return $this->render('events');
    }
    public function actionProducts()
    {
        return $this->render('products');
    }
    public function actionServices()
    {
        return $this->render('services');
    }
    public function actionMail()
    {
        return $this->render('mail');
    }
}
