<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelengkapan_administrasi".
 *
 * @property int $id_administrasi
 * @property string $scan_anggaran_dasar
 * @property string $scan_logo
 * @property string $scan_proker
 * @property string $scan_keterangan_domisili
 * @property string $scan_bukti_kepemilikan
 * @property string $scan_foto_kantor
 * @property string $scan_keputusan_susunan_pengurus
 * @property string $scan_biodata_ketua
 * @property string $scan_foto_ketua
 * @property string $scan_ktp_ketua
 * @property string $scan_biodata_sekretaris
 * @property string $scan_foto_sekretaris
 * @property string $scan_ktp_sekretaris
 * @property string $scan_biodata_bendahara
 * @property string $scan_foto_bendahara
 * @property string $scan_ktp_bendahara
 * @property string $scan_formulir_isian_data_ormas
 * @property string $scan_surat_pernyataan_permendagri
 * @property string $scan_keabsahan_ormas
 * @property string $scan_pengantar_dari_kesbangpol
 * @property int|null $id_permohonan
 * @property int|null $id_sekretariat
 * @property int|null $id_kepengurusan
 */
class KelengkapanAdministrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelengkapan_administrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['scan_anggaran_dasar', 'scan_logo', 'scan_proker', 'scan_keterangan_domisili', 'scan_bukti_kepemilikan', 'scan_foto_kantor', 'scan_keputusan_susunan_pengurus', 'scan_biodata_ketua', 'scan_foto_ketua', 'scan_ktp_ketua', 'scan_biodata_sekretaris', 'scan_foto_sekretaris', 'scan_ktp_sekretaris', 'scan_biodata_bendahara', 'scan_foto_bendahara', 'scan_ktp_bendahara', 'scan_formulir_isian_data_ormas', 'scan_surat_pernyataan_permendagri', 'scan_keabsahan_ormas', 'scan_pengantar_dari_kesbangpol'], 'required'],
            [['id_permohonan', 'id_sekretariat', 'id_kepengurusan'], 'integer'],
            [['scan_anggaran_dasar', 'scan_logo', 'scan_proker', 'scan_keterangan_domisili', 'scan_bukti_kepemilikan', 'scan_foto_kantor', 'scan_keputusan_susunan_pengurus', 'scan_biodata_ketua', 'scan_foto_ketua', 'scan_ktp_ketua', 'scan_biodata_sekretaris', 'scan_foto_sekretaris', 'scan_ktp_sekretaris', 'scan_biodata_bendahara', 'scan_foto_bendahara', 'scan_ktp_bendahara', 'scan_formulir_isian_data_ormas', 'scan_surat_pernyataan_permendagri', 'scan_keabsahan_ormas', 'scan_pengantar_dari_kesbangpol'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_administrasi' => 'Id Administrasi',
            'scan_anggaran_dasar' => 'Scan Anggaran Dasar   :',
            'scan_logo' => 'Scan Logo   :',
            'scan_proker' => 'Scan Proker   :',
            'scan_keterangan_domisili' => 'Scan Keterangan Domisili :',
            'scan_bukti_kepemilikan' => 'Scan Bukti Kepemilikan :',
            'scan_foto_kantor' => 'Scan Foto Kantor :',
            'scan_keputusan_susunan_pengurus' => 'Scan Keputusan Susunan Pengurus   :',
            'scan_biodata_ketua' => 'Scan Biodata Ketua :',
            'scan_foto_ketua' => 'Scan Foto Ketua   :',
            'scan_ktp_ketua' => 'Scan Ktp Ketua :',
            'scan_biodata_sekretaris' => 'Scan Biodata Sekretaris   :',
            'scan_foto_sekretaris' => 'Scan Foto Sekretaris :',
            'scan_ktp_sekretaris' => 'Scan Ktp Sekretaris   :',
            'scan_biodata_bendahara' => 'Scan Biodata Bendahara :',
            'scan_foto_bendahara' => 'Scan Foto Bendahara   :',
            'scan_ktp_bendahara' => 'Scan Ktp Bendahara :',
            'scan_formulir_isian_data_ormas' => 'Scan Formulir Isian Data Ormas :',
            'scan_surat_pernyataan_permendagri' => 'Scan Surat Pernyataan Permendagri   :',
            'scan_keabsahan_ormas' => 'Scan Keabsahan Ormas :',
            'scan_pengantar_dari_kesbangpol' => 'Scan Pengantar Dari Kesbangpol :',
            'id_permohonan' => 'Id Permohonan   :',
            'id_sekretariat' => 'Id Sekretariat :',
            'id_kepengurusan' => 'Id Kepengurusan   :',
        ];
    }
    public function getPermohonan()
    {
        return $this->hasOne(DataPermohonan::className(), ['id_permohonan' => 'id_permohonan']);
    }
    public function getSekretariat()
    {
        return $this->hasOne(Sekretariat::className(), ['id_sekretariat' => 'id_sekretariat']);
    }
    public function getKepengurusan()
    {
        return $this->hasOne(DataKepengurusan::className(), ['id_kepengurusan' => 'id_kepengurusan']);
    }
}
