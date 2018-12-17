<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {  /*COLOR SUBRAYADO!*/
  /* background-color: #F44B42; */
}
</style>
</head>

<body style="background-image: url('imagenes/subtle_grunge.png')">
    <div class="container">

<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <h2>Lista de Productos</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Departamento</th>
                    <th>Precio</th>
                    <th>Itbis</th>
                    <th>Descuento</th>
                    <th>Cantidad</th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($listas as $lista )
                <tr>
                    <td>{{$lista->id}}</td>
                    <td>{{$lista->name}}</td>
                    <td>{{$lista->department}}</td>
                    <td>{{$lista->price}}</td>
                    <td>{{$lista->itbis}}</td>
                    <td>{{$lista->desc}}</td>
                    <td>{{$lista->cant}}</td>
                    <td><button type="button" class="btn btn-outline-dark btn-sm" id="editar" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i> Editar</button></td>
                    <td><button type="button" class="btn btn-outline-danger btn-sm" id="eliminar" onclick="algo({{$lista->id}})"><i class="fas fa-trash-alt"></i> Eliminar</button></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    function algo(esto) {
      var _token = $("#csrf-token").val();
            $.ajax({                                   //Codigos de eliminar en la tabla!//
            type: "POST",
            url: "/producto/eliminar",
            data: {id:esto, _token:_token},
            success: function(result){
              alert('exitoso')
            }
        });

    }
        $(document).ready(function() {


        });
    </script>

                    <!--bootstrap model para edit-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/modallista">

              <div class="form-group">

                <input type="hidden" name="" id="numeroedit"  value="{{$lista->id}}">

                <label for="Inputname" class="col-form-label">Nombre</label>
                <input type="text" class="form-control" id="Inputname" name="Inputname">
              </div>
              <div class="form-group">
                <label for="Inputdepartamento" class="col-form-label">Departamento</label>
                <input type="text" class="form-control" id="Inputdepartamento" name="department"></input>
              </div>
              <div>
                <label for="Inputprice" class="col-form-label">Precio</label>
                <input type="text" class="form-control" id="Inputprice" name="price"></input>
              </div>
              <div>
                  <label for="Inputitbis" class="col-form-label">Itbis</label>
                  <input type="number" class="form-control" id="Inputitbis" name="itbis">
              </div>
              <div>
                 <label for="Inputdescuento" class="col-form-label">Descuento</label>
                 <input type="text" class="form-control" id="Inputdescuento" name="desc">
              </div>
              <div>
                   <label for="Inputcantidad" class="col-form-label">Cantidad</label>
                  <input type="number" class="form-control" id="Inputcantidad" name="cant">
              </div>
              <div>
                <br>
                  <input type="file" id="Inputfile">
              </div>
              <div>
                <br>
                <textarea rows="3" cols="50" id="Texttareas" name="description"> descripcion</textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Editar</button>
          </div>
        </div>
      </div>
    </div>
                          <!--bootstrap model para edit-->




</body>

</html>
