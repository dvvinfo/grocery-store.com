<?php

use yii\bootstrap\Nav;
use yii\helpers\Url; ?>
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="products.html">Today's special Offers !</a>
    </div>
    <div class="w3l_search">
        <form action="<?= Url::to('category/search')?>" method="get">
            <input type="text" name="q" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <!-- Триггер кнопка модали-->
        <button onclick="getCart()" type="button" class="button" data-toggle="modal" data-target="#modal-cart">
            <span class="cart-sum">$<?= $_SESSION['cart.sum'] ?? '0'?></span>
        </button>
        <!-- Модаль -->
        <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Корзина</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Прододжить покупки</button>
                        <a href="<?= Url::to(['cart/checkout'])?>" class="btn btn-success">Оформить заказ</a>
                        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
                    </div>
                </div>
            </div>
        </div>
        <!--        <form action="#" method="post" class="last">-->
        <!--            <fieldset>-->
        <!--                <input type="hidden" name="cmd" value="_cart" />-->
        <!--                <input type="hidden" name="display" value="1" />-->
        <!--                <input type="submit" name="submit" value="View your cart" class="button" />-->
        <!--            </fieldset>-->
        <!--        </form>-->
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login.html">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="mail.html">Contact Us</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="<?= Url::home() ?>"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'special_items'],
                'items' => [
                    ['label' => 'Events', 'url' => ['/pages/events']],
                    ['label' => 'About Us', 'url' => ['/pages/about']],
                    ['label' => 'Best Deals', 'url' => ['/pages/products']],
                    ['label' => 'Services', 'url' => ['/pages/services']],
                ],
            ]);
            ?>

<!--            <ul class="special_items">-->
<!--                <li><a href="events.html">Events</a><i>/</i></li>-->
<!--                <li><a href="about.html">About Us</a><i>/</i></li>-->
<!--                <li><a href="products.html">Best Deals</a><i>/</i></li>-->
<!--                <li><a href="services.html">Services</a></li>-->
<!--            </ul>-->
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
