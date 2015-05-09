<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index'), 'class'=>'btn btn-primary'),
	array('label'=>'Create Eventos', 'url'=>array('create'),),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eventos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Eventos</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div class="row">
    <div class="col-md-7">
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'eventos-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id_evento',
				'nombre',
				'logotipo',
				'convocatoria',
				'costo',
				'fecha_inicio',
				/*
				'fecha_fin',
				'lugar',
				'mas_informacion',
				*/
				array(
					'class'=>'CButtonColumn',
					'template'=>'{view}',
					'header'=>'Ver indices',	
					'buttons'=>array(
						'view'=>array(
							'url'=>'Yii::app()->createUrl("indice/admin",array(
								"id_evento"=>$data->id_evento
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
    		    <h3 class="panel-title">Nuevo Evento</h3>
    		  </div>
    		  <div class="panel-body">
    	    		
				<?php 
					Yii::app()->clientScript->scriptMap['jquery.js'] = false;
					$this->renderPartial('_form', 
						array('model'=>$model)); 
				?>
    		  </div>
    		</div>
        
    </div>
</div>
