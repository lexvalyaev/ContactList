<?php

namespace app\modules\admin\controllers;


use app\modules\admin\components\Controller;
use yii\data\ArrayDataProvider;
use yii\filters\VerbFilter;
use app\modules\admin\models\AdminList;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     *
     *
     */

    public function behaviors()
    {
        $return = parent::behaviors();
        $behaviors = []; [
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['POST'],
            ],
        ],
    ];

        return array_merge($return,$behaviors);

    }

    public function actionIndex()
    {
        $menu=[
            ['label' => 'Пользователи', 'url' => ['/admin/users']],
            ['label' => 'Контакты', 'url' => ['/admin/contacts']]
        ];

        $dataProvider = new ArrayDataProvider([
            'key' => 'id',
            'allModels' => $menu,
            'sort'=>[
                'attributes'=>['label','url']
            ],
            'pagination'=>['pageSize'=>10]
        ]);
        $adminList  = new AdminList();
        return $this->render('index',['dataProvider'=>$dataProvider,'adminList'=>$adminList]);
    }
}
