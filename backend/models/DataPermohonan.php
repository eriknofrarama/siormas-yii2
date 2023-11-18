<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data_permohonan".
 *
 */
class DataPermohonan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_permohonan';
    }

    /**
     * {@inheritdoc}
     */
   
    public function rules()
    {
        return [
            // [['id_jenis_permohonan', 'nama_ormas', 'tempat_pendirian', 'tanggal_pendirian', 'no_surat_permohonan', 'tanggal_surat_permohonan', 'scan_surat_permohonan', 'no_akta_notaris', 'tanggal_akta_notaris', 'nama_notaris', 'id_jenis_akta', 'scan_akta_notaris', 'no_npwp', 'scan_npwp', 'nama_bank', 'no_rekening', 'id_bidang_kegiatan', 'id_ciri_khusus', 'tujuan_ormas'], 'required'],
            [['id_jenis_permohonan', 'id_jenis_akta', 'id_bidang_kegiatan', 'id_ciri_khusus'], 'integer'],
            [['tanggal_pendirian', 'tanggal_surat_permohonan', 'tanggal_akta_notaris'], 'safe'],
            [['tujuan_ormas'], 'string'],
            [['nama_ormas', 'tempat_pendirian', 'nama_notaris'], 'string', 'max' => 100],
            [['no_surat_permohonan', 'no_akta_notaris', 'no_npwp', 'nama_bank', 'no_rekening'], 'string', 'max' => 50],
            [['scan_surat_permohonan', 'scan_akta_notaris', 'scan_npwp'], 'string', 'max' => 255],
            ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_permohonan' => 'Id Permohonan',
            'id_jenis_permohonan' => 'Jenis Permohonan  :',
            'nama_ormas' => 'Nama Ormas :',
            'tempat_pendirian' => 'Tempat Pendirian :',
            'tanggal_pendirian' => 'Tanggal Pendirian   :',
            'no_surat_permohonan' => 'No Surat Permohonan   :',
            'tanggal_surat_permohonan' => 'Tanggal Surat Permohonan :',
            'scan_surat_permohonan' => 'Scan Surat Permohonan   :',
            'no_akta_notaris' => 'No Akta Notaris   :',
            'tanggal_akta_notaris' => 'Tanggal Akta Notaris :',
            'nama_notaris' => 'Nama Notaris :',
            'id_jenis_akta' => 'Jenis Akta  :',
            'scan_akta_notaris' => 'Scan Akta Notaris   :',
            'no_npwp' => 'No Npwp   :',
            'scan_npwp' => 'Scan Npwp   :',
            'nama_bank' => 'Nama Bank   :',
            'no_rekening' => 'No Rekening   :',
            'id_bidang_kegiatan' => 'Bidang Kegiatan    :',
            'id_ciri_khusus' => 'Ciri Khusus    :',
            'tujuan_ormas' => 'Tujuan Ormas :',
        ];
    }
    public function getPermohonan()
    {
        return $this->hasOne(Permohonan::className(), ['id_jenis_permohonan' => 'id_jenis_permohonan']);
    }
    public function getAkta()
    {
        return $this->hasOne(JanisAkta::className(), ['id_jenis_akta' => 'id_jenis_akta']);
    }
    public function getkegiatan()
    {
        return $this->hasOne(BidangKegiatan::className(), ['id_bidang_kegiatan' => 'id_bidang_kegiatan']);
    }
    public function getCiri()
    {
        return $this->hasOne(CiriKhususKegiatan::className(), ['id_ciri_khusus' => 'id_ciri_khusus']);
    }
    public function getnamaormas(){
        $data = DataPermohonan::find()-> all();
        $dropDown = \yii\helpers\ArrayHelper::map($data, 'id_permohonan','id_permohonan');
        return $dropDown;
    }
    
}
