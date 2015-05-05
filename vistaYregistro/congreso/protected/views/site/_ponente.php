<li class="span4">
    <div class="thumbnail">
        <div class="blockDtl">
            <a href="#" ><img src="themes/img/img-11.png" alt=""></a>
            <?php if($data->nombres!=null or $data->apellidos!=null) { ?>
            <h4><?php echo $data->nombres?> <?php echo $data->apellidos?></h4>
            <?php } else { ?>
            <h4>Ponente <?php echo $data->id_participante?></h4>
            <?php } ?>
            <h5>Proyecto</h5>
            <?php if($data->email!=null) { ?>
            <p><?php echo $data->email?></p>
            <?php } else { ?>
            <p>e-mail no disponible</p>
            <?php } ?>
            <a class="facebook" href="#"></a>
            <a class="twitter" href="#"></a>
            <a class="pin" href="#"></a>
        </div>
    </div>
</li>