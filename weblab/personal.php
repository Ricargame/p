<?php
    error_reporting(0);
	include ("Modelo/BaseDeDatos.php");
	$bd = new bd();
    $query = "SELECT * FROM personal";
    $datos = $bd -> ejecutar($query);
    $cargo =  $bd -> ejecutar ("SELECT * FROM cargo");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>P R O C E M I</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="img/user.png" class="img-fluid"/><span>PROCEMI</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>Menu </a>
		  </li>
		  
          <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
            class="dropdown-toggle">
            <i class="material-icons">aspect_ratio</i>Registros
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
               <li><a href="personal.php">Personal</a></li>
               <li><a href="chofer.php">Chofer</a></li>
               <li><a href="index.php">Camiones</a></li>
               <li><a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
                  class="dropdown-toggle">Configuraci??n del veh??culo</a>
                  <ul class="collapse list-unstyled menu" id="homeSubmenu5"></li>
                      <li><a href="marca.php">Marca</a></li>
                      <li><a href="modelo.php">Modelo</a></li>
                      <li><a href="color.php">Color</a></li>
                  </ul>
  
               <li><a href="cargo.php">Cargo</a></li>
               <li><a href="producto.php">Producto</a></li>
  
  

		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">apps</i>Movimiento
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="entrada_materia_prima.html">Entrada Materia Prima</a></li>
			 <li><a href="laboratorio.html">Laboratorio</a></li>
			 <li><a href="#">Almac??n</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">equalizer</i>Reportes de sistema
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="#">Todod los maestros y ovimientos </a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>
		  
		  
		 
		   
		  
		</ul>
	 </div>
	 
   <!------------>
   
   
   
      <!-----Contenido----------->
   
      <div id="content">
	     
		  <!------PANEL SUPERIOR-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					       <!-----Buscador----------->

					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					     <div class="xp-searchbar">
						     <form>
							    <div class="input-group">
								  <input type="search" class="form-control" placeholder="Buscar">
								  <div class="input-group-append">
	                              <!-----Boton del  buscador----------->
								     <button class="btn" type="submit" id="button-addon2">Ir
									 </button>
								  </div>
								</div>
							 </form>
						 </div>
					 </div>
		          <!-----Menu de inicio de sesion----------->

					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							   <li class="dropdown nav-item active">
							
							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <img src="img/user.png" style="width:40px; border-radius:50%;"/>
								  <span class="xp-user-live"></span>
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="#">
									 <span class="material-icons">person_outline</span>
									 Usuarios
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">settings</span>
									 Configuraci??n
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">logout</span>
									 Salir
									 </a></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">Bienvenido</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Que pongo</a></li>
					  <li class="breadcrumb-item active" aria-curent="page">Aqui?</li>
					</ol>
				 </div>
				 
				 
			 </div>
		  </div>
		  
		  
		   <!------Tabla-----------> 
		     
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Registro de Personal</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span></span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span></span>
							   </a>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
							 <label for="selectAll"></label></th>
							 <th>Id</th>
							 <th>Nombre</th>
							 <th>Apellido</th>
							 <th>Nacioalidad</th>
							 <th>C??dula</th>
							 <th>T??lefono</th>
							 <th>Correo</th>
                             <th>Direcci??n</th>
							 <th>Cargo</th>
							 <th></th>	

							 
							 </tr>
						  </thead>
						  
						  <tbody>
							<!--
						    <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox1" name="option[]" value="1">
							 <label for="checkbox1"></label></th>
							 <th>4444</th>
							 <th>ThomasHardy@gmail.com</th>
							 <th>90r</th>
							 <th>(78-582552-9)</th>
							 <th></th>
                             <th></th><th></th><th></th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							 
							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox2" name="option[]" value="1">
							 <label for="checkbox2"></label></th>
							 <th>Dominique</th>
							 <th>dominiquePerrier@gmail.com</th>
							 <th>90r </th>
							 <th>(78-5235-2-9)</th><th></th><th></th><th></th><th></th>

							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							 
							 <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox3" name="option[]" value="1">
							 <label for="checkbox3"></label></th>
							 <th>Marai </th>
							 <th>MarariAndres@gmail.com</th>
							 <th>90r</th>
							 <th>0412-523-8709</th>							 
							 <th>45454</th><th></th><th></th><th></th>
							 <th>
							    <a href="#edit" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox4" name="option[]" value="1">
							 <label for="checkbox4"></label></th>
							 <th>Vishweb</th>
							 <th>vishwebdesign@gmail.com</th>
							 <th> B-</th>
							 <th>(78-239-669)</th>							
							  <th>25000</th><th></th><th></th><th></th>

							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox5" name="option[]" value="1">
							 <label for="checkbox5"></label></th>
							 <th>Vis</th>
							 <th>vishkumar234@gmail.com</th>
							 <th> B-.</th>
							 <th>(78-555-229)</th><th></th><th></th><th>hghg</th><th></th>

							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
