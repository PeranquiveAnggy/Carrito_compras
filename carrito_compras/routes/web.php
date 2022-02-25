<?php

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 //******************************************** */
 //RUTAS PARA EL CONTROLADOR PRODUCTOS
 //******************************************** */


 //*********Mostrar todos los productos******** */
 Route::get("/productos",function(){
    $prod = Productos::all();
return view('productos',['productos'=>$prod]);
 });


//*********Agregar todos los productos******** */
 Route::post("/productos", function(Request $request){
    $producto = new Productos();
    $producto->Nombre = $request->Nombre;
    $producto->Precio = $request->Precio;
    $producto->Caracteristicas = $request->Caracteristicas;
    $producto->Disponibles = $request->Disponibles;
    $producto->save();//Guarda los datos del request en la base de datos productos

    return redirect('/productos');
 });
//*********Eliminar todos los productos******** */
 Route::delete("/productos/{$id}",function($id){
    Productos::findOrFail($id)->delete();

    return redirect('/productos');
});



