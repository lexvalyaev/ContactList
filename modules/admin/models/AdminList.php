<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 08.10.2016
 * Time: 11:06
 */

namespace app\modules\admin\models;

use Yii;
use app\models\Contacts;
use yii\base\Model;

class AdminList extends Model
{
    public function getContacts()
    {
        return Contacts::find()->all();
    }
}

