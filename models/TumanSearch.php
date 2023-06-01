<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tuman;

/**
 * TumanSearch represents the model behind the search form about `app\models\Tuman`.
 */
class TumanSearch extends Tuman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuman_id', 'viloyat_id', 'tuman_nomi'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Tuman::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'tuman_id' => $this->tuman_id,
            'viloyat_id' => $this->viloyat_id,
            'tuman_nomi' => $this->tuman_nomi,
        ]);

        return $dataProvider;
    }
}
