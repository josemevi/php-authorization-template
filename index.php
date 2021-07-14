<?php 


    $username = $password = "";
    if(isset($_POST["submit"])){

        $username=htmlspecialchars($_POST["username"]);
        $password=htmlspecialchars($_POST["password"]);

    }

?>

<?php require("template/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="card border-primary my-4">
                <div class="card-header bg-primary text-white text-center">Iniciar Sesión</div>
                <div class="card-body text-primary">
                    <!-- <h5 class="card-title">Primary card title</h5> -->
                    <div class="card-body">

                        <form method="POST">

                            <div class="row justify-content-center">
                                <div class="col-6 mb-3">
                                    <label for="username" class="form-label">Nombre del usuario</label>
                                    <input type="text" class="form-control" id="username" name="username" required
                                        placeholder="Pepe" autofocus>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-6 mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" min="4"
                                        required placeholder="****">
                                </div>
                            </div>

                            <div class="row justify-content-center mb-4">
                                <a href="/final/php/register.php"
                                    class="nav-link text-center text-success">Registrarse</a>
                            </div>

                            <div class="row justify-content-center my-4">
                                <button type="submit" name="submit" class="btn btn-primary col-6">Iniciar
                                    Sesión</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php require("template/footer.php"); ?>