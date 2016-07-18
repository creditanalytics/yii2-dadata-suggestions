<?php

namespace efureev\dadata;

use yii\web\AssetBundle;

/**
 * Suggestions Asset AssetBundle
 */
class SuggestionsAsset extends AssetBundle
{
    public $sourcePath = '@efureev/dadata/assets';

    public $css = [
        'suggestions.css',
    ];

    public $js = [
        'suggestions.js',
    ];

    public $depends = [
        'efureev\dadata\DaDataSuggestionsAsset',
    ];

    /*public function init() {
        parent::init();
        $js     = 'var dadata = {token};';
        $js[]   = 'if ( typeof WebFont == "object" && typeof WebFont.load == "function" ) {';
        $js[]   = 'WebFontConfig = '.Json::encode($this->config).';';
        $js[]   = 'WebFont.load(WebFontConfig);';
        $js[]   = '}';
        $output = implode("\n", $js);

        $this->getView()->registerJs(new JsExpression(Html::decode($output)));
    }*/


}