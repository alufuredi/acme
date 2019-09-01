<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class TutController extends Controller
{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
        // echo json_encode(['message' => $message]);
    }

    public function actionEntry()
    {
        $model = new EntryForm();

        if (
            $model->load(Yii::$app->request->post()) &&
            $model->validate()
        ) {
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }
}
