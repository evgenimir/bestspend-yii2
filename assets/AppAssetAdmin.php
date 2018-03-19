<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetAdmin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '/web/admin/';
    public $css = [
        'vendor/simple-line-icons/css/simple-line-icons.css',
        'vendor/font-awesome/css/fontawesome-all.min.css',
        'css/styles.css'
    ];
    public $js = [
        'vendor/jquery/jquery.min.js',
        'vendor/popper.js/popper.min.js',
        'vendor/bootstrap/js/bootstrap.min.js',
        'vendor/chart.js/chart.min.js',
        'js/carbon.js',
        'js/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
