<?php

namespace App\Http\Controllers;

use App\Models\Tienda;

use Illuminate\Http\Request;
use App\Exports\TiendasExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TiendasImport;


class TiendaController extends Controller
{

    public function export()
    {
        //
        return Excel::download(new TiendasExport, 'tiendas.xlsx');
        
    }

    public function import(Request $request)
    {
        //

        $file = $request->file('file');

        Excel::import(new TiendasImport, $file);
        
        return redirect('tienda')->with('success', 'All good!');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['tiendas'] = Tienda::paginate(10);
        return view('tienda.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tienda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $datosTienda = request()-> all();
       $datosTienda = request()-> except('_token');
        Tienda::insert($datosTienda);
        return redirect('tienda')->with('Tcrear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tienda = Tienda::find($id);

        return view('tienda.show',compact('tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tienda = Tienda::findOrFail($id);
        return view('tienda.edit', compact('tienda'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosTienda = request()-> except(['_token','_method']);
        Tienda::where('id','=',$id)->update($datosTienda);
        
        return redirect()->route('tienda.index')
            ->with('Tactualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tienda::destroy($id);
        return redirect('tienda')->with('Teliminar', 'ok');
    }
}
