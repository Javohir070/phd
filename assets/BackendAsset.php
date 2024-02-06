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
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot/web';
    public $baseUrl = '@web/web';
    public $css = [
        'css/site.css',
        '/web/backend/app-assets/vendors/css/vendors.min.css',
        '/web/backend/css/style.css',
        '/web/backend/app-assets/vendors/css/weather-icons/climacons.min.css',
        '/web/backend/app-assets/fonts/meteocons/style.min.css',
        '/web/backend/app-assets/vendors/css/charts/morris.css',
        '/web/backend/app-assets/vendors/css/charts/chartist.css',
        '/web/backend/app-assets/vendors/css/charts/chartist-plugin-tooltip.css',
        
        '/web/backend/css/bootstrap.min.css',
        '/web/backend/css/bootstrap-extended.min.css',
        '/web/backend/css/colors.min.css',
        '/web/backend/css/components.min.css',
        '/web/backend/css/vertical-menu.min.css',
        '/web/backend/css/palette-gradient.min.css',
        //'/web/backend/css/cryptocoins.css',
        '/web/backend/css/apexcharts.css',
        '/web/backend/app-assets/css/pages/dashboard-ecommerce.min.css',
    ];
    public $js = [
        '/web/backend/js/vendors.min.js',
        '/web/backend/js/chart.min.js',
        '/web/backend/chart.js',
        '/web/backend/js/apexcharts.min.js',
        //'/web/backend/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js',
        '/web/backend/app-assets/vendors/js/charts/raphael-min.js',
        '/web/backend/app-assets/vendors/js/charts/morris.min.js',
        '/web/backend/app-assets/vendors/js/timeline/horizontal-timeline.js',
        '/web/backend/js/app-menu.min.js',
        '/web/backend/js/app.min.js',
        '/web/backend/js/customizer.min.js',
        '/web/backend/js/footer.min.js',
        '/web/backend/js/i18n-resources.min.js',
        '/web/frontend/assets/js/filter.js',
        '/web/backend/app-assets/js/scripts/charts/chartjs/line/line.min.js',
        '/web/backend/app-assets/js/scripts/modal/components-modal.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/line/line-area.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/line/line-logarithmic.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/line/line-multi-axis.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/line/line-skip-points.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/line/line-stacked-area.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/bar/column.js',
        '/web/backend/app-assets/js/modal.js',
        '/web/backend/app-assets/js/scripts/charts/apexcharts/charts-apexcharts.min.js',
        // '/web/backend/app-assets/js/scripts/charts/chartjs/bar/column-stacked.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
