<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 17.02.2018
 * Time: 20:20
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{

    /**
     * Set meta-data
     *
     */
    protected function setMeta($page_title = null, $keywords = null, $description = null)
    {
        $this->view->title = "$page_title";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }

}