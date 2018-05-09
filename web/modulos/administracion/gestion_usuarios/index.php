<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
 // form-datos
 $( document ).ready(function() {
    
    $("#form-datos").hide();
});
function agregarForm() {
   $("#form-datos").show();
    $("#tabla").hide();
}
function regresar() {
  $("#form-datos").hide();
    $("#tabla").show();
}

function modificarForm() {
   $("#form-datos").show();
    $("#tabla").hide();
}
function editarForm() {
  $("#form-datos").show();
    $("#tabla").hide();
}


function eliminarForm(id) {
var answer = 'Esta usted seguro de eliminar el registro?';
alertify.confirm(answer, function () {
    alertify.success("Eliminado correctamente");
}, function() {
     alertify.error("Operacion cancelada");
});

}
  
</script>




 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="index.php?modulo=modulos/inicio/index">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Gestionar personas</li>
      </ol>
  

  <div class="card mb-3" id="tabla">
        <div class="card-header">
          <i class="fa fa-table"></i>Listado de personas
        <div style="float: right;">

          <button class='btn' style='background-color:transparent;' onclick="agregarForm();"> 
                    <i class="fa fa-plus-square"></i>
                    Agregar personas
                    </button>

        </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Identificacion </th>
                  <th>Nombres y apellidos</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Codigo </th>
                  <th>Nombres y apellidos</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr> 

                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr> 
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr> 
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>xxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>xxxxxxxxxx</td>
                  <td>
                    <button class='btn' style='background-color:transparent;' onclick="modificarForm()"> 
                    <i class="fa fa-sticky-note-o"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="editarForm()"> 
                    <i class="fa fa-low-vision"></i>
                    </button>
                    <button class='btn' style='background-color:transparent;' onclick="eliminarForm(2)"> 
                    <i class="fa fa-remove"></i>
                    </button>
                  </td>
                </tr> 
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Ultima actualizacion ayer a las 11:59 PM</div>

  </div>



<div class="container" id="form-datos">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar personas</div>
      <div class="card-body">
      
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="codigo">Identificacion</label>
                <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Codigo">
              </div>
              
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
              </div>
              <div class="col-md-6">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apelliods" name="apelliods" class="form-control" placeholder="apellidos">
              </div>
              
            </div>
          </div>
		<div class="form-group">
            <div class="form-row">
          <div class="col-md-12">
                <label for="rol">Rol</label>
                <select class="form-control" id="rol">
                  <option value="0">xxxxxxxx </option>
                  <option value="1">xxxxxxxx </option>
                  <option value="2">xxxxxxxx </option>
                  <option value="3">xxxxxxxx </option>
                </select>
              </div>
          </div>
      </div>

          <button class="btn btn-primary " onclick="regresar()"> Registrar </button>
       <button class="btn btn-primary " onclick="regresar()"> Cancelar </button>
              
            </div>
          </div>
         
       
  </div>
    
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>