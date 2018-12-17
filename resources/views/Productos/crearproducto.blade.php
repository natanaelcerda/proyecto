<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<br>
<body style="background-image: url('imagenes/subtle_grunge.png')" >


<div class="container">


  <form method="POST" action="/crearProducto">
  @csrf
 <div class="form-group">
   <label>Nombre</label>
   <input type="text" class="form-control" id="Inputname" aria-describedby="NameHelp" placeholder="" name="Inputname">
 </div>
 <label>Departamento</label>
 <div class="form-group">
   <input type="number" class="form-control" id="Inputdepartamento" placeholder="" name="department">
 </div>
<label>Precio</label>
 <div class="form-group">
   <input type="number" class="form-control" id="Inputprice" placeholder="Price" name="price">
 </div>
<label>Itbis</label>
 <div class="form-group">
   <input type="number" class="form-control" id="Inputitbis" placeholder="" name="itbis">
 </div>

<label>Descuento</label>
 <div class="form-group">
   <input type="text" class="form-control" id="Inputdescuento" placeholder="Descuento" name="desc">
 </div>

<label>Cantidad</label>
 <div class="form-group">
   <input type="number" class="form-control" id="Inputcantidad" placeholder="Cantidad" name="cant">
 </div>

 <div class="form-group">
   <input type="file" id="Inputfile">
 </div>


 <div class="form-group">
  <textarea rows="3" cols="50" id="Texttareas" name="description">
 descripcion
 </textarea>
 </div>



 <button type="submit" class="btn btn-primary">Agregar</button>

</form>

</body>

</div>
