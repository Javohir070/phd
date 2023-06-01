<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bemor;

/**
 * BemorSearch represents the model behind the search form of `app\models\Bemor`.
 */
class BemorSearch extends Bemor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'birth_day', 'created_at', 'updated_at'], 'integer'],
            [['last_name', 'first_name', 'middle_name', 'telefon', 'email', 'jinsi', 'olingan_signal', 'signal_1', 'signal_2', 'signal_3', 'signal_4', 'tashxis', 'tashxis_file', 'manzili', 'avatar'], 'safe'],
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
        $query = Bemor::find();

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
            'birth_day' => $this->birth_day,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'jinsi', $this->jinsi])
            ->andFilterWhere(['like', 'olingan_signal', $this->olingan_signal])
            ->andFilterWhere(['like', 'signal_1', $this->signal_1])
            ->andFilterWhere(['like', 'signal_2', $this->signal_2])
            ->andFilterWhere(['like', 'signal_3', $this->signal_3])
            ->andFilterWhere(['like', 'signal_4', $this->signal_4])
            ->andFilterWhere(['like', 'tashxis', $this->tashxis])
            ->andFilterWhere(['like', 'tashxis_file', $this->tashxis_file])
            ->andFilterWhere(['like', 'manzili', $this->manzili])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
