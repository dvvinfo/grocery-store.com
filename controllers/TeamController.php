<?php


namespace app\controllers;



use app\models\Team;

class TeamController extends AppController
{
    public function actionIndex()
    {
        $team = Team::find()->all();
        return $this->render('about', compact('team'));
    }
}
