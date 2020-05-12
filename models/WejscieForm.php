<?php


namespace app\models;


use yii\db\ActiveRecord;

class WejscieForm extends ActiveRecord
{
    public $opis;
    public $rodz;
    public $cena;
    public $kasjer_id;
    public $data_dodania;

    public function rules()
    {
        return [
            [['opis', 'cena', 'rodz', 'kasjer_id', 'data_dodania'], 'required'],
            [['kasjer_id'], 'integer'],
            [['cena'], 'double'],
            [['rodz'], 'string'],
            [['data_dodania'], 'safe'],
            [['opis'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'opis' => 'Opis wejścia',
            'cena' => 'Cena',
            'rodz' => 'Rodz',
            'kasjer_id' => 'Kasjer ID',
            'data_dodania' => 'Data Dodania',
        ];
    }
}