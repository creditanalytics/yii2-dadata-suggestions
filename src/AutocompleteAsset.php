<?php

namespace creditanalytics\dadata;

use yii\web\AssetBundle;

/**
 * Jquery Autocomplete AssetBundle
 */
class JqueryJsonAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-json/dist';

    public $js = [
        'jquery.json.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
