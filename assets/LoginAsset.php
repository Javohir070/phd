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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot/web';
    public $baseUrl = '@web/web';
    public $css = [
        'css/site.css',
        'theme/css/vendors.min.css',
        'theme/css/bootstrap.min.css',
        'theme/css/bootstrap-extended.min.css',
        'theme/css/colors.min.css',
        'theme/css/components.min.css',
        'theme/css/vertical-menu.min.css',
        'theme/css/palette-gradient.min.css',
        'theme/css/login-register.min.css',
        'theme/css/apexcharts.css',
        'theme/css/style.css',
    ];
    public $js = [
        'theme/js/vendors.min.js',
        'theme/js/chart.min.js',
        'theme/js/apexcharts.min.js',
        'theme/js/app-menu.min.js',
        'theme/js/app.min.js',
        //'theme/js/customizer.min.js',
        'theme/js/form-login-register.min.js',
        'theme/js/i18n-resources.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
