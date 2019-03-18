<?php

namespace effsoft\eff\asset\jquery\easing;

use effsoft\eff\EffAssetBundle;

class JqueryEasingAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/jquery.easing';

    public function init(){
        parent::init();

    }

    public $js = [
        YII_ENV_DEV ? 'js/jquery.easing.js':'js/jquery.easing.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'js/*',
        ],
    ];

}