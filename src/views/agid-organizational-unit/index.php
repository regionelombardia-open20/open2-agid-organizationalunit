<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    @backend/views
 */

use open20\amos\core\views\DataProviderView;
use open20\agid\organizationalunit\Module;
use open20\amos\admin\models\base\UserProfile;
use open20\amos\core\utilities\WorkflowTransitionWidgetUtility;
use yii\data\ActiveDataProvider;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var open20\agid\organizationalunit\models\AgidOrganizationalUnitSearch $model
 */

$this->title = Module::t('amosorganizationalunit', 'Organizational Unit');
$this->params['breadcrumbs'][] = ['label' => '', 'url' => ['/app']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="agid-organizational-unit-index">

    <?= $this->render('_search', ['model' => $model, 'originAction' => Yii::$app->controller->action->id]);?>

	<?=
		DataProviderView::widget([
			'dataProvider' => $dataProvider,
			//'filterModel' => $model,
			'currentView' => $currentView,
			'gridView' => [
				'columns' => [
					// ['class' => 'yii\grid\SerialColumn'],
					'id' => [
						'attribute' => 'id',
						'value' => 'id',
						'label' => '#ID'
					],

					'name' => [
						'attribute' => 'name',
						'value' => 'name',
						'label' => Module::t('amosorganizationalunit','#name')
					],

                    'agidOrganizationalUnitContentType' => [
						'attribute' => 'agidOrganizationalUnitContentType.name',
						'value' => function ($model) {
							return $model->agidOrganizationalUnitContentType->name;
						},
						'label' => Module::t('amosorganizationalunit','agid_organizational_unit_content_type_id'),
					],

					'agidOrganizationalUnitType' => [
						'attribute' => 'agidOrganizationalUnitType.name', 
						'format' => 'html',
						'label' => Module::t('amosorganizationalunit','agid_organizational_unit_type_id'),
						'value' => function ($model) {
							return $model->agidOrganizationalUnitType->name;
						},
					],
					
					'updated_by' => [
						'attribute' => 'updated_by',
						'value' => function($model) {

							if( $user_profile = $model->getUserProfileByUserId($model->updated_by) ){

								return $user_profile->nome . " " . $user_profile->cognome;
							}
							
							return;
						},
						'label' => Module::t('amosorganizationalunit','#updated_by')
					],

					'updated_at:datetime' => [
						'attribute' => 'updated_at',
						'value' => 'updated_at',
						'format' => ['date', 'php:d/m/Y H:i:s'],
						'label' => Module::t('amosorganizationalunit','#updated_at')
					],

					'status' => [
						'attribute' => 'status',
						'value' => function ($model) {
							return WorkflowTransitionWidgetUtility::getLabelStatus($model);
						},
						'label' => Module::t('amosorganizationalunit','status')
					],

					[
						'class' => 'open20\amos\core\views\grid\ActionColumn',
						'template' => '{view}{update}{delete}',
						'buttons' => [
							'view' => function ($url, $model) {
								return \yii\helpers\Html::a(
									'<span class="am am-file"> </span>
									 <span class="sr-only">Leggi</span>',
									$model->getFullViewUrl(),
									[
										'title' => Yii::t('app', 'Leggi'),
										'class' => 'btn btn-tools-secondary',
										//'model' => $model,
									]
								);
							},
							'update' => function ($url, $model) {
								return \yii\helpers\Html::a(
									'<span class="am am-edit"> </span>
									 <span class="sr-only">Modifica</span>',
									Yii::$app->urlManager->createUrl([Yii::$app->urlManager->createUrl(['/organizationalunit/agid-organizational-unit/update', 'id' => $model->id])]),
									[
										'title' => Yii::t('app', 'Modifica'),
										'class' => 'btn btn-tools-secondary',
										//'model' => $model,
									]
								);
							},
							'delete' => function ($url, $model) {
								if (\Yii::$app->user->can('ADMIN') || \Yii::$app->user->can('ADMIN_FE') || \Yii::$app->user->can('REDACTOR_ORGANIZATIONALUNIT') ) {
									return \yii\helpers\Html::a(
										'<span class="am am-delete"> </span>
										 <span class="sr-only">Cancella</span>',
										Yii::$app->urlManager->createUrl([Yii::$app->urlManager->createUrl(['/organizationalunit/agid-organizational-unit/delete', 'id' => $model->id])]),
										[
											'title' => Yii::t('app', 'Cancella'),
											'class' => 'btn btn-danger-inverse',
											//'model' => $model,
											'data-confirm' => "Sei sicuro di voler cancellare questo elemento?"
										]
									);
								}
							},
						]
					],
				],
			],
		]);
	?>
</div>