<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">
</head>

<body class="fondo" style="background-color: #E4DCCF;">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0" style ="border-color: #F58840;">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">

                                <img src="../../imagenes/inicio.jpg" width="800" height="800" alt="login form" class="img-fluid"
                                    style="border-radius: 2rem 0 0 1rem;" />


                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="loginControlador.php" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #F58840;"></i>
                                            <img src="../../imagenes/logo.png" width="180" height="100">
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa a tu cuenta
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" name="email"
                                                class="form-control form-control-lg border border-warning" />
                                            <label class="form-label" for="form2Example17">Correo Electrónico</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" name="pass"
                                                class="form-control form-control-lg border border-warning" />
                                            <label class="form-label" for="form2Example27">Contraseña</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit" class="btn btn-outline-warning">Iniciar
                                                Sesión</button>
                                        </div>

                                        <a class="small text-muted" href="#!">¿Has olvidado tu contraseña?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta?<a href="../../view/registro/registro.php" style="color: #F0A500;">Registrar aquí</a></p>
                                        <!-- <a href="#!" class="small text-muted">Condiciones de uso.</a>
                                        <a href="#!" class="small text-muted">Política de privacidad</a> -->
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>