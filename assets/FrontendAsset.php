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
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot/web';
    public $baseUrl = '@web/web';
    public $css = [
        // 'css/site.css',
        '/web/frontend/assets/css/preload.min.css',
        '/web/frontend/assets/css/plugins.min.css',
        '/web/frontend/assets/css/style.light-blue-500.min.css',
        '/web/frontend/assets/css/width-boxed.min.css'
    ];
    public $js = [
//        '/web/frontend/assets/js/plugins.bundle.js',
        '/web/frontend/assets/js/plugins.min.js',
        '/web/frontend/assets/js/app.min.js',
        '/web/frontend/assets/js/configurator.min.js',
        '/web/frontend/assets/js/script.js',
        '/web/frontend/assets/js/index.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js',
        'https://cdn.jsdelivr.net/npm/sweetalert2@11'
    ];
    public $depends = [
        'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',

    ];
}
