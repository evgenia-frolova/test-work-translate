<?php
namespace backend\modules\v1\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\rest\Controller;

class ListController extends Controller
{
    public function actionIndex()
    {
        if (($data = Yii::$app->request->post()) && !empty($data['is_weekend'])) {
            $info = [];
            
            if ($data = \common\models\TranslatorInfo::find()->where(['is_weekend' => $data['is_weekend']])->all()) {
                return 'Список переводчиков готов';
            }
        }
        
        return 'Нет свободных переводчиков';
    }     
}