<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sekretariat;

/**
 * SekretariatSearch represents the model behind the search form of `backend\models\Sekretariat`.
 */
class SekretariatSearch extends Sekretariat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekretariat', 'id_provinsi', 'id_kabupaten', 'id_permohonan'], 'integer'],
            [['alamat_sekretariat', 'kode_pos', 'no_telepon', 'no_fax', 'email'], 'safe'],
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
        $query = Sekretariat::find();

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
            'id_sekretariat' => $this->id_sekretariat,
            'id_provinsi' => $this->id_provinsi,
            'id_kabupaten' => $this->id_kabupaten,
            'id_permohonan' => $this->id_permohonan,
        ]);

        $query->andFilterWhere(['like', 'alamat_sekretariat', $this->alamat_sekretariat])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'no_telepon', $this->no_telepon])
            ->andFilterWhere(['like', 'no_fax', $this->no_fax])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
