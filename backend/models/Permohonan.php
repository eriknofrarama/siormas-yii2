<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "permohonan".
 *
 * @property int $id_jenis_permohonan
 * @property string $jenis_permohonan
 */
class Permohonan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permohonan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_permohonan'], 'required'],
            [['jenis_permohonan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_permohonan' => 'Id Jenis Permohonan',
            'jenis_permohonan' => 'Jenis Permohonan',
        ];
    }
}
