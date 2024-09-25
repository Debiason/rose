<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\InscricaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-index">
<?php

use kartik\grid\GridView;
$gridColumns = [
    [
        'attribute' => 'nome_estado',
        'value' => 'nome_estado',
        'label' => Yii::t('app', 'Estados'),
        'contentOptions' => ['class' => 'text-dark-75 font-weight-bolder'],
    ],
    [
        'label' => 'Ações',
        'class' => 'kartik\grid\ExpandRowColumn',
        'width' => '50px',
        'value' => function () {
            return GridView::ROW_COLLAPSED;
        },
        'detail' => function ($model) {
            return Yii::$app->controller->renderPartial('/contato\ver-contatos', ['estado' => $model]);
        },
        'headerOptions' => ['class' => 'kartik-sheet-style'],
        'expandOneOnly' => true,
        'expandIcon' => '',
        'collapseIcon' => '',
        'contentOptions' => ['style' => 'color: red'],
    ],
];
?>
</div>
<div class="col-md-12">

    <div class="card card-custom gutter-b card-stretch">
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark"><?= Yii::t('app', 'Minhas inscrições') ?></span>
            </h3>
        </div>
        <div class="card-body py-0">
            <div class="table-responsive">
                <div class="inscricao-index">
                    <?= GridView::widget([
                        //'hover' => true,
                        'pager' => ['options' => ['class' => 'pagination pull-left']],
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => $gridColumns,
                        'tableOptions' => ['class' => 'table table-head-custom table-vertical-center'],
                        'summaryOptions' => ['class' => 'pl-0'],
                        'options' => [
                            'class' => 'table-responsive',
                        ],
                        'responsiveWrap' => false,
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
