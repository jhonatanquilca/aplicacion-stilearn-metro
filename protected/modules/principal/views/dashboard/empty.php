<div class="empty-model">
    <div class="row-fluid">
        <div class="span3">
            <div class="emty-icon">
                <a href="#" style="color: #333;"><i class="aweso-dollar"></i> </a>

            </div>
        </div>

        <div class="span9">
            <div class="empty-model-description">
                <h1>Contactos</h1>
                <h2>La mejor manera de tener la informaci&oacute;n de sus conocidos organizada.</h2>
                <?php
                echo CHtml::link('<i class="icon-plus-sign"></i> Crear Nuevo', array('/crm/contacto/create'), array(
                    'class' => 'btn btn-large btn-success'
                ));
                ?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .emty-icon{
        position: absolute;
        top: 15%;
        left: 25%;
        width: 64px;
        height: 64px;
        font-size: 125px;
        margin-left: -32px;
        margin-top: -42px;
     
    }
</style>
<!--</div>-->