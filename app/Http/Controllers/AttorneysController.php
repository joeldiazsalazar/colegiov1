<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attorney;

class AttorneysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $attorney = Attorney::all();
        return view('attorney.index',compact('attorney'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attorney.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attorney = Attorney::create($request->all());

        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   

        if ($attorney) {
        // alert()->success('Rol Creado')->persistent("Cerrar");
        alert()->success('<a href="/attorneys/create/">Desea agregar otro apoderado?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('attorneys.index');

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
         $attorney = Attorney::all();

        return view('attorney.show',compact('attorney'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attorney = Attorney::findOrFail($id);
        $att = Attorney::all();

        return view('attorney.edit',compact('attorney','att'));
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
        $attorney = Attorney::findOrFail($id);

        $attorney->update($request->all());

        // alert()->success('Category deleted successfully', 'Success')->persistent("Close");
        return back()->with('info','Apoderado actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attorney = Attorney::findOrFail($id);
        $attorney->delete();
        //redireccionar
        alert()->success('Apoderado eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }
}
