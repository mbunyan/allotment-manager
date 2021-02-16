<?php

namespace app\components\grid;

use Yii;
use yii\helpers\Html;

/**
 * Class ActionColumn
 * Uses bootstrap 4 button icons
 * @author  Michael Bunyan
 * @package app\components\grid
 */
class ActionColumn extends \yii\grid\ActionColumn
{

    protected function initDefaultButtons()
    {
        $this->initDefaultButton('view', 'btn btn-info btn-sm');
        $this->initDefaultButton('update', 'btn btn-warning btn-sm');
        $this->initDefaultButton('delete', 'btn btn-danger btn-sm', [
            'data-confirm' => Yii::t('yii', 'Are you sure about deletion?'),
            'data-method' => 'post',
        ]);
    }

    protected function initDefaultButton($name, $iconName, $additionalOptions = [])
    {
        if (!isset($this->buttons[$name]) && strpos($this->template, '{' . $name . '}') !== false) {
            $this->buttons[$name] = function ($url, $model, $key) use ($name, $iconName, $additionalOptions) {
                switch ($name) {
                    case 'view':
                        $title = Yii::t('yii', 'View');
                        break;
                    case 'update':
                        $title = Yii::t('yii', 'Update');
                        break;
                    case 'delete':
                        $title = Yii::t('yii', 'Delete');
                        break;
                    default:
                        $title = ucfirst($name);
                }
                $options = array_merge([
                    'title' => $title,
                    'aria-label' => $title,
                    'data-pjax' => '0',
                    'class' => $iconName,
                ], $additionalOptions, $this->buttonOptions);

                return Html::a($title, $url, $options);
            };
        }
    }
}
