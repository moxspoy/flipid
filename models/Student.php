<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $nim
 * @property string $name
 * @property string $address
 * @property int $sex
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'name', 'address'], 'required'],
            [['sex'], 'integer'],
            [['nim'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'name' => 'Name',
            'address' => 'Address',
            'sex' => 'Sex',
        ];
    }
}
