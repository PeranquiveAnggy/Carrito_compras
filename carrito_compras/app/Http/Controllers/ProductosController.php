<?php
namespace App\Http\Controllers;

use App\Models\Productos;
class ProductosController extends Controller
{

    //----------------------------------------------------------------
    //------FUNCION CREAR SOLICITUD-----------------------------------
    //----------------------------------------------------------------

    public function crearSolicitudFront()
    {
        $usuario = session("usuario");
        $prod = Productos::get();




    }
    //----------------------------------------------------------------
    //------FUNCION EDITAR SOLICITUD-----------------------------------
    //----------------------------------------------------------------

  

}
