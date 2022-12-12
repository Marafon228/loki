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
        'css/site.css',
        '/web/css/fontawesome.min.css',
        '/web/css/ionicons.min.css',
        '/web/css/simple-line-icons.css',
        '/web/css/plugins/jquery-ui.min.css',
        '/web/css/bootstrap.min.css',
        '/web/css/plugins/plugins.css',
        '/web/css/style.min.css',
        '/web/css/plugins/aos.css"',
    ];
    public $js = [
        '/web/js/vendor/jquery-3.5.1.min.js',
        '/web/js/vendor/modernizr-3.7.1.min.js',
        '/web/js/popper.min.js',
        '/web/js/plugins/jquery-ui.min.js',
        '/web/js/bootstrap.min.js',
        '/web/js/plugins/plugins.js',
        '/web/js/plugins/ajax-contact.js',
        '/web/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset'
    ];
}
