<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(10);

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $producto = new Producto();
        $categorias = Categoria::pluck('Nombre_categoria','id');
        $marcas = Marca::pluck('Nombre_marca','id');
        return view('producto.create', compact('producto','categorias','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        
        $producto = $request->except('_token');

        if ($request->hasFile('imagen')){
            $producto['imagen']=$request->file('imagen')->store('uploads','public');
        }

        Producto::insert($producto);

        return redirect()->route('productos.index')
            ->with('Pagregado', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        $categorias = Categoria::pluck('Nombre_categoria','id');
        $marcas = Marca::pluck('Nombre_marca','id');
        return view('producto.edit', compact('producto','categorias','marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $datosproducto = request()-> except(['_token','_method']);
            if ($request->hasFile('imagen')){
    
                $prod=Producto::findOrFail($id);  
                
                Storage::delete('public/'.$prod->imagen);
    
                $datosproducto['imagen']=$request->file('imagen')->store('uploads','public');
            }

            Producto::where('id','=',$id)->update($datosproducto);

            return redirect()->route('productos.index')
            ->with('Pactualizado', 'ok');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {



            $prod=Producto::findOrFail($id);  
            
            Storage::delete('public/'.$prod->imagen);
        

        Producto::destroy($id);

        return redirect('productos')->with('eliminar', 'ok');
    }
}
