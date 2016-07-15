<?php

namespace efureev\dadata;

use yii\web\AssetBundle;

/**
 * DaData Suggestions Asset AssetBundle
 */
class DaDataSuggestionsAsset extends AssetBundle
{
    public $sourcePath = '@bower/suggestions.jquery/dist';

    public $js = [
        'suggestions-jquery.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}