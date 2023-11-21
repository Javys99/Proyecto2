<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['usuarios']=Usuario::all();
        return view('usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre' => 'required|string|max:100'
             /**
            *'apellido_paterno' => 'required|string|max:100',
            *'apellido_materno' => 'required|string|max:100',
            *'correo' => 'required|unique:usuarios,correo|email'
            */
            
        ];
        $validaciones= validator($request->all(),$campos);
        if($validaciones->fails()){
            return $validaciones->errors()->all();
        }
        $datosUsuario = Usuario::create($request->all());
        //$datosUsuario = request()->except('_token');
        //Usuario::create($datosUsuario);

        $response = Http::get('http://localhost:8002');
        $perro = $response->json();

    // Asignar un perro al nuevo nombre
        $datosUsuario->perros()->create([
        'nombre' => $perro['nombre'],
        'dueño_id' => $perro['dueño_id'],
    ]);



        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.form');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario= Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) 
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            /** 
             *'apellido_paterno'=>'required|string|max:100',
            *'apellido_materno'=>'required|string|max:100',
            *'correo'=>'required|email',
            */
           
            
        ];

        $this->validate($request,$campos);

        $datosUsuario = request()->except(['_token','_method']);

        Usuario::where('id','=',$id)->update($datosUsuario);

        $usuario=Usuario::findOrFail($id);
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('usuarios');
    }
}
