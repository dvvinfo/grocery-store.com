<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $tel
 * @property string $email
 * @property string $address
 * @property string $facebook
 * @property string $twitter
 * @property string $google
 * @property string $instagram
 * @property string $dribbble
 * @property string $vk
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tel', 'email'], 'required'],
            [['tel', 'email','address', 'facebook', 'twitter', 'google', 'instagram', 'dribbble', 'vk'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tel' => 'Телефон',
            'email' => 'Email',
            'address' => 'Адрес',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'google' => 'Google',
            'instagram' => 'Instagram',
            'dribbble' => 'Dribbble',
            'vk' => 'Vk',
        ];
    }
}
