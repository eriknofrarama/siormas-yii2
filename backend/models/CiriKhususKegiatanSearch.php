<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CiriKhususKegiatan;

/**
 * CiriKhususKegiatanSearch represents the model behind the search form of `backend\models\CiriKhususKegiatan`.
 */
class CiriKhususKegiatanSearch extends CiriKhususKegiatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ciri_khusus'], 'integer'],
            [['ciri_khusus_kegiatan'], 'safe'],
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
        $query = CiriKhususKegiatan::find();

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
            'id_ciri_khusus' => $this->id_ciri_khusus,
        ]);

        $query->andFilterWhere(['like', 'ciri_khusus_kegiatan', $this->ciri_khusus_kegiatan]);

        return $dataProvider;
    }
}
