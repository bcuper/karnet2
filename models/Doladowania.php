<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doladowania".
 *
 * @property int $id
 * @property string $opis
 * @property float $cena
 * @property int $waznosc
 */
class Doladowania extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doladowania';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opis', 'cena', 'waznosc'], 'required'],
            [['cena'], 'number'],
            [['waznosc'], 'integer'],
            [['opis'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'opis' => 'Opis',
            'cena' => 'Cena',
            'waznosc' => 'Waznosc',
        ];
    }
}
