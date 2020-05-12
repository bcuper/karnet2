<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kasjerzy".
 *
 * @property int $id
 * @property string $kasjer
 */
class Kasjerzy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kasjerzy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kasjer'], 'required'],
            [['kasjer'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kasjer' => 'Kasjer',
        ];
    }

    public function getOperacje()
    {
        return $this->hasMany(Operacje::className(), ['kasjer_id'=>'id']);
    }
}
