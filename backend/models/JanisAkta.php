<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "janis_akta".
 *
 * @property int $id_jenis_akta
 * @property string $jenis_akta
 */
class JanisAkta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'janis_akta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_akta'], 'required'],
            [['jenis_akta'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_akta' => 'Id Jenis Akta',
            'jenis_akta' => 'Jenis Akta',
        ];
    }
}
