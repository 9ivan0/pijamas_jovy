<?php 

    require_once "../../../modelo/Empleado.php";
    $datos=array(
            'imagen' => file_get_contents( $_FILES['imagen'] ['tmp_name']),
            'tipo_imagen_us' => $_FILES['imagen']['type'],
            'nombre_us' => $_POST['nombre'],
            'apellido_us' => $_POST['apellido'], 
            'documento_us' => $_POST['documento'], 
            'telefono_us' => $_POST['telefono'],
            'correo_us' => $_POST['correo'],
            'direccion_us' => $_POST['direccion'],
            'contrasena' => $_POST['contraseña'],
            'rol' => $_POST['rol'], 
                 );
    require_once "../../../modelo/Empleado.php";
    Crud::insertarDatos($datos);
    

 ?>