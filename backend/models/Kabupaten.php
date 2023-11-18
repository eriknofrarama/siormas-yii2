<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property int $id_kabupaten
 * @property string $nama_kabupaten
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kabupaten'], 'required'],
            [['nama_kabupaten'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kabupaten' => 'Id Kabupaten',
            'nama_kabupaten' => 'Nama Kabupaten',
        ];
    }
}