-->							

							<?php
							while ($row=$datos->fetch_assoc()){?>
								<tr>
								<th><span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="option[]" value="1">
								<label for="checkbox1"></label></th>
								<th> <?php echo $row["ID"] ?> </th>
								<th> <?php echo $row["Nombre"] ?></th>
								<th> <?php echo $row["Apellido"] ?></th>
								<th> <?php echo $row["Nacionalidad"] ?></th>
								<th> <?php echo $row["Cedula"] ?></th>
								<th> <?php echo $row["Telefono"] ?></th>
								<th> <?php echo $row["Direccion"] ?></th>
								<th> <?php echo $row["Correo"] ?></th>
								<th> <?php echo $row["Cargo"] ?></th>
								<th>
    							  <a href=#editEmployeeModal  class="edit" data-toggle="modal" id="edit" onclick=editar(<?php echo $row["ID"] ?>,<?php echo $row["Nombre"] ?>,<?php echo $row["Apellido"] ?>) >
    							   <i class="material-icons"  data-toggle="tooltip" title="Edit">&#xE254;</i>
    							   </a>
    							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick=eliminar(<?php echo $row["ID"] ?>)>
    							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
    							   </a>
    							 </th>
								</tr>
							<?php } ?>
						  </tbody>
						  
					      
					   </table>
                         <!----PAGINACION DE TABLA--------->

					   
					   <div class="clearfix">
					     <div class="hint-text">Mostrando <b>5</b> de <b>25</b></div>
					     <ul class="pagination">
						    <li class="page-item active"><a href="#">Anterior</a></li>
							<li class="page-item "><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item "><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item "><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Siguiente</a></li>
						 </ul>
					   </div>
					   
					   </div>
					</div>
					
					
									   <!----Formulario emergente--------->
<form action="Control/Registro_Personal.php"  div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<div class="form-group">
				<label>Nombre</label>
			    <input type="text" class="form-control" name="Nombre" required>
			</div>
		</div>
		<div class="form-group">
		    <label>Apellido</label>
			<input type="text" class="form-control" name="Apellido" required>
		</div>
		<div class="form-group">
		    <label>Nacionalidad</label>
			<input type="text" class="form-control" name="Nacionalidad" required>
		</div>
		<div class="form-group">
		    <label>C??dula</label>
			<input type="text" class="form-control" name="Cedula" required>
		</div>
		<div class="form-group">
		    <label>T??lefono</label>
			<input type="text" class="form-control" name="Telefono" required>
		</div>
		<div class="form-group">
		    <label>Correo</label>
			<input type="text" class="form-control" name="Correo" required>
		</div>
        <div class="form-group">
		    <label>Direcci??n</label>
			<input type="text" class="form-control" name="Direccion" required>
		</div>
		<div class="form-group">
		    <label>Cargo</label>
			<select name="Cargo" class="form-control" >
			    <?php while($c=$cargo->fetch_assoc()){ ?>
                <option value="<?php echo $c['Nombre'] ?>"  ><?php echo $c['Nombre'] ?></option>
                <?php }?>
              </select>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Agregar</button>
      </div>
    </div>
  </div>
</div>

					   
					</form>
					   
					   
					   
				   <!----Editar datos de tabla--------->
 <form action="Control/Editar_Personal.php">
<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
        <div class="form-group">
		    <label>Nombre</label>
			<input type="text" class="form-control" id="Nombre" name="Nombre" value="" required>
		</div>
		<div class="form-group">
		    <label>Apellido</label>
			<input type="text" class="form-control" id="Apellido" name="Apellido" value="" required>
		</div>
		<div class="form-group">
		    <label>Nacionalidad</label>
			<input type="text" class="form-control" id="Nacionalidad" name="Nacionalidad" value="" required>
		</div>
		<div class="form-group">
		    <label>C??dula</label>
			<input type="text" class="form-control" id="Cedula" name="Cedula" value="" required>
		</div>
		<div class="form-group">
		    <label>T??lefono</label>
			<input type="text" class="form-control" id="Telefono" name="Telefono" value="" required>
		</div>
		<div class="form-group">
		    <label>Correo</label>
			<input type="text" class="form-control" id="Correo" name="Correo" value="" required>
		</div>
        <div class="form-group">
		    <label>Direcci??n</label>
			<input type="text" class="form-control" id="Direccion" name="Direccion" value="" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="hidden" class="form-control" id="formulario2" name="ID" value="" required>
        <button type="button" class="btn btn-success">Eliminar</button>
      </div>
    </div>
  </div>
</div>
</form>

					   
					   
					 <!----Eliminar Datos--------->
					 <form action="Control/Eliminar_Personal.php">
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>??Est?? seguro de que desea eliminar este registro?</p>
		<p class="text-warning"><small>Esta acci??n no se puede deshacer</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="hidden" id="input_eliminar" name="ID" value="">
        <button type="submit" class="btn btn-success">Eliminar</button>
      </div>
    </div>
  </div>
</div>					   
					</form>
			     </div>
			  </div>
		  
		  
		 
		 
		 <!----Panel inferior------------->
		 
		 <footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2022 todos los derechos reservados.</p>
			   </div>
			</div>
		 </footer>
		 
		 
		 
		 
	  </div>
   
</div>





  
     <!--JavaScript -->
    <!-- Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
   function editar(id,nombre,apellido){
     document.getElementById("formulario2").value=id;
     document.getElementById("Nombre").value=nombre;
     document.getElementById("Apellido").value=apellido;
 }
 
 function eliminar(id){
     document.getElementById("input_eliminar").value=id;
 }
   
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    if ($_GET["Mensaje"]){
        if ($_GET["Mensaje"]==1){
            echo "<script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'error',
                          title: 'Datos Invalidos',
                          showConfirmButton: false,
                          timer: 1500
                        })
                    </script>";
        }
        if ($_GET["Mensaje"]==2){
            echo "<script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Registrados',
                          showConfirmButton: false,
                          timer: 1500
                        })
                    </script>";
        }
         if ($_GET["Mensaje"]==3){
            echo "<script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Eliminado',
                          showConfirmButton: false,
                          timer: 1500
                        })
                    </script>";
        }
    }
        
?>




  </body>
  
  </html>


