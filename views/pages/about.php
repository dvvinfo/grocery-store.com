<?php use yii\helpers\Html;
use app\modules\admin\models\Team;
use yii\helpers\Url;
$team = Team::find()->all();

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
            <li>About Us</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <!-- about -->
        <div class="privacy about">
            <h3>About Us</h3>
            <p class="animi">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                rerum facilis est et expedita distinctio.</p>
            <div class="agile_about_grids">
                <div class="col-md-6 agile_about_grid_right">
                    <img src="images/31.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 agile_about_grid_left">
                    <ol>
                        <li>laborum et dolorum fuga</li>
                        <li>corrupti quos dolores et quas</li>
                        <li>est et expedita distinctio</li>
                        <li>deleniti atque corrupti quos</li>
                        <li>excepturi sint occaecati cupiditate</li>
                        <li>accusamus et iusto odio</li>
                    </ol>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- team -->
<div class="team">
    <div class="container">
        <h3>Meet Our Amazing Team</h3>
        <div class="agileits_team_grids row">
            <?php foreach ($team as $item): ?>
            <div class="col-md-3 agileits_team_grid">
                <?=Html::img("@web/{$item->img}", [['alt' => $item->name, 'class'=>'img-responsive']])?>
                <h4><?= $item['name']?> <?= $item['surname']?></h4>
                <p><?= $item['position']?></p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="<?= $item['faceboock']?>" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?= $item['twitter']?>" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?= $item['google']?>" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="<?= $item['instagram']?>" class="facebook"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<!--                    <li><a href="<?= $item['vk']?>" class="twitter"><i class="fa fa-vk" aria-hidden="true"></i></a></li>-->
                </ul>
            </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3>Testimonials</h3>
        <div class="w3_testimonials_grids">
            <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Andrew Smith <span>Customer</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Thomson Richard <span>Customer</span></h4>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Crisp Kale <span>Customer</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>John Paul <span>Customer</span></h4>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Rosy Carl <span>Customer</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Rockson Doe <span>Customer</span></h4>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                </div>
            </div>
    </div>
</div>
<!-- //testimonials -->
<!-- newsletter -->

<!-- //newsletter -->
<!-- footer -->

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
