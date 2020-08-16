<?php use app\modules\admin\models\Promo;

$promos= Promo::find()->all();?>
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <?= $this->render('//layouts/inc/slider') ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <?php foreach ($promos as $promo):?>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <?= \yii\helpers\Html::img("@web/{$promo->img}", [['alt'=> $promo->title], 'class'=> 'img-responsive'])?>
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4><?= $promo->title ?> <span><?= $promo->sale ?></span></h4>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- top-brands -->
    <?php if (!empty($offers)) :?>
<div class="top-brands">
    <div class="container">
        <h3>Hot Offers</h3>
        <div class="agile_top_brands_grids">
            <?php foreach ($offers as $offer) :?>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <?= \yii\helpers\Html::img("@web/images/offer.png", ['alt'=> 'offer', 'class'=> 'img-responsive'])?>
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$offer->id])?>">
                                            <?= \yii\helpers\Html::img("@web/{$offer->img}", ['alt'=> $offer->title])?></a>
                                        <p><?= $offer->title ?></p>
                                        <h4>$<?= $offer->price ?>
                                            <?php if ((float)$offer->old_price) :?>
                                            <span>$<?= $offer->old_price ?></span></h4>
                                        <?php endif;?>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id'=> $offer->id])?>" data-id="<?=$offer->id?>" class="button add-to-cart">Добавить в корзину</a>
<!--                                        <form action="checkout.html" method="post">-->
<!--                                            <fieldset>-->
<!--                                                <input type="hidden" name="cmd" value="_cart" />-->
<!--                                                <input type="hidden" name="add" value="1" />-->
<!--                                                <input type="hidden" name="business" value=" " />-->
<!--                                                <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />-->
<!--                                                <input type="hidden" name="amount" value="7.99" />-->
<!--                                                <input type="hidden" name="discount_amount" value="1.00" />-->
<!--                                                <input type="hidden" name="currency_code" value="USD" />-->
<!--                                                <input type="hidden" name="return" value=" " />-->
<!--                                                <input type="hidden" name="cancel_return" value=" " />-->
<!--                                                <input type="submit" name="submit" value="Add to cart" class="button" />-->
<!--                                            </fieldset>-->
<!---->
<!--                                        </form>-->

                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
    <?php endif; ?>
<!-- //top-brands -->


