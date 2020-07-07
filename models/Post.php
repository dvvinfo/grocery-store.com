<?php


namespace app\models;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'img'], 'string', 'max' => 250],
        ];
    }
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок поста',
            'text' => 'Текст поста',
            'img' => 'Картинка поста',
            'created_at' => 'Добавлено',
            'updated_at' => 'Редактировано',
        ];
    }

}
