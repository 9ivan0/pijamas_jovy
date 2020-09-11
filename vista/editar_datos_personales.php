<?php
include_once "menu/index.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="menu/css/style.css" media="screen, projection" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estilos.css">
  <title>Document</title>
</head>
<body>
  

  <!-- Tell the browser to be responsive to screen width -->

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-success card-outline">
                   <div class="card-body box-profile">
                     <div class="text-center"> 
                       <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                     </div>
                     <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario']?>">
                     <h3 id="nombre_us" class="profile-username text-center text-success">Nombre</h3>
                      <p id="apellidos_us"class="text-muted text-center">Apellidos</p>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                           <b style="color:#0B7300">Edad</b><a id="edad" class="float-right">15</a>
                        </li>
                           <b style="color:#0B7300">DNI</b><a id="documento_us" class="float-right">15</a>
                        </li>
                        <li class="list-group-item">
                           <b style="color:#0B7300">Tipo Usuario</b>
                           <span id="us_tipo" class="float-right badge badge-primary">Administrador</span>
                         </li>
                       </ul>
                    </div>
                </div>
                <div class="card card-success"> 
                  <div class="card-header"> 
                    <h1 class="card-title">Sobre Mi</h1>
                  </div>
                  <div class="card-body"> 
                    <strong style="color:#0B7300"> 
                      <i class="fas fa-phone mr-1"></i>Telefono
                    </strong>
                    <p id="telefono_us"class="text-muted">23849129</p>
                    <strong style="color:#0B7300"> 
                      <i class="fas fa-map-marker-alt mr-1"></i>Residencia
                    </strong>
                    <p id="direccion_us"class="text-muted">23849129</p>
                    <strong style="color:#0B7300"> 
                      <i class="fas fa-at mr-1"></i>Correo
                    </strong>
                    <p id="correo"class="text-muted">23849129</p>
                    <strong style="color:#0B7300"> 
                      <i class="fas fa-smile-wink mr-1"></i>sexo
                    </strong>     
                    <p id="sexo_us" class="text-muted">23849129</p>
                    <strong style="color:#0B7300"> 
                      <i class="fas fa-pencil-alt mr-1"></i>Informacion adicional
                    </strong>
                    <p id="adicionar_us"class="text-muted">23849129</p>
                    <button class="btn btn-block bg-gradient-danger">Editar</button>
                  </div>
                  <div class="card-footer">
                    <p class="text-muted">Click en el boton si desea editar</p>
                  </div>
                </div>
            </div>
            <div class="col-md-9">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Editar datos personales</h3>
                </div>
                <div class="card-body">
                  <form class="form-horizontal"> 
                    <div class="form-group row"> 
                      <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                      <div class="col-sm-10">
                      <input type="number" id="telefono" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row"> 
                      <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                      <div class="col-sm-10">
                      <input type="text" id="residencia" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row"> 
                      <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                      <div class="col-sm-10">
                      <input type="email" id="correo" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row"> 
                      <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                      <div class="col-sm-10">
                      <input type="text" id="sexo" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row"> 
                      <label for="adicional" class="col-sm-2 col-form-label">Informacion adicional</label>
                      <div class="col-sm-10">
                      <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea> 
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10 float-right">
                        <button class="btn btn-block btn-outline-success">Guardar</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


</body>
</html>