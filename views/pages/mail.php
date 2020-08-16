<?php

use app\modules\admin\models\Contact;
use yii\helpers\Html;
use yii\helpers\Url;

$contact = Contact::find()->one();

$this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <base href="/">
        <meta charset="<?= Yii::$app->charset ?>">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <?php $this->head() ?>
    </head>

    <body>
<?php $this->beginBody() ?>
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= Url::home() ?>">Home</a><span>|</span></li>
            <li>Mail Us</li>
        </ul>
    </div>
</div>
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <!-- mail -->
        <div class="mail">
            <h3>Mail Us</h3>
            <div class="agileinfo_mail_grids">
                <div class="col-md-4 agileinfo_mail_grid_left">
                    <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i></li>
                        <li>address<span><?= $contact->address?></span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                        <li>email<span><a href="mailto:info@example.com"><?= $contact->email?></a></span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>call to us<span><?= $contact->tel?></span></li>
                    </ul>
                </div>
                <div class="col-md-8 agileinfo_mail_grid_right">
                    <form action="#" method="post">
                        <div class="col-md-6 wthree_contact_left_grid">
                            <input type="text" name="Name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">
                            <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                        </div>
                        <div class="col-md-6 wthree_contact_left_grid">
                            <input type="text" name="Telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">
                            <input type="text" name="Subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //mail -->
    </div>
    <div class="clearfix"></div>
</div>
<?php $this->endBody() ?>
<?php $this->endPage() ?>
