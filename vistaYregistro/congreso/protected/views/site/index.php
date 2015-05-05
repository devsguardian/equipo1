<div id="ourServices">  
<div class="container"> 
        <div class="row">
                
                <div class="row-fluid">
      <div class="span4">
      
      <div class="info-img">
        <img src="themes/img/calendar.png" ></div>
        <h4>¿Cuándo?</h4>
        <p>Del<br><?php echo $evento->fecha_inicio; ?><br>al<br><?php echo $evento->fecha_fin; ?></p>
      </div>
      <div class="span4">
        <div class="info-img"><img src="themes/img/where.png" ></div>
        <h4>¿Dónde?</h4>
         <p><?php echo $evento->lugar; ?></p>
      </div>
      <div class="span4">
      <a href="https://www.facebook.com/events/1420970331536992/"target="_blank">
        <div class="info-img"><img src="themes/img/facebook.png"></div>
        <h4>Redes Sociales</h4>
         <p>Visítanos para conocer los más recientes aconteceres del evento.</p>
      </a>
      </div>
    </div>
</div>
</div>
</div>

<!-- Our Portfolio======================================== -->
<div id="portfolioSection">
<div class="span6"><h1 class="cntr">Especificaciones</h1>
<p>En esta sección encontrarás todo lo que necesitas saber acerca del evento. Haz clic sobre la opción que desees ver en el menú de abajo.</p></div>
<div class="container"> 
  <ul class="nav nav-pills">
  <li class="active"><a href="#all" data-toggle="tab">COSTOS</a></li>
    <li><a href="#web" data-toggle="tab">CALENDARIO</a></li>
    <li><a href="#mobile" data-toggle="tab">CONVOCATORIA</a></li>
    <li><a href="#photo" data-toggle="tab">MÁS INFORMACIÓN</a></li>
    
  </ul>
<div class="clr"></div>
<div class="tabbable tabs">
<div class="tab-content label-primary">

  <div class="tab-pane active" id="all">
    <p><?php echo $evento->costo; ?></p>    
  </div>
  
  <div class="tab-pane" id="web">
    <p><?php echo $evento->fecha_inicio; ?></p>  
  </div>
  
  <div class="tab-pane" id="mobile">
       <a target=\"_blank\" href="uploads/documentos/<?php echo $evento->convocatoria; ?>" class="btn btn-large btn-primary" title=\"\">Ver Convocatoria</a>
  </div>
  
  <div class="tab-pane" id="photo">
     <p><?php echo $evento->mas_informacion; ?></p>
  </div>
  
    
    <!--<a href="#" class="btn btn-large btn-primary disabled">MOSTRAR MÁS</a>-->

</div>
</div>
</div>
</div>
<!-- Blog Section -->
<div id="blogSection">
 
 <div class="container">
   
   <div class="row span12"> 
    
        
        <div class="span8">
        
    <div class="inner">
    <h1>Lineamientos</h1>
    <p>En esete documento encontrará la especificación de lineamientos requeridos para la publicación de artículos</p>

    <a target=\"_blank\" href="uploads/documentos/lineamientos.pdf" class="btn btn-large btn-primary" title=\"\">Ver Documento</a>
        
        <!--<a href="#" class="btn btn-large btn-primary">Ver Documento</a>-->
    </div>
        
        </div>
        
        <div class="span4">
          <img src="themes/img/lineamientos.png" alt="" />
        </div>
        
   </div>
        
        <hr class="soften clear"/>
        
    <div class="row span12">  
    
        <div class="span4">
          <img src="themes/img/formato.png" alt="" />
        </div>
        
        <div class="span8">
        
    <div class="inner">
    <h1>Formato</h1>
    <p>Conozca y descargue el formato a utilizar para el artículo final.</p>
        
        <a target=\"_blank\" href="uploads/documentos/formato.pdf" class="btn btn-large btn-primary" title=\"\">Ver Documento</a>
    </div>
        
        </div>
        
       
        
   </div>    
      
   
  </div>
</div>

<!-- Meet our team======================================== -->
<div id="meetourteamSection">
<div class="span6"><h1 class="cntr">Ponentes</h1>
<p>Estos serán los ponentes (y sus proyectos) con los que contaremos durante el evento. </p></div>
<div class="container"> 
  
<div class="tabbable tabs">
<div class="tab-content label-primary">

  <div class="tab-pane active" id="all">
  <ul class="thumbnails">
  <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_ponente',   // refers to the partial view named '_post'
        'sortableAttributes'=>array(),
      ));
  ?>  
  </ul>
   
    
  </div>
  
</div>
</div>
</div>
</div>

<!-- Contact Section -->
<div id="contactSection">
<div class="span6"><h1 class="cntr">Registro</h1>
<p>Por favor llene el siguiente formulario para registrarse como participante en el evento CITEC</p></div>
  <div class="container"> 
    <div class="row"> 
    <div class="span8">
      
      <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'participantes-form',
        'enableAjaxValidation'=>false,
      )); ?>

        <fieldset>
          <div class="control-group">
          
          <div class="controls">
            <?php echo $form->labelEx($model,'nombres'); ?>
            <?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Nombre')); ?>
            <?php echo $form->error($model,'nombres'); ?>
           
          </div>
          </div>
           <div class="control-group">
          
            <div class="controls">
              <?php echo $form->labelEx($model,'apellidos'); ?>
              <?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Apellidos')); ?>
              <?php echo $form->error($model,'apellidos'); ?>
             
            </div>
          </div>
           <div class="control-group">
          
            <div class="controls">
              <?php echo $form->labelEx($model,'email'); ?>
              <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Email')); ?>
              <?php echo $form->error($model,'email'); ?>
            </div>
          </div>
         
          <button type="submit" class="btn btn-large btn-primary disabled">Enviar</button>
          
        </fieldset>
       
<?php $this->endWidget(); ?>
    </div> 
    
    
    </div> 
    </div> 
        
  <div class="footerSection container">
    
       
                <div class=" span4 socialicon">
                    <a class="facebook" href="https://www.facebook.com/pages/CITEC-Congreso-Internacional-de-Tecnolog%C3%ADas-y-Computaci%C3%B3n/618209194980396?fref=ts" target="_blank"></a>                    
                </div>
                      
    
    <div class="contact-details">
      <p class="fa fa-map-marker">  Instituto Tecnológico de Celaya | CITEC  </p>
      <p class="fa fa-map-marker">  Av. Garc&iacute;a Cubas 1200, Celaya, Gto. M&eacute;xico.</p>
      <p class="fa fa-envelope-o">  www.itcelaya.edu.mx  </p>
      <p class="fa fa-phone">  +01 461 617 7770</p>
    </div><!--wauuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu-->
  </div>        
                
</div> 
<!-- Wrapper end -->

<a href="#" class="go-top" ><i class="icon-arrow-up"></i></a>