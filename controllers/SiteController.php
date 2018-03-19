<?php

namespace app\controllers;

use app\models\Product;
use Yii;

use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;

/**
 * Main controller
 *
 * @author Miroshnichenko E.A.
 * @copyright 2018
 * @version 1.0
 */
class SiteController extends AppController
{

    public $layout = 'inside';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'error'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     *
     * @author Miroshnichenko E.A.
     * @copyright 2018
     * @version 1.0
     */
    public function actionIndex()
    {
        $this->layout = 'main';

        // get actual products
        $hits = Product::getHits();
        $sale = Product::getSale();
        $new = Product::getNew();
        $recommended = Product::getRecommended();
        $salesDsc = Product::getSaleDesc();
        $bestDeals = Product::getBestDeals();
        $superSpecial = Product::getSuperSpecial();

        $this->setMeta('Интернет-магазин BestSpend');

        return $this->render('index', [
            'hits' => $hits,
            'sale' => $sale,
            'new' => $new,
            'recommended' => $recommended,
            'salesDsc' => $salesDsc,
            'bestDeals' => $bestDeals,
            'superSpecial' => $superSpecial,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'login-page';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $this->setMeta('Вход в панель управления');

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $this->setMeta('Контакты');
        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->setMeta('О нас');
        return $this->render('about');
    }

    /**
     * Displays delivery page.
     *
     * @return string
     */
    public function actionDelivery()
    {
        $this->setMeta('Доставка');
        return $this->render('delivery');
    }
}
