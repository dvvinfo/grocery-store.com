<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <?= $this->render('//layouts/inc/slider') ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->

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
<!-- fresh-vegetables -->
<div class="fresh-vegetables">
    <div class="container">
        <h3>Top Products</h3>
        <div class="w3l_fresh_vegetables_grids">
            <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                <div class="w3l_fresh_vegetables_grid2">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="images/8.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <div class="w3l_fresh_vegetables_grid1_rel">
                            <img src="images/7.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                <div class="more m1">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="images/10.jpg" alt=" " class="img-responsive" />
                        <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                            <h5>Special Offers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="images/9.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="images/11.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="agileinfo_move_text">
                    <div class="agileinfo_marquee">
                        <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                    </div>
                    <div class="agileinfo_breaking_news">
                        <span> </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //fresh-vegetables -->

