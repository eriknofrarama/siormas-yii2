<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Permohonan;

/**
 * PermohonanSearch represents the model behind the search form of `backend\models\Permohonan`.
 */
class PermohonanSearch extends Permohonan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_permohonan'], 'integer'],
            [['jenis_permohonan'], 'safe'],
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
        $query = Permohonan::find();

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
            'id_jenis_permohonan' => $this->id_jenis_permohonan,
        ]);

        $query->andFilterWhere(['like', 'jenis_permohonan', $this->jenis_permohonan]);

        return $dataProvider;
    }
}
