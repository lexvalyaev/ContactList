<?php

use yii\grid\GridView;
use yii\bootstrap\Html;

?>b
<div class="admin-default-index">


<?php

echo  \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        [
            'label'=>'Название',
            'attribute'=>'label',
            'format'=>'raw',
            'value'=> function ($data){
                return Html::label($data['label']);
            }
        ],
        [
            'label'=>'Ссылка',
            'attribute'=>'url',
            'format'=>'raw',
            'value'=>function ($data){
                return Html::a('Ссылка ссылка',$data[url],['target'=>'_blank']);
            }

        ],

    ]
]);
?>

    <table class="table table-striped table-bordered">
    <tr>
        <td>Имя</td>
        <td>Телефон</td>
        <td>Почта</td>
        <>
    </tr>
    <? foreach ($adminList->contacts as $list):?>
    <tr>
        <td> <?=$list->name;?> </td>
        <td><?=$list->phone_number;?> </td>
        <td><?=$list->email;?> </td>

    </tr>


    <?endforeach;?>

    </table>

   <!-- <h1><?/*= $this->context->action->uniqueId */?></h1>
    <p>
        This is the view content for action "<?/*= $this->context->action->id */?>".
        The action belongs to the controller "<?/*= get_class($this->context) */?>"
        in the "<?/*= $this->context->module->id */?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?/*= __FILE__ */?></code>
    </p>-->


</div>
