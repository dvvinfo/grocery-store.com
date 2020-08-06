<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $text
 * @property string $name
 * @property string $surname
 * @property string $position
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'name', 'surname'], 'required'],
            [['text'], 'string'],
            [['name', 'surname', 'position'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Отзыв',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'position' => 'Должность',
        ];
    }
}
