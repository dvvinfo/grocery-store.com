<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>
    <?php
    echo $form->field($model, 'file')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'showCaption' => false,
            'showUpload' => false,
        ],

    ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>