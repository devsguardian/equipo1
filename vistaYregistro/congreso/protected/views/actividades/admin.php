<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Actividades', 'url'=>array('index')),
	array('label'=>'Create Actividades', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actividades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Actividades</h1>

<p>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div class="row">
    <div class="col-md-7">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actividades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_actividad',
		'id_tipo',
		'id_evento',
		'nombre',
		'fecha_inicio',
		'fecha_fin',
		/*
		'lugar',
		*/
		array(
					'class'=>'CButtonColumn',
					'template'=>'{view}',
					'header'=>'Ver indices',	
					'buttons'=>array(
						'view'=>array(
							'url'=>'Yii::app()->createUrl("indice/admin",array(
								"id_actividad"=>$data->id_actividad
							))'
						)
					),		
				),
				array(
					'class'=>'CButtonColumn',
					'template'=>'{view}{update}',
				),
			),
		)); ?>
	</div>
    <div class="col-md-5">

    		<div class="panel panel-primary">
    		  <div class="panel-heading">
    		    <h3 class="panel-title">Nueva Actividad</h3>
    		  </div>
    		  <div class="panel-body">
    	    		
				<?php 
					$this->renderPartial('_form', 
						array('model'=>$model,'modelTipoA'=>$modelTipoA,'modelEventos'=>$modelEventos,)); 
				?>
    		  </div>
    		</div>
        
    </div>
</div>