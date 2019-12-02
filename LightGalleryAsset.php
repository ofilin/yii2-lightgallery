<?php

namespace ofilin\lightgallery;
use yii\web\AssetBundle;

class LightGalleryAsset extends AssetBundle
{
    public $sourcePath = '@bower/lightgallery';

    public $css = [
        'dist/css/lg-transitions.min.css',
        'dist/css/lightgallery.min.css'
    ];

    public $js = [
        'dist/js/lightgallery.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
}