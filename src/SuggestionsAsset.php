<?php

namespace efureev\dadata;

use yii\web\AssetBundle;
/**
 * Suggestions Asset AssetBundle
 */
class SuggestionsAsset extends AssetBundle
{
    public $sourcePath = '@efureev\dadata\assets';

    public $css=[
        'suggestions.css',
    ];

    public $depends = [
        'efureev\dadata\DaDataSuggestionsAsset',
    ];
}