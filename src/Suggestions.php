<?php

namespace creditanalytics\dadata;

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

    public $onSelect;
    public $onSelectNothing;
    public $onInvalidateSelection;
    public $onSearchStart;
    public $onSearchComplete;
    public $onSearchError;
    public $onSuggestionsFetch;

    private $types = ['NAME', 'ADDRESS', 'PARTY', 'BANK', 'EMAIL'];

    public function init()
    {
        parent::init();

        if (!$this->token || !$this->el)
            throw new Exception('Не правильный конфиг');

        if (!in_array($this->type, $this->types))
            throw new Exception('Не правильный тип данных.');
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
        count: ' . $this->count .
            (empty($this->onSelect) ? '' : ', onSelect:' . $this->onSelect) .
            (empty($this->onSelectNothing) ? '' : ', onSelectNothing:' . $this->onSelectNothing) .
            (empty($this->onInvalidateSelection) ? '' : ', onInvalidateSelection:' . $this->onInvalidateSelection) .
            (empty($this->onSearchStart) ? '' : ', onSearchStart:' . $this->onSearchStart) .
            (empty($this->onSearchComplete) ? '' : ', onSearchComplete:' . $this->onSearchComplete) .
            (empty($this->onSearchError) ? '' : ', onSearchError:' . $this->onSearchError) .
            (empty($this->onSuggestionsFetch) ? '' : ', onSuggestionsFetch:' . $this->onSuggestionsFetch) .

            '});
');
    }
}
