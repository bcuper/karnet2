<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oplaty".
 *
 * @property int $id
 * @property float $mieszkanie
 * @property float $mpk
 * @property float $mosir
 * @property float $telefon
 * @property string $data
 */
class Oplaty extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oplaty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mieszkanie', 'mpk', 'mosir', 'telefon', 'data'], 'required'],
            [['mieszkanie', 'mpk', 'mosir', 'telefon'], 'number'],
            [['data'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mieszkanie' => 'Mieszkanie',
            'mpk' => 'Mpk',
            'mosir' => 'Mosir',
            'telefon' => 'Telefon',
            'data' => 'Data',
        ];
    }
}
