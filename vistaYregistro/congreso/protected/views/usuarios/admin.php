<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Usuarios','url'=>array('index'),),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Usuarios</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="row">
    <div class="col-md-7">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_usuario',
		'nombre',
		'password',
		array(
					'class'=>'CButtonColumn',
					'template'=>'{view}',
					'header'=>'Ver indices',	
					'buttons'=>array(
						'view'=>array(
							'url'=>'Yii::app()->createUrl("indice/admin",array(
								"nombre"=>$data->nombre
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
    		    <h3 class="panel-title">Nuevo Usuario</h3>
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
