<?php

use app\modules\admin\models\Post;
use app\modules\admin\models\Testimonials;

$this->title = 'Статистика магазина';
$this->params['breadcrumbs'][] = $this->title;
$post = Post::find()->count();
$testimonials = Testimonials::find()->count();

?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $orders ?></h3>
                <p>Заказов</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['order/index']) ?>" class="small-box-footer">
                Все заказы <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $products ?></h3>
                <p>Товаров</p>
            </div>
            <div class="icon">
                <i class="fa fa-cutlery"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['product/index']) ?>" class="small-box-footer">
                Все продукты <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $categories ?></h3>
                <p>Категорий</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['category/index']) ?>" class="small-box-footer">
               Все категории <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $post ?></h3>
                <p>Постов</p>
            </div>
            <div class="icon">
                <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['post/index']) ?>" class="small-box-footer">
                Все посты <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-commenting"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Отзывы</span>
                <span class="info-box-number"><a href="<?= \yii\helpers\Url::to(['testimonials/index']) ?>" class="small-box-footer"><?= $testimonials ?></a></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
