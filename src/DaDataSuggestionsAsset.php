<?php

namespace creditanalytics\dadata;

use yii\web\AssetBundle;

/**
 * DaData Suggestions Asset AssetBundle
 */
class DaDataSuggestionsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/hflabs/suggestions-jquery/dist';

    public $js = [
        'js/jquery.suggestions.min.js'
    ];

    public $css = [
        'css/suggestions.css'
    ];
}
