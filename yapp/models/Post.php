<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $list_name
 * @property int $list_num
 * @property string $hrurl
 * @property string $title
 * @property string $symptom
 * @property string $treatment
 * @property string $result
 * @property string $pagehead
 * @property string $layout_type
 * @property string $topimage
 * @property string $promolink
 * @property string $promoname
 * @property string $imagelink
 * @property string $imagelink_alt
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['symptom',  'pagehead'], 'required'],
            [['list_num'], 'integer'],
            [['symptom', 'treatment', 'result'], 'string'],
            [['list_name', 'hrurl', 'title', 'pagehead', 'topimage', 'promolink', 'promoname', 'imagelink', 'imagelink_alt'], 'string', 'max' => 255],
            [['layout_type'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'list_name' => 'List Name',
            'list_num' => 'List Num',
            'hrurl' => 'Hrurl',
            'title' => 'Title',
            'symptom' => 'Symptom',
            'treatment' => 'Treatment',
            'result' => 'Result',
            'pagehead' => 'Pagehead',
            'layout_type' => 'Layout Type',
            'topimage' => 'Topimage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
        ];
    }

    public function getPostImages()
    {
        return $this->hasMany(PostImage::className(),['post_id'=>'id'])->orderBy('list_num');
    }
}
