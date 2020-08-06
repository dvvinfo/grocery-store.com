<?php


namespace app\models;


use yii\db\ActiveRecord;

class Testimonials extends ActiveRecord
{
    public static function tableName()
    {
        return 'testimonials';
    }

}
