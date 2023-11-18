<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ciri_khusus_kegiatan".
 *
 * @property int $id_ciri_khusus
 * @property string $ciri_khusus_kegiatan
 */
class CiriKhususKegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciri_khusus_kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ciri_khusus_kegiatan'], 'required'],
            [['ciri_khusus_kegiatan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ciri_khusus' => 'Id Ciri Khusus',
            'ciri_khusus_kegiatan' => 'Ciri Khusus Kegiatan',
        ];
    }
}
