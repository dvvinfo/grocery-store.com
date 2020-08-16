<?php


namespace app\controllers;


use app\models\Contact;

class ContactController extends AppController
{
    public function actionIndex()
    {
        $contact = Contact::find()->all();
        $this->render('index', compact('contact'));
    }
    public function actionMail()
    {
        $contact = Contact::find()->one();
        $this->render('mail-page', compact('contact'));
    }

}
