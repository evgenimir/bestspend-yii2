<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Авторизация
                    </div>
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n<div class=\"col-lg-8\">{error}</div>",
                            'labelOptions' => ['class' => 'control-label'],
                        ],
                    ]); ?>
                    <div class="card-body py-5">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "{input} {label}\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>

                        <div class="form-group">
                            <div style="text-align: center">
                                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary px-5', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
