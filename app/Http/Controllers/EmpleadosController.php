<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use DB;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Empleado::all();
        return view('empleados')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sexo = $request->get('accountType');
        //validamos el sexo 
        if ($sexo == 'Hombre')
        {
            $sex = 'H';
        }
        else
        {
            $sex = 'M';
        }
        //validacion de datos con el backend
        $correo = $request->get('correo');
        $validate = Empleado::where('email',$correo)->count();
        
        if($validate > 0)
        {
            return 'Existe registro con este correo';
        }
        else{
            $e = new Empleado;
            $e->nombre = $request->get('nombre');
            $e->apellidos = $request->get('apellido');
            $e->sexo = $sex;
            $e->email = $correo;
            $e->save();
            return redirect('empleados');
        }

       
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $view = Empleado::where('id',$id)->first();
        return view('edit')->with('data',$view);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $e = Empleado::find($id);
        $e->nombre = $request->get('nombre');
        $e->apellidos = $request->get('apellido');
        $e->email = $request->get('correo');
        $e->updated_at = date('Y-m-d H:i:s');
        $e->update();
        return redirect('empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Empleado::find($id);
        $note->delete();
        return redirect('empleados');
    }
}
