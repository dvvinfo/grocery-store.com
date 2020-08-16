<?php
use app\models\Product;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\helpers\Url;
$products = Product::find()->all();
$query= Product::find()->where('id');
$pages = new Pagination(['totalCount' =>$query->count(), 'pageSize'=> 10, 'forcePageParam' => false, 'pageSizeParam' => false]);
$products = $query->offset($pages->offset)
    ->limit($pages->limit)
    ->all();
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
<!-- header -->

<!-- //header -->
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= Url::home() ?>">Home</a><span>|</span></li>
            <li>Products</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">

        <div class="w3ls_w3l_banner_nav_right_grid ">
            <?php if (!empty($offers)) :?>
            <h3>Popular Brands</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <?php foreach ($offers as $offer) :?>
                <div class="col-md-3 w3ls_w3l_banner_left mb-custom ">
                    <div class="hover14 column ">
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
            <?php endif; ?>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>All Products</h6>
                <?php foreach ($products as $product) :?>
                    <div class="col-md-3 w3ls_w3l_banner_left  mb-custom">
                        <div class="hover14 column ">
                            <div class="agile_top_brand_left_grid">

                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb">
                                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->id])?>">
                                                    <?= \yii\helpers\Html::img("@web/{$product->img}", ['alt'=> $product->title])?></a>
                                                <p><?= $product->title ?></p>
                                                <h4>$<?= $product->price ?>
                                                    <?php if ((float)$product->old_price) :?>
                                                    <span>$<?= $product->old_price ?></span></h4>
                                                <?php endif;?>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <a href="<?= \yii\helpers\Url::to(['cart/add', 'id'=> $product->id])?>" data-id="<?=$product->id?>" class="button add-to-cart">Добавить в корзину</a>
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
                <div class="col-md-12 text-center">
                    <!--                        Вывод пагинации-->
                    <?= \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                    ])?>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

</div>
<!-- //banner -->


<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        $(".dropdown").hover(-->
<!--            function() {-->
<!--                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");-->
<!--                $(this).toggleClass('open');-->
<!--            },-->
<!--            function() {-->
<!--                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");-->
<!--                $(this).toggleClass('open');-->
<!--            }-->
<!--        );-->
<!--    });-->
<!--</script>-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

