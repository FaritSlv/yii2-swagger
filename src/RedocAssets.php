<?php
/**
 * Yii2 php swagger module
 *
 * @author    Simon Rodin <master@genx.ru>
 * @license   http://opensource.org/licenses/MIT MIT Public
 * @link      https://github.com/genxoft/yii2-oas3
 *
 */

namespace faritslv\swagger;

use yii\web\AssetBundle;
use yii\web\View;

class RedocAssets extends AssetBundle
{
    public $sourcePath = '@farit-slv/swagger/assets';
    
    public $js = [
        ['position' => View::POS_END, 'src' => 'js/redoc.standalone.js'],
    ];
}