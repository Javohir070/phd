<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Viloyat;

/**
 * ViloyatSearch represents the model behind the search form about `app\models\Viloyat`.
 */
class ViloyatSearch extends Viloyat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['viloyat_id'], 'integer'],
            [['viloyat_nomi'], 'safe'],
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
        $query = Viloyat::find();

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
            'viloyat_id' => $this->viloyat_id,
        ]);

        $query->andFilterWhere(['like', 'viloyat_nomi', $this->viloyat_nomi]);

        return $dataProvider;
    }
}
