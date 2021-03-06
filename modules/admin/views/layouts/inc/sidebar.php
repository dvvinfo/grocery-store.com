<?php

use app\modules\admin\models\User;

$users = User::find()->one();
?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= \yii\helpers\Html::img("@web/{$users->avatar}", ['alt' => $user->username, 'class' => 'user-image']) ?>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>
                <small><?=$users->name?></small>
                <!-- Status -->
<!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>

        <!-- search form (Optional) -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search...">-->
<!--                <span class="input-group-btn">-->
<!--              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--              </button>-->
<!--            </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
<!--            <li class="header">HEADER</li>-->
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?=\yii\helpers\Url::to(['main/index'])?>"><i class="fa fa-bar-chart"></i> <span>Стaтистика магазина</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-shopping-cart"></i> <span>Заказы</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['order/index'])?>">Список заказов</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['order/create'])?>">Добавить заказ</a></li>
                </ul>
            </li>
<!--           меню ка тегорий-->
            <li class="treeview">
                <a href="#"><i class="fa fa-cubes"></i> <span>Категории</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['category/index'])?>">Список категорий</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['category/create'])?>">Добавить категорию</a></li>
                </ul>
            </li>
            <!--           меню ка товаров-->
            <li class="treeview">
                <a href="#"><i class="fa fa-cutlery"></i> <span>Товары</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['product/index'])?>">Список товаров</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['product/create'])?>">Добавить товар</a></li>
                </ul>
            </li>
            <!--           меню слайд-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-map-o"></i> <span>Слайдер</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['slider/index'])?>">Все слайды</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['slider/create'])?>">Добавить слайд</a></li>
                </ul>
            </li>
            <!--           меню постов-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-newspaper-o"></i> <span>Посты</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['post/index'])?>">Все Посты</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['post/create'])?>">Добавить пост</a></li>
                </ul>
            </li>
            <!--           меню команды-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-group"></i> <span>Команда</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['team/index'])?>">Список членов команды</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['team/create'])?>">Добавить в команду</a></li>
                </ul>
            </li>
            <!--           меню отзывы-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-commenting"></i> <span>Отзывы</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['testimonials/index'])?>">Список отзывов</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['testimonials/create'])?>">Добавить отзыв</a></li>
                </ul>
            </li>
            <!--           меню Акции-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-file-archive-o"></i> <span>Акции</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['promo/index'])?>">Все акции</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['promo/create'])?>">Добавить акцию</a></li>
                </ul>
            </li>
            <!--           меню Пользователь-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-user-plus"></i> <span>Пользотель</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['user/index'])?>">Инфо пользователя</a></li>
                </ul>
            </li>
            <!--           меню Контакты-->
            <li class="treeview">
                <a href="#"><i class="fa  fa-clone"></i> <span>Контакты</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=\yii\helpers\Url::to(['contact/index'])?>">Меню контакты</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
