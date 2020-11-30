<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    // Funcion para controlar Login 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $participantes = Participante::latest()->paginate(5);

        return view('participantes.index',compact('participantes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('participantes.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'apellido' => 'required',
            'nombre' => 'required',
        ]);
    
        Participante::create($request->all());
     
        return redirect()->route('participantes.index')
                        ->with('success','Participante creado exitosamente.');
    }

   
    public function show(Participante $participante)
    {
        return view('participantes.show',compact('participante'));
    }

  
    public function edit(Participante $participante)
    {
        return view('participantes.edit',compact('participante'));
    }

  
    public function update(Request $request, Participante $participante)
    {
        $request->validate([
            'apellido' => 'required',
            'nombre' => 'required',
        ]);
    
        $participante->update($request->all());
    
        return redirect()->route('participantes.index')
                        ->with('success','Participante actualizado correctamente.');
    }

    public function destroy(Participante $participante)
    {
        // Elimino llamando al metodo con la clase Participante, eligiendo por el $id recibido 
        $participante->delete();

        return redirect()->route('participantes.index')
                        ->with('success','Participante eliminado correctamente.');
    }

    public function delete($id)
    {
        $participante = Participante::find($id);

        return view('participantes.delete', compact('participante'));
    }    
}
