<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataKepengurusan;

/**
 * DataKepengurusanSearch represents the model behind the search form of `backend\models\DataKepengurusan`.
 */
class DataKepengurusanSearch extends DataKepengurusan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kepengurusan', 'id_permohonan', 'id_sekretariat'], 'integer'],
            [['nama_ketua', 'nik', 'tanggal_awal', 'tanggal_akhir'], 'safe'],
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
        $query = DataKepengurusan::find();

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
            'id_kepengurusan' => $this->id_kepengurusan,
            
            'tanggal_awal' => $this->tanggal_awal,
            'tanggal_akhir' => $this->tanggal_akhir,
            'id_permohonan' => $this->id_permohonan,
            'id_sekretariat' => $this->id_sekretariat,
        ]);

        $query->andFilterWhere(['like', 'nama_ketua', $this->nama_ketua])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
