<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Operacje;

/**
 * OperacjeSearch represents the model behind the search form of `app\models\Operacje`.
 */
class OperacjeSearch extends Operacje
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cena', 'kasjer_id'], 'integer'],
            [['opis', 'rodz', 'data_dodania'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Operacje::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cena' => $this->cena,
            'kasjer_id' => $this->kasjer_id,
            'data_dodania' => $this->data_dodania,
        ]);

        $query->andFilterWhere(['like', 'opis', $this->opis])
            ->andFilterWhere(['like', 'rodz', $this->rodz]);

        return $dataProvider;
    }
}
