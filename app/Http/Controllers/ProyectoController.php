<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;


class ProyectoController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyecto.index', ['proyectos' => $proyectos]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("proyecto.create");
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre"=>"required",
            "descripcion"=>"required",
            "imagen"=>"required"
        ]);
        Proyecto::create($request->all());
        return redirect()->route("proyecto.index")
            ->with("success","Proyecto creado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        Proyecto::find($proyecto);
        return view("proyecto.show",["proyecto"=>$proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'id' => 'required|unique:proyectos,id,'.$id,
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        // Actualizar el proyecto
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('proyecto.index')->with('success', 'Proyecto actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Proyecto::find($id);

        if ($producto) {
            return redirect()->route("proyecto.index")->with("error", "Proyecto no encontrado");
        }

        $producto->delete();

        return redirect()->route("proyecto.index")->with("success", "Proyecto eliminado correctamente");
    }

}
