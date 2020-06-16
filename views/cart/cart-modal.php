<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td>
                        <?php
                        if ($item->img): ?>
                            <?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['title'], 'height' => 50]) ?>
                        <?php else: ?>
                            <?= \yii\helpers\Html::img("@web/images/products/no-image.png", ['alt' => $item['title'], 'height' => 50]) ?>
                        <?php endif; ?>
                    </td>
                    <td><?= $item['title']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">Итого: </td>
                <td id="cart-qty"><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
                <td id="cart-sum">$<?= $session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
<h3>Корзина пуста</h3>
<?php endif;?>
