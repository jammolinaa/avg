<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use App\Http\Requests\AprendizRequest;

/**
 * Class AprendizController
 * @package App\Http\Controllers
 */
class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendizs = Aprendiz::paginate();

        return view('aprendiz.index', compact('aprendizs'))
            ->with('i', (request()->input('page', 1) - 1) * $aprendizs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aprendiz = new Aprendiz();
        return view('aprendiz.create', compact('aprendiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AprendizRequest $request)
    {
        Aprendiz::create($request->validated());

        return redirect()->route('aprendiz.index')
            ->with('success', 'Aprendiz created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aprendiz = Aprendiz::find($id);

        return view('aprendiz.show', compact('aprendiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aprendiz = Aprendiz::find($id);

        return view('aprendiz.edit', compact('aprendiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AprendizRequest $request, Aprendiz $aprendiz)
    {
        $aprendiz->update($request->validated());

        return redirect()->route('aprendiz.index')
            ->with('success', 'Aprendiz updated successfully');
    }

    public function destroy($id)
    {
        Aprendiz::find($id)->delete();

        return redirect()->route('aprendiz.index')
            ->with('success', 'Aprendiz deleted successfully');
    }
}
