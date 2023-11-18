<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPermohonan;

/**
 * DataPermohonanSearch represents the model behind the search form of `backend\models\DataPermohonan`.
 */
class DataPermohonanSearch extends DataPermohonan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_permohonan', 'id_jenis_permohonan', 'id_jenis_akta', 'id_bidang_kegiatan', 'id_ciri_khusus'], 'integer'],
            [['nama_ormas', 'tempat_pendirian', 'tanggal_pendirian', 'no_surat_permohonan', 'tanggal_surat_permohonan', 'scan_surat_permohonan', 'no_akta_notaris', 'tanggal_akta_notaris', 'nama_notaris', 'scan_akta_notaris', 'no_npwp', 'scan_npwp', 'nama_bank', 'no_rekening', 'tujuan_ormas'], 'safe'],
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
        $query = DataPermohonan::find();

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
            'id_permohonan' => $this->id_permohonan,
            'id_jenis_permohonan' => $this->id_jenis_permohonan,
            'tanggal_pendirian' => $this->tanggal_pendirian,
            'tanggal_surat_permohonan' => $this->tanggal_surat_permohonan,
            'tanggal_akta_notaris' => $this->tanggal_akta_notaris,
            'id_jenis_akta' => $this->id_jenis_akta,
            'id_bidang_kegiatan' => $this->id_bidang_kegiatan,
            'id_ciri_khusus' => $this->id_ciri_khusus,
        ]);

        $query->andFilterWhere(['like', 'nama_ormas', $this->nama_ormas])
            ->andFilterWhere(['like', 'tempat_pendirian', $this->tempat_pendirian])
            ->andFilterWhere(['like', 'no_surat_permohonan', $this->no_surat_permohonan])
            ->andFilterWhere(['like', 'scan_surat_permohonan', $this->scan_surat_permohonan])
            ->andFilterWhere(['like', 'no_akta_notaris', $this->no_akta_notaris])
            ->andFilterWhere(['like', 'nama_notaris', $this->nama_notaris])
            ->andFilterWhere(['like', 'scan_akta_notaris', $this->scan_akta_notaris])
            ->andFilterWhere(['like', 'no_npwp', $this->no_npwp])
            ->andFilterWhere(['like', 'scan_npwp', $this->scan_npwp])
            ->andFilterWhere(['like', 'nama_bank', $this->nama_bank])
            ->andFilterWhere(['like', 'no_rekening', $this->no_rekening])
            ->andFilterWhere(['like', 'tujuan_ormas', $this->tujuan_ormas]);

        return $dataProvider;
    }
}
