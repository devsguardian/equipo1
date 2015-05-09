<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventos-form',
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php
        echo $form->labelEx($model, 'logotipo');
        echo $form->fileField($model, 'logotipo');
        echo $form->error($model, 'logotipo');
    ?>
 
    <?php if(!$model->isNewRecord){ //mostramos la imagen?>
    <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('uploads/imagenes'.$model->logotipo,"logotipo",array("width"=>200, 'title'=>$model->logotipo)); ?>
    </div>
    <?php } ?>
	</div>

	<div class="form-group">
		<?php
        echo $form->labelEx($model, 'convocatoria');
        echo $form->fileField($model, 'convocatoria');
        echo $form->error($model, 'convocatoria');
    ?>
 
    <?php if(!$model->isNewRecord){ //mostramos la imagen?>
    <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('uploads/documentos'.$model->convocatoria,"convocatoria",array("width"=>200, 'title'=>$model->convocatoria)); ?>
    </div>
    <?php } ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'costo'); ?>
		<?php echo $form->textArea($model,'costo',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'costo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php 
			echo $this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
						'model'=>$model,
						'attribute'=>'fecha_inicio',
						'language'=>'es',
						'options'=>array(
							'dateFormat'=>'yy-mm-dd',  // save format
                    		'altFormat'=>'dd-mm-yy',  // show format
						),
						'htmlOptions'=>array(
							'class'=>'form-control'
						)
					)
				,true);				

		 ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php 
			echo $this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
						'model'=>$model,
						'attribute'=>'fecha_fin',
						'language'=>'es',
						'options'=>array(
							'dateFormat'=>'yy-mm-dd',  // save format
                    		'altFormat'=>'dd-mm-yy',  // show format
						),
						'htmlOptions'=>array(
							'class'=>'form-control'
						)
					)
				,true);				

		 ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mas_informacion'); ?>
		<?php echo $form->textArea($model,'mas_informacion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mas_informacion'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->