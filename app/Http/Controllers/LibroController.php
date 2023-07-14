<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    
    public function inicio(){

        $datos['titulo'] = 'Libreria';
                return view('inicio', $datos);

       
    }

    public function Libros()
    {
        $datos['titulo'] = 'Listado de todos los libros';
        $datos['libros'] = Libro::all(); 
        
        return view('lista',$datos);
    }

    public function detalleLibro($id){
       
    

        $datos['titulo'] = 'Detalle y informacion de libro';
        $datos['libro'] = Libro::find($id);
        return view('detalle')->with($datos);

    }
    public function alta(){

        $datos['titulo'] = 'Alta de nuevo libro';
        return view('alta')->with($datos);
    }


}
