<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bidang_kegiatan".
 *
 * @property int $id_bidang_kegiatan
 * @property string $nama_kegiatan
 */
class BidangKegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bidang_kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kegiatan'], 'required'],
            [['nama_kegiatan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bidang_kegiatan' => 'Id Bidang Kegiatan',
            'nama_kegiatan' => 'Nama Kegiatan',
        ];
    }
}
