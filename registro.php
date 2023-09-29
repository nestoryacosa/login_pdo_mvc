
<?php  include "vista/partials/header.php"; ?>
<?php  include "vista/partials/menu.php"; ?>

<div class="container">
    <div class="starter-template">
    
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <form action="#" method="POST" role="form">
                            <legend>Registrar Usuario</legend>

                            <div class="form-group">
                                <label for="nombre">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre" autofocus name="nombre" placeholder="Nombre">
                            </div>
                        
                            <div class="form-group">
                                <label for="nickname">Nombre de usuario</label>
                                <input type="text" class="form-control" id="nickname" autofocus name="nickname" placeholder="Nombre de usuario">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Contraseña</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="****">
                            </div>

                            <div class="form-group">
                                <label for="nickname">email</label>
                                <input type="email" class="form-control" id="email" autofocus name="email" placeholder="dirección de correo electrónico">
                            </div>
                        
                            
                        
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php  include "vista/partials/footer.php"; ?>