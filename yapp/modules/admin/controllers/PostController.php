<?php

namespace app\modules\admin\controllers;

use app\models\Imagefiles;
use app\models\PostImage;
use Yii;
use app\models\Post;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;



/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends AdminController
{


    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        Url::remember();
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        Url::remember();
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::previous());
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(Url::previous());
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Upload images for  model with autofill corresponding model property
     */
    public function actionImageUpload()
    {
        $uploadModel = new UploadForm();
        if (Yii::$app->request->isPost) {
            $uploadModel->imageFile = UploadedFile::getInstance($uploadModel, 'imageFile');
            $data=Yii::$app->request->post('UploadForm');
            $toModelProperty = $data['toModelProperty'];
            $model = Post::find()->where(['id'=>$data['toModelId']])->one();
            if ($uploadModel->upload()) {
                if ($toModelProperty == 'postImage') {
                    $postImage = new PostImage();
                    $postImage['post_id'] = $model['id'];
                    $postImage['imagefile_id'] = $uploadModel['id'];
                    $postImage->save();
                } else {
                    $model->$toModelProperty =
                        $uploadModel->imageFile->baseName .
                        '.' .
                        $uploadModel->imageFile->extension;
                    $model->save();
                }

                Yii::$app->session->setFlash('success', 'Успешно');
            } else {
                Yii::$app->session->setFlash('error', 'не получается');
            }
            return $this->redirect(Url::previous());
        }
    }


    public function actionImageAssignUploaded()
    {
        $uploadModel = new UploadForm();
        if (Yii::$app->request->isPost) {

            $data=Yii::$app->request->post('UploadForm');
            $chosenImageFileId = $data['imageFileName'];
            $toModelProperty = $data['toModelProperty'];
            $model = Post::find()->where(['id'=>$data['toModelId']])->one();
            if ($uploadModel->validate()) {
                if ($toModelProperty == 'postImage') {
                    $postImage = new PostImage();
                    $postImage['post_id'] = $model['id'];
                    $postImage['imagefile_id'] = $chosenImageFileId;
                    $postImage->save();
                } else {
                    $imagefile =  Imagefiles::find()->where(['id'=>$chosenImageFileId])->one();
                    $model->$toModelProperty = $imagefile['name'];
                    $model->save();
                }

                Yii::$app->session->setFlash('success', 'Успешно');
            } else {
                Yii::$app->session->setFlash('error', 'не получается');
                var_dump($uploadModel->errors);
//                foreach ($uploadModel->errors as $error) {
//
//                }


            }
            return $this->redirect(Url::previous());
        }
    }
}
