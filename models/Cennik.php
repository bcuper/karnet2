<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cennik".
 *
 * @property int $id
 * @property string $nazwa
 * @property int $cena
 */
class Cennik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cennik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nazwa', 'cena'], 'required'],
            [['cena'], 'integer'],
            [['nazwa'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nazwa' => 'Nazwa',
            'cena' => 'Cena',
        ];
    }

    public static function ileWejsc($saldo)
    {
        $miejsca = self::find()->all();
        $ret = [];
        $i = 0;
        foreach ($miejsca as $miejsce) {
            $ret[$i]['nazwa'] = $miejsce->nazwa;
            $ret[$i]['cena'] = $miejsce->cena;
            $ret[$i]['ile'] = $saldo/$miejsce->cena;
            $i++;
        }
        return $ret;
    }
}
