<?php
namespace app\controllers;
use \yii\web\Controller;
use app\models\Form;
use yii\web\UploadedFile;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $form = new Form();
        if($form->load(Yii::$app->request->post()) && $form->validate())
        {
            if(!empty($form->file))
            {
                $form->file = UploadedFile::getInstance($form,'file');
                $filename = __DIR__.'/../users_files/'.$form->file->baseName.'.'.$form->file->extension;
                if (file_exists($filename))
                    $filename = __DIR__.'/../users_files/'.$form->file->baseName.rand(1, 100000).'.'.$form->file->extension;

                $form->file->saveAs($filename);
            }

        }
        return $this->render('form',
            ['form'=>$form]);
    }
}