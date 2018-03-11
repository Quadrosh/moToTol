<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quote".
 *
 * @property int $id
 * @property string $text
 * @property string $style_key
 * @property string $level
 */
class Quote extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quote';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text', 'style_key', 'level'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'style_key' => 'Style Key',
            'level' => 'Level',
        ];
    }
}
