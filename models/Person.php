<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $fio
 * @property string $address
 * @property string $city
 * @property int $telephone
 *
 * @property Authors $authors
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'address', 'city', 'telephone'], 'required'],
            [['fio', 'address', 'city'], 'string'],
            [['telephone'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'address' => 'Address',
            'city' => 'City',
            'telephone' => 'Telephone',
        ];
    }

}
