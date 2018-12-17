<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{


  public function __construct()
 {
     $this->middleware('auth');

 }


  public function store(Request $request)
  {

    $productos = new Producto;
    $productos->name = $request->get('Inputname');
    $productos->department = $request->get('department');
    $productos->price = $request->get('price');
    $productos->itbis = $request->get('itbis');
    $productos->desc = $request->get('desc');
    $productos->cant = $request->get('cant');
    // $productos->img = $request ->get('img');
    $productos->description = $request->get('description');
    $productos->save();
    return redirect('/productos')->with('success', 'Stock has been added');
    // return $request;

  }
  public function indexproductos()
  {

    return view('Productos.crearproducto');
  }

  public function indexlistas()
  {
   $listas = Producto::all(); //function para mostrar datos de una base de datos a html //

    return view('Productos.listas', compact('listas'));

  }

  public function findProduct ($id)
  {
     return Producto::findOrFail);
  }

  public function indexmodificar()
  {
    return view('Productos.modificar');
  }

  public function eliminar(Request $request)
  {
    $producto = Producto::find($request->id);
    $producto->delete();
  }

  public function editar()
  {

     return view('Productos.modallista');

  }
  }
