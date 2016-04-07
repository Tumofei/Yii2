<?php
/**
 * Created by PhpStorm.
 * User: Timofei
 * Date: 07.04.2016
 * Time: 9:19
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--        --><?//= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',

            [
                'label' => '',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a('User posts', '/posts?PostsSearch%5Bid_users%5D='.$data->id,['target' => '_blank']);
                }
            ],

        ],
    ]); ?>
</div>