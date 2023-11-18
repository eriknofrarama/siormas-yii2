<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KelengkapanAdministrasi;

/**
 * KelengkapanAdministrasiSearch represents the model behind the search form of `backend\models\KelengkapanAdministrasi`.
 */
class KelengkapanAdministrasiSearch extends KelengkapanAdministrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_administrasi', 'id_permohonan', 'id_sekretariat', 'id_kepengurusan'], 'integer'],
            [['scan_anggaran_dasar', 'scan_logo', 'scan_proker', 'scan_keterangan_domisili', 'scan_bukti_kepemilikan', 'scan_foto_kantor', 'scan_keputusan_susunan_pengurus', 'scan_biodata_ketua', 'scan_foto_ketua', 'scan_ktp_ketua', 'scan_biodata_sekretaris', 'scan_foto_sekretaris', 'scan_ktp_sekretaris', 'scan_biodata_bendahara', 'scan_foto_bendahara', 'scan_ktp_bendahara', 'scan_formulir_isian_data_ormas', 'scan_surat_pernyataan_permendagri', 'scan_keabsahan_ormas', 'scan_pengantar_dari_kesbangpol'], 'safe'],
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
        $query = KelengkapanAdministrasi::find();

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
            'id_administrasi' => $this->id_administrasi,
            'id_permohonan' => $this->id_permohonan,
            'id_sekretariat' => $this->id_sekretariat,
            'id_kepengurusan' => $this->id_kepengurusan,
        ]);

        $query->andFilterWhere(['like', 'scan_anggaran_dasar', $this->scan_anggaran_dasar])
            ->andFilterWhere(['like', 'scan_logo', $this->scan_logo])
            ->andFilterWhere(['like', 'scan_proker', $this->scan_proker])
            ->andFilterWhere(['like', 'scan_keterangan_domisili', $this->scan_keterangan_domisili])
            ->andFilterWhere(['like', 'scan_bukti_kepemilikan', $this->scan_bukti_kepemilikan])
            ->andFilterWhere(['like', 'scan_foto_kantor', $this->scan_foto_kantor])
            ->andFilterWhere(['like', 'scan_keputusan_susunan_pengurus', $this->scan_keputusan_susunan_pengurus])
            ->andFilterWhere(['like', 'scan_biodata_ketua', $this->scan_biodata_ketua])
            ->andFilterWhere(['like', 'scan_foto_ketua', $this->scan_foto_ketua])
            ->andFilterWhere(['like', 'scan_ktp_ketua', $this->scan_ktp_ketua])
            ->andFilterWhere(['like', 'scan_biodata_sekretaris', $this->scan_biodata_sekretaris])
            ->andFilterWhere(['like', 'scan_foto_sekretaris', $this->scan_foto_sekretaris])
            ->andFilterWhere(['like', 'scan_ktp_sekretaris', $this->scan_ktp_sekretaris])
            ->andFilterWhere(['like', 'scan_biodata_bendahara', $this->scan_biodata_bendahara])
            ->andFilterWhere(['like', 'scan_foto_bendahara', $this->scan_foto_bendahara])
            ->andFilterWhere(['like', 'scan_ktp_bendahara', $this->scan_ktp_bendahara])
            ->andFilterWhere(['like', 'scan_formulir_isian_data_ormas', $this->scan_formulir_isian_data_ormas])
            ->andFilterWhere(['like', 'scan_surat_pernyataan_permendagri', $this->scan_surat_pernyataan_permendagri])
            ->andFilterWhere(['like', 'scan_keabsahan_ormas', $this->scan_keabsahan_ormas])
            ->andFilterWhere(['like', 'scan_pengantar_dari_kesbangpol', $this->scan_pengantar_dari_kesbangpol]);

        return $dataProvider;
    }
}
