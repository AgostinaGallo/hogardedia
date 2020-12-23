<?php

namespace App\Http\Controllers;

use App\Models\taller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $talleres = Taller::latest()->paginate(10);

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
    
        Taller::create($request->all());
     
        return redirect()->route('talleres.index')
                        ->with('success','Taller creado exitosamente.');
    }


    public function show(taller $taller)
    {
        return view('talleres.show',compact('taller'));
    }


    public function edit(taller $taller)
    {
        return view('talleres.edit',compact('taller'));
    }


    public function update(Request $request, taller $taller)
    {
        $request->validate([
            'dni' => 'required',
            'taller' => 'required',
        ]);
    
        $taller->update($request->all());
    
        return redirect()->route('talleres.index')
                        ->with('success','Taller actualizado correctamente.');
    }


    public function destroy(taller $taller)
    {
        $taller->delete();

        return redirect()->route('talleres.index')
                        ->with('success','Taller eliminado correctamente.');
    }


    public function delete($id)
    {
        $taller = Taller::find($id);

        return view('talleres.delete', compact('taller'));
    }   
}
