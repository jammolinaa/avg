<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Http\Requests\EstudianteRequest;

/**
 * Class EstudianteController
 * @package App\Http\Controllers
 */
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::paginate();

        return view('estudiante.index', compact('estudiantes'))
            ->with('i', (request()->input('page', 1) - 1) * $estudiantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiante = new Estudiante();
        return view('estudiante.create', compact('estudiante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstudianteRequest $request)
    {
        Estudiante::create($request->validated());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        return view('estudiante.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);

        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstudianteRequest $request, Estudiante $estudiante)
    {
        $estudiante->update($request->validated());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante updated successfully');
    }

    public function destroy($id)
    {
        Estudiante::find($id)->delete();

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante deleted successfully');
    }
}
