<?php


namespace app\models;


use yii\base\Model;

class KalkulatorForm extends Model
{

    public $saldo;
    public $mieszkanie;
    public $mpk;
    public $mosir;
    public $telefon;

    public $czy_mpk;
    public $czy_mosir;
    public $czy_telefon;

    public function rules()
    {
        return [
            [['saldo', 'mieszkanie'], 'required'],
            [['saldo', 'mieszkanie', 'mpk', 'mosir', 'telefon'], 'number'],
            [['czy_mpk', 'czy_mosir', 'czy_telefon'], 'boolean'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'saldo' => 'Podaj obecne saldo na koncie',
            'mieszkanie' => 'Oplata za mieszkanie',
            'mpk' => 'Oplata za bilet MPK',
            'mosir' => 'Oplata za karnet MOSIR',
            'telefon' => 'Oplata za doładowanie telefonu',
            'czy_mpk' => 'Odjąć za bilet MPK',
            'czy_mosir' => 'Odjąć za karnet MOSIR',
            'czy_telefon' => 'Odjąć za doładowanie telefonu',
        ];
    }
}