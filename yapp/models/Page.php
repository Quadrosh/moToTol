<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $hrurl
 * @property string $seo_logo
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $pagehead
 * @property string $pagedescription
 * @property string $text
 * @property string $imagelink
 * @property string $imagelink_alt
 * @property string $sendtopage
 * @property string $promolink
 * @property string $promoname
 * @property string $view
 * @property string $layout
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hrurl', 'seo_logo', 'title'], 'required'],
            [['seo_logo', 'description', 'keywords', 'pagedescription', 'text'], 'string'],
            [['hrurl', 'title', 'pagehead', 'imagelink', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname', 'view', 'layout'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hrurl' => 'Hrurl',
            'seo_logo' => 'Seo Logo',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'pagehead' => 'Pagehead',
            'pagedescription' => 'Pagedescription',
            'text' => 'Text',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
            'view' => 'View',
            'layout' => 'Layout',
        ];
    }
}
