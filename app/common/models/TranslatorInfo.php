<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * TranslatorInfo model
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property string $phone
 * @property int $is_weekend
 */
class TranslatorInfo extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%translator_info}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'language', 'phone'], 'required'],
            [['name', 'language', 'phone'], 'string'],
            ['is_weekend', 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Имя'),
            'language' => Yii::t('app', 'Язык перевода'),
            'phone' => Yii::t('app', 'Телефон'),
            'is_weekend' => Yii::t('app', 'Работа в выходные дни'),
        ];
    }
}
