<?php

namespace App\Http\Controllers;

use App\Models\Colonium;
use Illuminate\Http\Request;

/**
 * Class ColoniumController
 * @package App\Http\Controllers
 */
class ColoniumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colonia = Colonium::paginate();

        return view('colonium.index', compact('colonia'))
            ->with('i', (request()->input('page', 1) - 1) * $colonia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colonium = new Colonium();
        return view('colonium.create', compact('colonium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Colonium::$rules);

        $colonium = Colonium::create($request->all());

        return redirect()->route('colonia.index')
            ->with('success', 'Colonium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colonium = Colonium::find($id);

        return view('colonium.show', compact('colonium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colonium = Colonium::find($id);

        return view('colonium.edit', compact('colonium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Colonium $colonium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colonium $colonium)
    {
        request()->validate(Colonium::$rules);

        $colonium->update($request->all());

        return redirect()->route('colonia.index')
            ->with('success', 'Colonium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $colonium = Colonium::find($id)->delete();

        return redirect()->route('colonia.index')
            ->with('success', 'Colonium deleted successfully');
    }
}
