<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['persona']=persona::paginate(8);
        return view('dash.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crub.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'nombres'=>'required|string|max:50',
            'apellidos'=>'required|string|max:50',
            'tipo_documento'=>'required|string|max:50',
            'numero_documento'=>'required|string|max:50',
            'direccion'=>'required|string|max:50',
            'telefono'=>'required|max:10',
            'foto'=>'required|max:1000|mimes: jpeg,png,jpg',

        ];
        $mensaje=[
            'required'=>'El: attribute es requerido',
            'foto.required'=>'La foto es requerida',
        ];

        $this->validate($request,$campos,$mensaje) ;


        $datospersona = request();

       //empleado::insert($datosEmpleado);
       // return response()->json($datosEmpleado);
       if($request->hasFile('foto')){

           $rutafoto=$request->file('foto')->store('uploads','public');
           $datospersona['foto']=$rutafoto;
       }

       persona::insert($datospersona);

       return redirect('/persona');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
