<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_image".
 *
 * @property int $id
 * @property int $post_id
 * @property int $imagefile_id
 * @property int $list_num
 * @property string $alt
 */
class PostImage extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'imagefile_id', 'list_num'], 'integer'],
            [['alt'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'imagefile_id' => 'Imagefile ID',
            'list_num' => 'List Num',
            'alt' => 'Alt',
        ];
    }

    public function getImage()
    {
        return $this->hasOne(Imagefiles::className(),['id'=>'imagefile_id']);
    }

    public function getPost()
    {
        return $this->hasOne(Post::className(),['id'=>'post_id']);
    }
}
