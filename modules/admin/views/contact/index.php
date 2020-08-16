<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
<!--            <div class="box-header with-border">-->
<!--                --><?//= Html::a('Добавить контакт', ['create'], ['class' => 'btn btn-success']) ?>
<!--            </div>-->
            <div class="box-body">
<div class="contact-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tel',
            'email:email',
            'address',
            'facebook',
            'twitter',
            'google',
            'instagram',
            'dribbble',
            //'vk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
