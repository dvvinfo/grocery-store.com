<?php

use app\modules\admin\models\Slider;
use yii\bootstrap\Carousel;

$slider=Slider::find()->all();
$url = \yii\helpers\Url::to(['pages/products'])
;?>

<?php //if (!empty($slider)) : ?>
<section class="slider">
    <?php foreach ($slider  as $item)
        $newArray[] = [
            'content' => \yii\helpers\Html::img("@web/{$item->img}"),
            'caption' => "<div class='more_1'><h3>$item->title</h3> <a href='$url'>Shop now</a></div>",
            'options' => [
                                   ],


        ]
    ?>
    <?php
    echo Carousel::widget(['items' => $newArray
//        'items' => [
//            // the item contains only the image
//            // equivalent to the above
//            ['content' => '<img src="images/1.jpg"/>',
/*            'caption' => "<h3><?=$item->title?></h3> <div class='more'>*/
/*<a href='<?=\yii\helpers\Url::to(['slider/index']) ?>'>Shop now</a>*/
//</div> " ,
//                'options' => [
//                        'class' => 'w3l_banner_nav_right_banner'
//                ],
//            ],
//            // the item contains both the image and the caption
//            [
//                'content' => '<img src="images/2.jpg"/>',
/*                'caption' => "<h3><?= $item->title?></h3> ",*/
//                'options' => [],
//            ],
//            [
//                'content' => '<img src="images/3.jpg"/>',
/*                'caption' => "<h3><?= $item->title?></h3> ",*/
//                'options' => [
//
//                ],
//            ],
//        ]
    ]);
    ?>
<!--    <div class="flexslider">-->
<!--        <ul class="slides">-->
<!--            --><?php //foreach ($slider  as $item) :?>
<!--            <li>-->
<!--                <div class="w3l_banner_nav_right_banner">-->
<!--                    <h3>--><?//= $item->title?><!--</h3>-->
<!--                    <div class="more">-->
<!--                        <a href="--><?//=\yii\helpers\Url::to(['slider/index']) ?><!--" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            --><?php //endforeach;?>
<!--        </ul>-->
<!--    </div>-->
</section>
<?php //endif;?>
