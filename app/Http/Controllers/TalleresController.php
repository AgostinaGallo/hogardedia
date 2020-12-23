<?php

namespace App\Http\Controllers;

use App\Models\talleres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalleresController extends Controller
{

    public function index()
    {
        $talleres = Talleres::latest()->paginate(10);

        return view('talleres.index',compact('talleres'));
    }


    public function create()
    {
        return view('talleres.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required',
            'taller' => 'required',
        ]);

        Talleres::create($request->all());

        return redirect()->route('talleres.index')
                        ->with('success','Taller creado exitosamente.');
    }


    public function show(talleres $talleres)
    {
        return view('talleres.show',compact('talleres'));
    }


    public function edit(talleres $talleres)
    {
        return view('talleres.edit',compact('talleres'));
    }


    public function update(Request $request, talleres $talleres)
    {
        $request->validate([
            'dni' => 'required',
            'taller' => 'required',
        ]);

        $talleres->update($request->all());

        return redirect()->route('talleres.index')
                        ->with('success','Taller actualizado correctamente.');
    }


    public function destroy(talleres $talleres)
    {
        // Elimino llamando al metodo con la clase Participante, eligiendo por el $id recibido
        $talleres->delete();

        return redirect()->route('talleres.index')
                        ->with('success','Taller eliminado correctamente.');
    }


    public function delete($id)
    {
        $talleres = Talleres::find($id);

        return view('talleres.delete', compact('talleres'));
    }
}
