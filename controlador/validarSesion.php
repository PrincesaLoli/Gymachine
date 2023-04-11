<?php

class validarSesion
{


    public function iniciarSesion($email, $pass)
    {

        $conexion = (new Conexion())->get_conexion();
    
        $consulta = $conexion->prepare("SELECT rol.nombre as nombreRol, usuario.clave, usuario.estado FROM `usuario` INNER JOIN rol on usuario.idRol = rol.id WHERE correo = :email");
        $consulta->bindParam(":email", $email);
        $consulta->execute();

        $resultadoConsulta = $consulta->fetch();

        if (!$resultadoConsulta) {
            echo '<script> alert("Usuario inexistente, por favor registrese") </script>';
            echo "<script>location.href='../view/extras/login.php'</script>";
            return;
        };

        
        if ($pass != $resultadoConsulta['clave']) {
            echo '<script> alert("clave incorrecta") </script>';
            echo "<script>location.href='../view/extras/login.php'</script>";
            return;
        }

        if (strtolower($resultadoConsulta['estado']) != "activo") {
            echo '<script> alert("Cuenta Inactiva o bloqueada, contacte al administrador") </script>';
            echo "<script>location.href='../view/extras/login.php'</script>";
            return;
        }

        session_start();
        // Se usara para traer informacion al ingresar al dasshboarf
        // $_SESSION['id'] = $resultadoConsulta['id'];
        // $_SESSION['roll'] = $resultadoConsulta['roll'];
        // $_SESSION['email'] = $resultadoConsulta['email'];
        // $_SESSION['clave'] = $resultadoConsulta['pass'];
        // Se usara para archivo de seguridad

        $_SESSION['autenticado'] = "SI";

        switch ($resultadoConsulta['nombreRol']) {
            case "Super Admin":
                echo '<script> alert("Bienvenido usuario SuperAdmin") </script>';
                echo "<script>location.href='../view/superAdmin/homeSuperAdmin.php'</script>";
                break;
            case "Administrador":
                echo '<script> alert("Bienvenido usuario Administrador") </script>';
                echo "<script>location.href='../view/administrador/homeAdministrador.php'</script>";
                break;
            case "Instructor":
                echo "i es igual a 2";
                break;
        }

    }
    public function cerrarSesion()
    {

        $conexion = (new Conexion())->get_conexion();

        session_start();
        session_destroy();
        echo "<script>location.href='../index.php'</script>";

    }



}

?>