
<?php  include "vista/partials/header.php"; ?>
<?php  include "vista/partials/menu.php"; ?>

<div class="container">
    <div class="starter-template">
        <br><br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <form action="validar.php" method="POST" role="form">
                            <legend>Iniciar sesión</legend>
                        
                            <div class="form-group">
                                <label for="nickname">Nombre de usuario</label>
                                <input type="text" class="form-control" id="nickname" autofocus name="nickname" placeholder="Nombre de usuario">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Contraseña</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="****">
                            </div>
                        
                            
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php  include "vista/partials/footer.php"; ?>