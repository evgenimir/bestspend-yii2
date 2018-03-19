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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/font-awesome.min.css',
        'css/simple-line-icons.css',
        'css/pe-icon-7-stroke.min.css',
        'css/owl.carousel.css',
        'css/owl.transitions.css',
        'css/flexslider.css',
        'css/jquery-ui.css',
        'css/revolution-slider.css',
        'css/quick_view_popup.css',
        'css/blog.css',
        'css/shortcode.css',
        'css/shortcodes/shortcodes.css',
        'css/shortcodes/featured-box.css',
        'css/shortcodes/pricing-table.css',
        'css/shortcodes/tooltip.css',
        'css/shortcodes/post.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/mobile-menu.js',
        'js/jquery-ui.js',
        'js/main.js',
        'js/countdown.js',
        'js/revolution-slider.js',
        'js/main-slider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
