<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BidangKegiatan;

/**
 * BidangKegiatanSearch represents the model behind the search form of `backend\models\BidangKegiatan`.
 */
class BidangKegiatanSearch extends BidangKegiatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bidang_kegiatan'], 'integer'],
            [['nama_kegiatan'], 'safe'],
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
        $query = BidangKegiatan::find();

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
            'id_bidang_kegiatan' => $this->id_bidang_kegiatan,
        ]);

        $query->andFilterWhere(['like', 'nama_kegiatan', $this->nama_kegiatan]);

        return $dataProvider;
    }
}
