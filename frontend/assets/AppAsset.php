<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'jquery/jquerysctipttop.css',
        'nivo-lightbox/nivo-lightbox.css',
        'nivo-lightbox/themes/default/default.css',
    ];
    public $js = [
        'jquery/jquery.min.js',
        'nivo-lightbox/nivo-lightbox.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
