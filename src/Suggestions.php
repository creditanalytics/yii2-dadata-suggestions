<?php

namespace efureev\dadata;

use yii\base\Exception;
use yii\base\Widget;

/**
 * Suggestions Component
 */
class Suggestions extends Widget
{

    public $token;
    public $el;
    public $serviceUrl = "https://suggestions.dadata.ru/suggestions/api/4_1/rs";
    public $type = "PARTY";
    public $count = 5;

    public function init()
    {
        parent::init();

        if (!$this->token || !$this->el)
            throw new Exception('Не правильный конфиг');
    }

    public function run()
    {
        DaDataSuggestionsAsset::register($this->view);

        $this->regJs();
    }

    protected function regJs()
    {
        $this->view->registerJs('
$("' . $this->el . '").suggestions({
        serviceUrl: "' . $this->serviceUrl . '",
        token: "' . $this->token . '",
        type: "' . $this->type . '",
        count: ' . $this->count . ',
        onSelect: function(suggestion) {
            console.log(suggestion);
        }
    });
');


    }
}