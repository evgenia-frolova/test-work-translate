<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class VueAsset extends AssetBundle
{
    public $js = [
        'https://unpkg.com/vue@3/dist/vue.global.js',
    ];
}
