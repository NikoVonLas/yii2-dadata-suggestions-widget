<?php

namespace corpsepk\DaData;

use yii\web\AssetBundle;

/**
 * TODO добавить возможность грузить ресурсы не только с CDN
 * Asset bundle for SuggestionsWidget
 *
 * @author Alexsandr Khramov <corpsepk@gmail.com>
 */
class SuggestionsWidgetAsset extends AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = ['https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js', 'https://cdn.jsdelivr.net/npm/suggestions-jquery@18.3.3/dist/js/jquery.suggestions.min.js'];

    public $css = ['https://cdn.jsdelivr.net/npm/suggestions-jquery@18.3.3/dist/css/suggestions.min.css'];
}
