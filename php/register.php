<?php

    //Se verifica si se ha presionado el boton submit
    if(isset($_POST["submit"])){

        //Para manejar que es un username validp (no repetido) y se ha registrado correctamente, por defecto se asume que es valido.
        $valid = true;

        //Seguridad, evitar imyeccion de codigo js o html
        $username=htmlspecialchars($_POST["username"]);
        $password=htmlspecialchars($_POST["password"]);
        $name=htmlspecialchars($_POST["name"]);
        $lastname=htmlspecialchars($_POST["lastname"]);
        $email=htmlspecialchars($_POST["email"]);
        $age=htmlspecialchars($_POST["age"]);
        $gender=htmlspecialchars(isset($_POST["gender"]) ? $_POST["gender"] : "" ); //evitar que salga un error
        $birthday=htmlspecialchars($_POST["birthday"]);
        $phone=htmlspecialchars($_POST["phone"]);
        $direction=htmlspecialchars($_POST["direction"]);
        $zip=htmlspecialchars($_POST["zip"]);
        
    }


?>

<?php require("../template/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="card border-success my-4">
                <div class="card-header bg-success text-white text-center">Registrarse</div>
                <div class="card-body text-primary">
                    <div class="card-title">
                        <a href="/final/index.php" class="btn btn-outline-danger"> &lt; Volver</a>
                    </div>
                    <div class="card-body">

                        <form method="POST">
                                
                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" required
                                            placeholder="Pepe" autofocus>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password" min="4" required
                                            placeholder="****">
                                    </div>
                                </div>

                                <hr>
                                <h5 class="text-center">Datos no esenciales</h5>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Pepe" >
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="lastname" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Pepe" >
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Pepe@email.com" >
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="age" class="form-label">Edad</label>
                                        <input type="number" class="form-control" id="age" name="age" min="1" 
                                            placeholder="18" >
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="username" class="form-label">Sexo</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                            value = "Masculino">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Masculino
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"
                                            value = "Demenino">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Femenino
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                            value = "No binario">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No binario
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday">
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="phone" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="phone" name="phone" 
                                            placeholder="+3455555555555555" >
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-6 mb-3">
                                        <label for="direction" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="direction" name="direction" 
                                            placeholder="Calle pepe numero 68" >
                                    </div>
                                </div>

                                <div class="row justify-content-center mb-2">
                                    <div class="col-6 mb-3">
                                        <label for="zip" class="form-label">Codigo Postal</label>
                                        <input type="number" class="form-control" id="zip" name="zip" 
                                            placeholder="38009" >
                                    </div>
                                </div>

                                <div class="row justify-content-center mb-4">
                                    <a href="/final/index.php" class="nav-link text-center">iniciar Sesión</a>
                                </div>      

                                <div class="row justify-content-center my-4">
                                    <button type="submit" name="submit" class="btn btn-success col-6">Registarse</button>
                                </div>                          
                                
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require("../template/footer.php"); ?>

