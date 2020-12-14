<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Poet_Crud extends Controller
{

    public function index()
    {
        $poet = DB::table('Poetas')
            ->orderBy('idPoeta')
            ->get();
        return view('poets',[
            'poetas' => $poet
        ]);
    }


    public function create()
    {
        return view('altaPoeta');
    }


    public function store(Request $request)
    {
        $poet = DB::table('Poetas')
            ->insert([
                'Nombre' => $request->input('Nombre'),
                'Apellido' => $request->input('Apellido'),

            ]);
        return redirect()->action('Poet_Crud@index')
            ->with('status', 'Poeta Creado Exitosamente');
    }


    public function show($id)
    {
        $poet=DB::table('Poetas')
            ->where('idPoeta','=', $id)
            ->first();

        return view('altaPoeta', ['poet' => $poet]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $poet = DB::table('Poetas')
            ->where('idPoeta','=', $request->input('id'))
            ->update([
                'Nombre' => $request->input('Nombre'),
                'Apellido' => $request->input('Apellido'),

            ]);
        return redirect()->action('Poet_Crud@index')
            ->with('status', 'Poeta Modificado Exitosamente');
    }


    public function destroy($id)
    {
        $poet = DB::table('Poetas')
            ->where('idPoeta','=', $id)
            ->delete();
        return redirect()->action('Poet_Crud@index')
            ->with('status', 'Usuario Eliminado Exitosamente');
    }
}
