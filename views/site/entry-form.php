<?php

/**
 * Created by   : MNurilmanBaehaqi
 * Date         : 03 October 2019
 * Time         : 20:57
 * Github       : https://github.com/moxspoy
 */
 use yii\helpers\Html;
 ?>

<p> You have entered the following information: </p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?> </li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?> </li>
</ul>
