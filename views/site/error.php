<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="comingcontainer">
    <div class="checkbacksoon">

        <?php if($exception->statusCode == 404):?>
        <p>
            <span class="go3d">4</span>
            <span class="go3d">0</span>
            <span class="go3d">4</span>
            <span class="go3d">!</span>
        </p>
        <p class="error">
            <b><?= nl2br(Html::encode($message)) ?></b><br>
            Похоже, вы выбрали неправильный путь.<br>
            Не волнуйтесь, время от времени, это случается с каждым из нас.<br>
        </p>
        <?php else: ?>
        <p>
            <span class="go3d">О</span>
            <span class="go3d">Ш</span>
            <span class="go3d">И</span>
            <span class="go3d">Б</span>
            <span class="go3d">К</span>
            <span class="go3d">А</span>
        </p>
         <p class="error">
             Извините, прозошла ошибка
         </p>
        <?php endif; ?>

        <p class="error">
            Вернуться на главную: <a href="/" title="На главную">вернуться</a>
        </p>

    </div>
</div>
