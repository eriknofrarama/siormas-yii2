<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sekretariat".
 *
 * @property int $id_sekretariat
 * @property string $alamat_sekretariat
 * @property int $id_provinsi
 * @property int $id_kabupaten
 * @property string $kode_pos
 * @property string $no_telepon
 * @property string $no_fax
 * @property string $email
 * @property int $id_permohonan
 */
class Sekretariat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekretariat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['alamat_sekretariat', 'id_provinsi', 'id_kabupaten', 'kode_pos', 'no_telepon', 'no_fax', 'email', 'id_permohonan'], 'required'],
            [['alamat_sekretariat'], 'string'],
            [['id_provinsi', 'id_kabupaten', 'id_permohonan'], 'integer'],
            [['kode_pos'], 'string', 'max' => 10],
            [['no_telepon', 'no_fax'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sekretariat' => 'Id Sekretariat',
            'alamat_sekretariat' => 'Alamat Sekretariat :',
            'id_provinsi' => 'Provinsi :',
            'id_kabupaten' => 'Kabupaten :',
            'kode_pos' => 'Kode Pos :',
            'no_telepon' => 'No Telepon :',
            'no_fax' => 'No Fax :',
            'email' => 'Email :',
            'id_permohonan' => 'Id Permohonan',
        ];
    }
    public function getProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['id_provinsi' => 'id_provinsi']);
    }
    public function getKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kabupaten' => 'id_kabupaten']);
    }
    public function getPermohonan()
    {
        return $this->hasOne(DataPermohonan::className(), ['id_permohonan' => 'id_permohonan']);
    }
   
}
