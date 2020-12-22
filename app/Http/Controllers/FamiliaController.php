<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    // Funcion para controlar Login 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $familiares = Familia::latest()->paginate(10);

        return view('familiares.index',compact('familiares'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('familiares.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'dni_participante' => 'required',
            'dni_familiar' => 'required',
            'relacion' => 'required',
            'apellido' => 'required',
            'nombres' => 'required',
            'fecha_nacimiento' => 'required',
            'domicilio' => 'required',
        ]);
    
        Familia::create($request->all());
     
        return redirect()->route('familiares.index')
                        ->with('success','Familiar creado exitosamente.');
    }


    public function show(Familia $familia)
    {
        return view('familiares.show',compact('familia'));
    }


    public function edit(Familia $familia)
    {
        return view('familiares.edit',compact('familia'));
    }


    public function update(Request $request, Familia $familia)
    {
        $request->validate([
            'dni_participante' => 'required',
            'dni_familiar' => 'required',
            'relacion' => 'required',
            'apellido' => 'required',
            'nombres' => 'required',
            'fecha_nacimiento' => 'required',
            'domicilio' => 'required',
        ]);
    
        $familia->update($request->all());
    
        return redirect()->route('familiares.index')
                        ->with('success','Familiar actualizado correctamente.');
    }

    public function destroy(Familia $familia)
    {
        // Elimino llamando al metodo con la clase Participante, eligiendo por el $id recibido 
        $familia->delete();

        return redirect()->route('familiares.index')
                        ->with('success','Familiar eliminado correctamente.');
    }

    public function delete($id)
    {
        $familia = Familia::find($id);

        return view('familiares.delete', compact('familiar'));
    } 
}
