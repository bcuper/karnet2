<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operacje".
 *
 * @property int $id
 * @property string $opis
 * @property int $cena
 * @property string $rodz
 * @property int $kasjer_id
 * @property string $data_dodania
 */
class Operacje extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operacje';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opis', 'cena', 'rodz', 'kasjer_id'], 'required'],
            [['kasjer_id'], 'integer'],
            [['cena'], 'number', 'numberPattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/'],
            [['rodz'], 'string'],
            [['data_dodania'], 'safe'],
            [['opis'], 'string', 'max' => 50],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->cena = str_replace(',','.', $this->cena);
            return true;
        } else {
            return false;
        }
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
            'rodz' => 'Rodz',
            'kasjer_id' => 'Kasjer ID',
            'data_dodania' => 'Data Dodania',
        ];
    }

    public function getKasjer()
    {
        return $this->hasOne(Kasjerzy::className(), ['id' => 'kasjer_id']);
    }

}
