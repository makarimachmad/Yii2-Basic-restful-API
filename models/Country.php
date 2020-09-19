<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "country".
 *
 * @property string $code
 * @property string $name
 * @property int $population
 * @property string $bendera
 */
class Country extends \yii\db\ActiveRecord
{
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
        //https://www.yiiframework.com/doc/guide/2.0/en/input-file-upload
    }

    /**
     * {@inheritdoc}
     */
    //public $imageFile;
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['population'], 'integer'],
            [['bendera'], 'file', 'skipOnEmpty' => True, 'extensions' => 'png, jpg, svg'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
            'bendera' => 'Bendera',
        ];
    }
}
