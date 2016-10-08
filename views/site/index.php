<?php
use yii\Helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Contact List Hohoho';
?>
<div class="site-index">


    <div class="panel panel-default">
        <!-- Default panel contents -->
        <form>
            <button>...</button>
        </form>
        <div class="panel-heading">Контакты</div>
        <?php if (empty($contacts)): ?>
            <div class="panel-body">
                <p>Контактов не найдено</p>
            </div>
        <?php else: ?>
            <!-- List group -->
            <table class="table">
                <tr bgcolor="#adff2f">
                    <td>Имя</td>
                    <td>Почта</td>
                    <td>Телефон</td>
                    <td>День рождения</td>
                </tr>
                <?php foreach ($contacts as $key => $quest ):?>
                <tr>
                    <td><?php echo Html::encode($quest->name); ?></td>
                    <td><?php echo Html::encode($quest->email); ?></td>
                    <td><?php echo Html::encode($quest->phone_number); ?></td>
                    <td><?php echo Html::encode($quest->birthday); ?></td>
                </tr>
                <?php endforeach; ?>

            </table>

         <!--   <ul class="list-group">
                <?php /*foreach ($contacts as $key => $quest): */?>
                    <li class="list-group-item">
                        <?php /*echo (Html::encode($quest->name)); */?>:
                        <?php /*echo Html::encode($quest->email); */?>
                        <?php /*echo Html::encode($quest->phone_number); */?>
                    </li>
                <?php /*endforeach; */?>
            </ul>-->
        <?php endif; ?>
    </div>


    <!--<div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
-->


    <!--<div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>-->
</div>
