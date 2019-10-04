<?php

/**
 * Created by   : MNurilmanBaehaqi
 * Date         : 04 October 2019
 * Time         : 16:06
 * Github       : https://github.com/moxspoy
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1> Countries </h1>
<ul>
    <?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>