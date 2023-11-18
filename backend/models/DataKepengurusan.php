<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data_kepengurusan".
 *
 * @property int $id_kepengurusan
 * @property string $nama_lengkap
 * @property string $nik
 * @property string $tanggal_awal
 * @property string $tanggal_akhir
 * @property int $id_permohonan
 * @property int $id_sekretariat
 */
class DataKepengurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_kepengurusan';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            // [[ 'nama_lengkap', 'nik', 'tanggal_awal', 'tanggal_akhir', 'id_permohonan', 'id_sekretariat'], 'required'],
            [['id_permohonan', 'id_sekretariat'], 'integer'],
            [['tanggal_awal', 'tanggal_akhir', 'tanggal_awal1', 'tanggal_awal2', 'tanggal_akhir1', 'tanggal_akhir2'], 'safe'],
            [['nama_ketua', 'nama_sekretaris', 'nama_bendahara'], 'string', 'max' => 50],
            [['nik', 'nik1', 'nik2'], 'string', 'max' => 30],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kepengurusan' => 'Id Kepengurusan',
            'nama_ketua' => 'Nama Ketua :',
            'nik' => 'NIK :',
            'nik1' => 'NIK :',
            'nik2' => 'NIK :',
            'tanggal_awal' => 'Masa Bakti Awal :',
            'tanggal_akhir' => 'Masa Bakti Akhir :',
            'nama_sekretaris' => 'Nama Sekretaris :',
            'tanggal_awal1' => 'Masa Bakti Awal :',
            'tanggal_akhir1' => 'Masa Bakti Akhir :',
            'nama_bendahara' => 'Nama Bendahara :',
            'tanggal_awal2' => 'Masa Bakti Awal :',
            'tanggal_akhir2' => 'Masa Bakti Akhir :',
            'id_permohonan' => 'Id Permohonan',
            'id_sekretariat' => 'Id Sekretariat',
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

}