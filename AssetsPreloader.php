<?php

namespace avitamin\assetspreloader;

use Yii;
use Yii\base\Component;

/**
 * Подгрузка необходимых AssetsBundle
 *
 * @author vit1
 */
class AssetsPreloader extends Component
{
    /**
     * Массив с именами классов наборов
     * @var array
     */
    public $assetsClasses = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        foreach ($this->assetsClasses as $value) {
            /* @var $value yii\web\AssetBundle */
            $value::register(Yii::$app->getView());
        }
    }

}
