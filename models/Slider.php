<?php


namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class Slider extends yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'slider';

    }
//    public function behaviors()
//    {
//        return [
//            [
//                'class' => TimestampBehavior::class,
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
//                ],
//                // если вместо метки времени UNIX используется datetime:
//                'value' => new Expression('NOW()'),
//            ],
//        ];
//    }
}
