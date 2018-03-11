<?php

namespace app\models;

use app\modules\admin\controllers\ImagefilesController;
use yii\base\Action;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
use app\models\Imagefiles;

class UploadForm extends Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $imageFileName;
    /**
     * @var UploadedFile
     */
    public $imageFile;
    /**
     * @var string
     */
    public $toModelId;
    /**
     * @var string
     */
    public $toModelProperty;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, svg'],
        ];
    }

//    public function uploadPostImage()
//    {
//        $imageListItem = new Imagefiles();
//        $fileName = $this->imageFile->baseName .'.' . $this->imageFile->extension;
//        if ($this->validate() && $imageListItem->addNew($fileName)) {
//            if ($this->imageFile->saveAs('img/' . $fileName)) {
//                return true;
//            } else {
//                return false;
//            }
//        }
//    }

    public function upload()
    {
        $imageListItem = new Imagefiles();
        $fileName = $this->imageFile->baseName .'.' . $this->imageFile->extension;
        if ($this->validate()) {
            if ($this->imageFile->saveAs('img/' . $fileName)) {
                $this->id  =  $imageListItem->addNew($fileName);
                return true;
            } else {
                return false;
            }
        }
    }

    public function change($filename)
    {
        if ($this->validate()) {
            if ($this->imageFile->saveAs(Yii::$app->basePath . '/web/img/' . $filename)) {
                return true;
            } else {
                return false;
            }
        }
    }





}